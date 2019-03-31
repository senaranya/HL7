<?php

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
 *
 * @author     Aranya Sen
 */
class Message
{
    /**
     * Array holding all segments of this message.
     */
    protected $segments;

    /**
     * local value for segment separator
     */
    protected $segmentSeparator;
    /**
     * @var bool Is the bar (|) at the end of each segment required? Default: Yes.
     */
    protected $segmentEndingBar;
    protected $fieldSeparator;
    protected $componentSeparator;
    protected $subcomponentSeparator;
    protected $repetitionSeparator;
    protected $escapeChar;
    protected $hl7Version;

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
     * @param string $msgStr
     * @param array $hl7Globals Set control characters or HL7 properties. e.g., ['HL7_VERSION' => '2.5']
     * @param bool $keepEmptySubFields Set this to true to retain empty sub fields
     * @throws HL7Exception
     */
    public function __construct(string $msgStr = null, array $hl7Globals = null, bool $keepEmptySubFields = false)
    {
        // Array holding the segments
        $this->segments = [];

        // Control characters and other HL7 properties
        $this->segmentSeparator = $hl7Globals['SEGMENT_SEPARATOR'] ?? '\n';
        $this->segmentEndingBar = $hl7Globals['SEGMENT_ENDING_BAR'] ?? true; // Bar (|) at end of each segment. Default: Present
        $this->fieldSeparator = $hl7Globals['FIELD_SEPARATOR'] ?? '|';
        $this->componentSeparator = $hl7Globals['COMPONENT_SEPARATOR'] ?? '^';
        $this->subcomponentSeparator = $hl7Globals['SUBCOMPONENT_SEPARATOR'] ?? '&';
        $this->repetitionSeparator = $hl7Globals['REPETITION_SEPARATOR'] ?? '~';
        $this->escapeChar = $hl7Globals['ESCAPE_CHAR'] ?? '\\';
        $this->hl7Version = $hl7Globals['HL7_VERSION'] ?? '2.3';

        // If an HL7 string is given to the constructor, parse it.
        if ($msgStr) {
            $segments = preg_split("/[\n\r" . $this->segmentSeparator . ']/', $msgStr, -1, PREG_SPLIT_NO_EMPTY);

            // The first segment should be the control segment
            if (!preg_match('/^([A-Z0-9]{3})(.)(.)(.)(.)(.)(.)/', $segments[0], $matches)) {
                throw new HL7Exception('Not a valid message: invalid control segment', E_USER_ERROR);
            }

            [$dummy, $hdr, $fieldSep, $compSep, $repSep, $esc, $subCompSep, $fieldSepCtrl] = $matches;

            // Check whether field separator is repeated after 4 control characters
            if ($fieldSep !== $fieldSepCtrl) {
                throw new HL7Exception('Not a valid message: field separator invalid', E_USER_ERROR);
            }

            // Set field separator based on control segment
            $this->fieldSeparator        = $fieldSep;

            // Set other separators
            $this->componentSeparator    = $compSep;
            $this->subcomponentSeparator = $subCompSep;
            $this->escapeChar            = $esc;
            $this->repetitionSeparator   = $repSep;

            // Do all segments
            foreach ($segments as $i => $iValue) {
                $fields = preg_split("/\\" . $this->fieldSeparator . '/', $segments[$i]);
                $name = array_shift($fields);

                // Now decompose fields if necessary, into arrays
                foreach ($fields as $j => $jValue) {
                    // Skip control field
                    if ($i === 0 && $j === 0) {
                        continue;
                    }

                    $preg_flags = $keepEmptySubFields ? 0 : PREG_SPLIT_NO_EMPTY;
                    $comps = preg_split("/\\" . $this->componentSeparator .'/', $fields[$j], -1, $preg_flags);

                    foreach ($comps as $k => $kValue) {
                        $subComps = preg_split("/\\" . $this->subcomponentSeparator . '/', $comps[$k]);

                        // Make it a ref or just the value
                        (\count($subComps) === 1) ? ($comps[$k] = $subComps[0]) : ($comps[$k] = $subComps);
                    }

                    (\count($comps) === 1) ? ($fields[$j] = $comps[0]) : ($fields[$j] = $comps);
                }

                $seg = null;

                // If a class exists for the segment under segments/, (e.g., MSH)
                $className = "Aranyasen\\HL7\\Segments\\$name";
                if (class_exists($className)) {
                    $name === 'MSH' ? array_unshift($fields, $this->fieldSeparator) : null; # First field for MSH is '|'
                    $seg = new $className($fields);
                }
                else {
                    $seg = new Segment($name, $fields);
                }

                if (!$seg) {
                    trigger_error('Segment not created', E_USER_WARNING);
                }

                $this->addSegment($seg);
            }
        }
    }

