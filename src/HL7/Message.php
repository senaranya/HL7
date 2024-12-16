<?php

declare(strict_types=1);

namespace Aranyasen\HL7;

use Aranyasen\Exceptions\HL7Exception;
use Aranyasen\HL7\Segments\MSH;
use InvalidArgumentException;

/**
 * Class specifying the HL7 message, both request and response.
 *
 * In general one needn't create an instance of the Message class directly, but use the HL7 factory class to create one.
 * When adding segments, note that the segment index starts at 0, so to get the first segment, do
 * ```php $msg->getSegmentByIndex(0) ```
 *
 * The segment separator defaults to \015. To change this, set the global variable $SEGMENT_SEPARATOR.
 */
class Message
{
    use MessageHelpersTrait;

    protected array $segments = [];

    protected string $segmentSeparator;
    protected bool $segmentEndingBar; # true, if '|' at end of each segment is needed
    protected $fieldSeparator;
    protected string $componentSeparator;
    protected string $subcomponentSeparator;
    protected string $repetitionSeparator;
    protected string $escapeChar;
    protected $hl7Version;

    // Split (or not) repeated subfields joined by ~. E.g. if true, parses 3^0~4^1 to [3, '0~4', 1]
    protected bool $doNotSplitRepetition;

    /**
     * Constructor for Message. Consider using the HL7 factory to obtain a message instead.
     *
     * The constructor takes an optional string argument that is a string representation of a HL7 message. If the
     * string representation is not a valid HL7 message. according to the specifications, undef is returned instead of
     * a new instance. This means that segments should be separated within the message with the segment separator
     * (defaults to \015) or a newline, and segments should be syntactically correct. When using the string argument
     * constructor, make sure that you have escaped any characters that would have special meaning in PHP.
     *
     * The control characters and field separator will take the values from the MSH segment, if set. Otherwise defaults
     * will be used. Changing the MSH fields specifying the field separator and control characters after the MSH has
     * been added to the message will result in setting these values for the message.
     *
     * If the message couldn't be created, for example due to a erroneous HL7 message string, an error is raised.
     * @param string|null $msgStr
     * @param array|null $hl7Globals Set control characters or HL7 properties. e.g., ['HL7_VERSION' => '2.5']
     * @param bool $keepEmptySubFields Set this to true to retain empty sub-fields
     * @param bool $resetIndices Reset Indices of each segment to 1.
     * @param bool $autoIncrementIndices True: auto-increment for each instance of same segment.
     * @param bool|null $doNotSplitRepetition If true, repeated segments will be in single array instead of sub-arrays.
     *     Note: Since this is non-standard, it may be removed in future!
     * @throws HL7Exception
     */
    public function __construct(
        ?string $msgStr = null,
        ?array $hl7Globals = null,
        bool $keepEmptySubFields = false,
        bool $resetIndices = false,
        bool $autoIncrementIndices = true,
        ?bool $doNotSplitRepetition = null
    ) {
        // Control characters and other HL7 properties
        $this->segmentSeparator = $hl7Globals['SEGMENT_SEPARATOR'] ?? '\n';
        $this->segmentEndingBar = $hl7Globals['SEGMENT_ENDING_BAR'] ?? true;
        $this->fieldSeparator = $hl7Globals['FIELD_SEPARATOR'] ?? '|';
        $this->componentSeparator = $hl7Globals['COMPONENT_SEPARATOR'] ?? '^';
        $this->subcomponentSeparator = $hl7Globals['SUBCOMPONENT_SEPARATOR'] ?? '&';
        $this->repetitionSeparator = $hl7Globals['REPETITION_SEPARATOR'] ?? '~';
        $this->escapeChar = $hl7Globals['ESCAPE_CHARACTER'] ?? '\\';
        $this->hl7Version = $hl7Globals['HL7_VERSION'] ?? '2.3';

        $this->doNotSplitRepetition = (bool) $doNotSplitRepetition;

        if ($resetIndices) {
            $this->resetSegmentIndices();
        }

        // If no HL7 string is passed to the constructor, nothing else to do
        if (!$msgStr) {
            return;
        }

        $segments = preg_split("/[\n\r" . $this->segmentSeparator . ']/', $msgStr, -1, PREG_SPLIT_NO_EMPTY);
        $this->setSeparators($segments[0]); // First segment is MSH, the control segment

        // Do all segments
        foreach ($segments as $index => $segmentString) {
            $fields = preg_split("/\\" . $this->fieldSeparator . '/', $segmentString);
            $segmentName = array_shift($fields);

            foreach ($fields as $j => $field) {
                // Skip control field (i.e. first field in MSH segment)
                if ($index === 0 && $j === 0) {
                    continue;
                }

                $fields[$j] = $this->extractComponentsFromField($field, $keepEmptySubFields);
            }

            $segment = $this->getSegmentClass($segmentName, $fields, $autoIncrementIndices);

            $this->addSegment($segment);
        }
    }