    /**
     * Append a segment to the end of the message
     *
     * @param Segment $segment
     * @return bool
     * @access public
     */
    public function addSegment(Segment $segment): bool
    {
        if (\count($this->segments) === 0) {
            $this->resetCtrl($segment);
        }

        $this->segments[] = $segment;

        return true;
    }

    /**
     * Insert a segment.
     *
     * @param Segment $segment
     * @param null|int $index Index where segment is inserted
     * @throws \InvalidArgumentException
     */
    public function insertSegment(Segment $segment, $index = null): void
    {
        if ($index > \count($this->segments)) {
            throw new InvalidArgumentException("Index out of range. Index: $index, Total segments: " .
                \count($this->segments));
        }

        if ($index === 0) {
            $this->resetCtrl($segment);
            array_unshift($this->segments, $segment);
        }
        elseif ($index === \count($this->segments)) {
            $this->segments[] = $segment;
        }
        else {
            $this->segments =
                array_merge(
                    \array_slice($this->segments, 0, $index),
                    [$segment],
                    \array_slice($this->segments, $index)
                );
        }
    }

    /**
     * Return the segment specified by $index.
     *
     * Note: Segment count within the message starts at 0.
     *
     * @param int $index Index where segment is inserted
     * @return Segment
     */
    public function getSegmentByIndex(int $index): ?Segment
    {
        if ($index >= \count($this->segments)) {
            return null;
        }

        return $this->segments[$index];
    }

    /**
     * @param Segment $segment
     * @return int|null
     */
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

        foreach ($this->segments as $seg) {
            if ($seg->getName() === $name) {
                $segmentsByName[] = $seg;
            }
        }