    /**
     * Append a segment to the end of the message
     */
    public function addSegment(Segment $segment): bool
    {
        if (count($this->segments) === 0) {
            $this->resetCtrl($segment);
        }

        $this->segments[] = $segment;

        return true;
    }

    /**
     * Insert a segment.
     *
     * @param null|int $index Index where segment is inserted
     * @throws InvalidArgumentException
     */
    public function insertSegment(Segment $segment, ?int $index = null): void
    {
        if ($index > count($this->segments)) {
            throw new InvalidArgumentException("Index out of range. Index: $index, Total segments: " .
                                               count($this->segments));
        }

        if ($index === 0) {
            $this->resetCtrl($segment);
            array_unshift($this->segments, $segment);
        } elseif ($index === count($this->segments)) {
            $this->segments[] = $segment;
        } else {
            $this->segments =
                array_merge(
                    array_slice($this->segments, 0, $index),
                    [$segment],
                    array_slice($this->segments, $index)
                );
        }
    }

    /**
     * Return the segment specified by $index.
     *
     * Note: Segment count within the message starts at 0.
     *
     * @param int $index Index where segment is inserted
     */
    public function getSegmentByIndex(int $index): ?Segment
    {
        if ($index >= count($this->segments)) {
            return null;
        }

        return $this->segments[$index];
    }

    public function getSegmentIndex(Segment $segment): ?int
    {
        foreach ($this->segments as $ii => $value) {
            if ($value === $segment) {
                return $ii;
            }
        }
        return null;
    }

    /**
     * Return an array of all segments with the given name
     *
     * @param string $name Segment name
     * @return array List of segments identified by name
     */
    public function getSegmentsByName(string $name): array
    {
        $segmentsByName = [];

        foreach ($this->segments as $segment) {
            if ($segment->getName() === $name) {
                $segmentsByName[] = $segment;
            }
        }

        return $segmentsByName;
    }

    /**
     * Return an array of all segments with the given subclass of Segment
     *
     * @param string $name Segment class
     * @return array List of segments identified by class
     */
    public function getSegmentsByClass(string $segmentClass): array
    {
        if (!is_subclass_of($segmentClass, Segment::class)) {
            throw new HL7Exception("$segmentClass is not a subclass of " . Segment::class);
        }
        $segmentsByClass = [];

        foreach ($this->segments as $segment) {
            if ($segment instanceof $segmentClass) {
                $segmentsByClass[] = $segment;
            }
        }

        return $segmentsByClass;
    }

    /**
     * Remove the segment indexed by $index.
     *
     * If it doesn't exist, nothing happens, if it does, all segments
     * after this one will be moved one index up.
     *
     * @param int $index Index where segment is removed
     */
    public function removeSegmentByIndex(int $index): bool
    {
        if ($index < count($this->segments)) {
            array_splice($this->segments, $index, 1);
        }

        return true;
    }

    /**
     * Remove given segment
     *
     * @return int Count of segments removed
     */
    public function removeSegmentsByName(string $segmentName): int
    {
        $count = 0;
        foreach ($this->getSegmentsByName($segmentName) as $segment) {
            $this->removeSegmentByIndex($this->getSegmentIndex($segment));
            $count++;
        }
        return $count;
    }

    /**
     * Remove given segment
     *
     * @return int Count of segments removed
     */
    public function removeSegmentsByClass(string $segmentClass): int
    {
        if (!is_subclass_of($segmentClass, Segment::class)) {
            throw new HL7Exception("$segmentClass is not a subclass of " . Segment::class);
        }
        $count = 0;
        foreach ($this->getSegmentsByClass($segmentClass) as $segment) {
            $this->removeSegmentByIndex($this->getSegmentIndex($segment));
            $count++;
        }
        return $count;
    }

    /**
     * Set the segment on index.
     *
     * If index is out of range, or not provided, do nothing. Setting MSH on index 0 will re-validate field separator,
     * control characters and hl7 version, based on MSH(1), MSH(2) and MSH(12).
     *
     * @param int $index Index where segment is set
     * @throws InvalidArgumentException
     */
    public function setSegment(Segment $segment, int $index): bool
    {
        if ($index > count($this->segments)) {
            throw new InvalidArgumentException('Index out of range');
        }

        if ($index === 0 && $segment->getName() === 'MSH') {
            $this->resetCtrl($segment);
        }

        $this->segments[$index] = $segment;

        return true;
    }

    /**
     * After change of MSH, reset control fields
     */
    protected function resetCtrl(Segment $segment): bool
    {
        if ($segment->getField(1)) {
            $this->fieldSeparator = $segment->getField(1);
        }

        if (preg_match('/(.)(.)(.)(.)/', (string) $segment->getField(2), $matches)) {
            $this->componentSeparator = $matches[1];
            $this->repetitionSeparator = $matches[2];
            $this->escapeChar = $matches[3];
            $this->subcomponentSeparator = $matches[4];
        }

        if ($segment->getField(12)) {
            $this->hl7Version = $segment->getField(12);
        }

        return true;
    }

    /**
     * Return an array containing all segments in the right order.
     *
     * @return array List of all segments
     */
    public function getSegments(): array
    {
        return $this->segments;
    }

    /**
     * Reindex all of the segments in the message
     */
    public function reindexSegments(): void
    {
        $indexes = [];
        foreach ($this->segments as $segment) {
            if (method_exists($segment, "setID")) {
                if (!array_key_exists($segment->getName(), $indexes)) {
                    $indexes[$segment->getName()] = 1;
                }
                $segment->setId($indexes[$segment->getName()]++);
            }
        }
    }

    /**
     * Return a string representation of this message.
     *
     * This can be used to send the message over a socket to an HL7 server. To print to other output, use the $pretty
     * argument as some true value. This will not use the default segment separator, but '\n' instead.
     *
     * @param boolean $pretty Whether to use \n as separator or default (\r).
     * @return mixed String representation of HL7 message
     * @access public
     * @throws HL7Exception
     */
    public function toString(bool $pretty = false)
    {
        if (empty($this->segments)) {
            throw new HL7Exception('Message contains no data. Can not convert to string');
        }

        // Make sure MSH(1) and MSH(2) are ok, even if someone has changed these values
        $this->resetCtrl($this->segments[0]);

        $message = '';
        foreach ($this->segments as $segment) {
            $segmentString = $this->segmentToString($segment);
            if (!$this->segmentEndingBar) {
                $segmentString = preg_replace('/\|$/', '', $segmentString);
            }
            $message .= $segmentString;
            $message .= $pretty
                ? str_replace(['\r', '\n'], ["\r", "\n"], $this->segmentSeparator)
                : $this->segmentSeparator;
        }

        return $message;
    }