        return $segmentsByName;
    }

    /**
     * Remove the segment indexed by $index.
     *
     * If it doesn't exist, nothing happens, if it does, all segments
     * after this one will be moved one index up.
     *
     * @param int $index Index where segment is removed
     * @return boolean
     * @access public
     */
    public function removeSegmentByIndex(int $index): bool
    {
        if ($index < \count($this->segments)) {
            array_splice($this->segments, $index, 1);
        }

        return true;
    }

    /**
     * Remove given segment
     *
     * @param string $segment
     * @return int Count of segments removed
     */
    public function removeSegmentsByName(string $segment): int
    {
        $count = 0;
        foreach ($this->getSegmentsByName($segment) as $segment) {
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
     * @param Segment $segment
     * @param int $index Index where segment is set
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function setSegment(Segment $segment, int $index): bool
    {
        if (!isset($index) || $index > \count($this->segments)) {
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
     *
     * @param Segment $segment
     * @return bool
     * @access protected
     */
    protected function resetCtrl(Segment $segment)
    {
        if ($segment->getField(1)) {
            $this->fieldSeparator = $segment->getField(1);
        }

        if (preg_match('/(.)(.)(.)(.)/', $segment->getField(2), $matches)) {
            $this->componentSeparator    = $matches[1];
            $this->repetitionSeparator   = $matches[2];
            $this->escapeChar            = $matches[3];
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
     * Return a string representation of this message.
     *
     * This can be used to send the message over a socket to an HL7 server. To print to other output, use the $pretty
     * argument as some true value. This will not use the default segment separator, but '\n' instead.
     *
     * @param boolean $pretty Whether to use \n as separator or default (\r).
     * @return mixed String representation of HL7 message
     * @access public
     */
    public function toString(bool $pretty = false)
    {
        $message = '';

        // Make sure MSH(1) and MSH(2) are ok, even if someone has changed these values
        $msh = $this->segments[0];
        $this->resetCtrl($msh);

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
     * Get the segment identified by index as string, using the messages separators.
     *
     * @param int $index Index for segment to get
     * @return string|null String representation of segment
     */
    public function getSegmentAsString(int $index): ?string
    {
        $seg = $this->getSegmentByIndex($index);

        if ($seg === null) {
            return null;
        }

        return $this->segmentToString($seg);
    }

    /**
     * Get the field identified by $fieldIndex from segment $segmentIndex.
     *
     * Returns empty string if field is not set.
     *
     * @param int $segmentIndex Index for segment to get
     * @param int $fieldIndex Index for field to get
     * @return mixed String representation of field
     * @access public
     */
    public function getSegmentFieldAsString(int $segmentIndex, int $fieldIndex)
    {
        $seg = $this->getSegmentByIndex($segmentIndex);

        if ($seg === null) {
            return null;
        }

        $field = $seg->getField($fieldIndex);

        if (!$field) {
            return null;
        }

        $fieldString = null;

        if (\is_array($field)) {
            foreach ($field as $i => $iValue) {
                \is_array($field[$i])
                    ? ($fieldString .= implode($this->subcomponentSeparator, $field[$i]))
                    : ($fieldString .= $field[$i]);

                if ($i < (\count($field) - 1)) {
                    $fieldString .= $this->componentSeparator;
                }
            }
        }
        else {
            $fieldString .= $field;
        }

        return $fieldString;
    }

    /**
     * Convert Segment object to string
     * @param $seg
     * @return string
     */
    public function segmentToString(Segment $seg): string
    {
        $segmentName = $seg->getName();
        $segStr = $segmentName . $this->fieldSeparator;
        $fields = $seg->getFields(($segmentName === 'MSH' ? 2 : 1));

        foreach ($fields as $field) {
            if (\is_array($field)) {
                foreach ($field as $i => $iValue) {
                    \is_array($field[$i])
                        ? ($segStr .= implode($this->subcomponentSeparator, $field[$i]))
                        : ($segStr .= $field[$i]);

                    if ($i < (\count($field) - 1)) {
                        $segStr .= $this->componentSeparator;
                    }
                }
            } else {
                $segStr .= $field;
            }

            $segStr .= $this->fieldSeparator;
        }

        return $segStr;
    }

    /**
     * Write HL7 to a file
     *
     * @param string $filename
     * @throws HL7Exception
     */
    public function toFile(string $filename): void
    {
        file_put_contents($filename, $this->toString(true));
        if (!file_exists($filename)) {
            throw new HL7Exception("Failed to write HL7 to file '$filename'");
        }
    }

    /**
     * Check if given message is an ORM
     *
     * @return bool
     */
    public function isOrm(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getSegmentsByName('MSH')[0];
        return false !== strpos($msh->getMessageType(), 'ORM');
    }

    /**
     * Check if given message is an ORU
     *
     * @return bool
     */
    public function isOru(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getSegmentsByName('MSH')[0];
        return false !== strpos($msh->getMessageType(), 'ORU');
    }

    /**
     * Check if given message is an ADT
     *
     * @return bool
     */
    public function isAdt(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getSegmentsByName('MSH')[0];
        return false !== strpos($msh->getMessageType(), 'ADT');
    }
}