    /**
     * Convert Segment object to string
     */
    public function segmentToString(Segment $segment): string
    {
        $segmentName = $segment->getName();
        $segmentString = $segmentName . $this->fieldSeparator;
        $fields = $segment->getFields(($segmentName === 'MSH' ? 2 : 1));

        foreach ($fields as $field) {
            if (is_array($field)) {
                foreach ($field as $index => $value) {
                    is_array($value)
                        ? ($segmentString .= implode($this->subcomponentSeparator, $value))
                        : ($segmentString .= $value);

                    if ($index < (count($field) - 1)) {
                        $segmentString .= $this->componentSeparator;
                    }
                }
            } else {
                $segmentString .= $field;
            }

            $segmentString .= $this->fieldSeparator;
        }

        return $segmentString;
    }

    /**
     * Reset index attribute of each given segment, so when those are added the indices start from 1
     */
    public function resetSegmentIndices(): void
    {
        $reflector = new \ReflectionClass($this);
        $segments = glob(dirname($reflector->getFileName()) . '/Segments/*.php');

        // Go through each available segment class and reset its ID
        foreach ($segments as $file) { // ['OBR', 'PID', 'OBX', 'IN1'...]
            $className = "Aranyasen\\HL7\\Segments\\" . pathinfo($file, PATHINFO_FILENAME);
            if (class_exists($className) && method_exists($className, 'resetIndex')) {
                $className::resetIndex();
            }
        }
    }

    private function extractComponentsFromField(string $field, bool $keepEmptySubFields): array|string
    {
        $pregFlags = $keepEmptySubFields
            ? 0
            : PREG_SPLIT_NO_EMPTY;

        if ((str_contains($field, $this->repetitionSeparator)) && (! $this->doNotSplitRepetition)) {
            $components = preg_split("/\\" . $this->repetitionSeparator . '/', $field, -1, $pregFlags);
            $fields = [];
            foreach ($components as $index => $component) {
                $fields[$index] = $this->extractComponentsFromField($component, $keepEmptySubFields);
            }

            return $fields;
        }

        $components = preg_split("/\\" . $this->componentSeparator . '/', $field, -1, $pregFlags);
        foreach ($components as $index => $component) {
            $subComps = preg_split("/\\" . $this->subcomponentSeparator . '/', $component);
            // Make it a ref or just the value
            $components[$index] = count($subComps) === 1
                ? $subComps[0]
                : $subComps;
        }

        return count($components) === 1
            ? $components[0]
            : $components;
    }

    /**
     * Set various separators - segment, field etc.
     *
     * @throws HL7Exception
     */
    private function setSeparators(string $msh): void
    {
        if (!preg_match('/^([A-Z0-9]{3})(.)(.)(.)(.)(.)(.)/', $msh, $matches)) {
            throw new HL7Exception('Not a valid message: invalid control segment', E_USER_ERROR);
        }

        [, , $fieldSep, $compSep, $repSep, $esc, $subCompSep, $fieldSepCtrl] = $matches;

        // Check whether field separator is repeated after 4 control characters
        if ($fieldSep !== $fieldSepCtrl) {
            throw new HL7Exception('Not a valid message: field separator invalid', E_USER_ERROR);
        }

        // Set field separator based on control segment
        $this->fieldSeparator = $fieldSep;

        // Set other separators
        $this->componentSeparator = $compSep;
        $this->subcomponentSeparator = $subCompSep;
        $this->escapeChar = $esc;
        $this->repetitionSeparator = $repSep;
    }

    private function getSegmentClass(string $segmentName, array $fields, bool $autoIncrementIndices): Segment
    {
        // If a class exists for the segment under segments/, (e.g., MSH)
        $className = "Aranyasen\\HL7\\Segments\\$segmentName";
        if (!class_exists($className)) {
            return new Segment($segmentName, $fields);
        }

        if ($segmentName === 'MSH') {
            array_unshift($fields, $this->fieldSeparator); # First field for MSH is '|'
            return new $className($fields);
        }

        return new $className($fields, $autoIncrementIndices);
    }
}
