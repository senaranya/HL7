<?php

declare(strict_types=1);

namespace Aranyasen\HL7;

use Aranyasen\Exceptions\HL7Exception;
use ReflectionClass;

trait SegmentManagerTrait
{
    /**
     * Get the segment identified by index as string, using the messages separators.
     *
     * @param int $index Index for segment to get
     * @return string|null String representation of segment
     */
    public function getSegmentAsString(int $index): ?string
    {
        $segment = $this->getSegmentByIndex($index);

        if ($segment === null) {
            return null;
        }

        return $this->segmentToString($segment);
    }

    /**
     * Get the field identified by $fieldIndex from segment $segmentIndex.
     *
     * Returns empty string if field is not set.
     *
     * @param int $segmentIndex Index for segment to get
     * @param int $fieldIndex Index for field to get
     * @return null|string String representation of field
     */
    public function getSegmentFieldAsString(int $segmentIndex, int $fieldIndex): ?string
    {
        $segment = $this->getSegmentByIndex($segmentIndex);

        if ($segment === null) {
            return null;
        }

        $field = $segment->getField($fieldIndex);

        if (!$field) {
            return null;
        }

        $fieldString = null;

        if (is_array($field)) {
            foreach ($field as $i => $value) {
                is_array($value)
                    ? ($fieldString .= implode($this->subcomponentSeparator, $value))
                    : ($fieldString .= $value);

                if ($i < (count($field) - 1)) {
                    $fieldString .= $this->componentSeparator;
                }
            }
        } else {
            $fieldString .= $field;
        }

        return $fieldString;
    }
    /**
     * Check if given segment is present in the message object
     */
    public function hasSegment(string $segment): bool
    {
        return count($this->getSegmentsByName(strtoupper($segment))) > 0;
    }

    /**
     * Return the first segment with given name in the message
     */
    public function getFirstSegmentInstance(string $segment): ?Segment
    {
        if (!$this->hasSegment($segment)) {
            return null;
        }
        return $this->getSegmentsByName($segment)[0];
    }

    /**
     * @param bool $reIndex After deleting, re-index remaining segments of same name
     */
    public function removeSegment(Segment $segment, bool $reIndex = false): void
    {
        if (($key = array_search($segment, $this->segments, true)) !== false) {
            unset($this->segments[$key]);
        }

        if (!$reIndex) {
            return;
        }

        $segments = $this->getSegmentsByName($segment->getName());
        $index = 1;
        foreach ($segments as $seg) {
            $seg->setField(1, $index++);
        }
    }

    /**
     * Append a segment to the end of the message
     */
    public function addSegment(Segment $segment): bool
    {
        $isFirstSegment = count($this->segments) === 0;
        if ($isFirstSegment && $segment->getName() !== 'MSH') {
            throw new HL7Exception('First segment added to an empty Message should be MSH');
        }

        if ($isFirstSegment) {
            $this->resetCtrl($segment);
        }

        $this->segments[] = $segment;

        return true;
    }

    /**
     * Insert a segment.
     * Setting MSH on index 0 will re-validate field separator, control characters and hl7 version, based on MSH(1),
     * MSH(2) and MSH(12)
     *
     * @param null|int $index  Index where segment should be inserted
     * @param bool $replace  Replace the current segment in given $index
     * @throws HL7Exception
     */
    public function insertSegment(Segment $segment, ?int $index = null, bool $replace = false): void
    {
        if ($index > count($this->segments)) {
            throw new HL7Exception("Index '$index' greater than the number of total segments " .
                count($this->segments));
        }

        if ($index === 0) {
            if ($segment->getName() !== 'MSH') {
                throw new HL7Exception('Only MSH can be inserted at position 0');
            }
            if ($this->hasSegment('MSH') && !$replace) {
                throw new HL7Exception('MSH already exists. It can not be replaced unless $replace is true');
            }
            $this->resetCtrl($segment);
            array_unshift($this->segments, $segment);
            return;
        }

        if ($index === count($this->segments)) {
            $this->addSegment($segment);
            return;
        }

        if ($replace) {
            $this->segments[$index] = $segment;
        }

        // If $index is less than total number of current segments. This is a true "insert" scenario...
        $this->segments =
            array_merge(
                array_slice($this->segments, 0, $index),
                [$segment],
                array_slice($this->segments, $index)
            );
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
        foreach ($this->segments as $key => $value) {
            if ($value === $segment) {
                return $key;
            }
        }
        return null;
    }

    /**
     * Return an array of all segments with the given name
     *
     * @param string $name Segment name
     * @return array<Segment>
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
     * Remove the segment indexed by $index.
     *
     * If it doesn't exist, nothing happens, if it does, all segments after this one will be moved one index up.
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
     * Set the segment on index.
     *
     * If index is out of range, or not provided, do nothing. Setting MSH on index 0 will re-validate field separator,
     * control characters and hl7 version, based on MSH(1), MSH(2) and MSH(12).
     *
     * @param int $index Index where segment is set
     * @throws HL7Exception
     * @deprecated Use insertSegment() instead
     */
    public function setSegment(Segment $segment, int $index): bool
    {
        if ($index > count($this->segments)) {
            throw new HL7Exception('Index out of range');
        }

        if ($index === 0 && $segment->getName() === 'MSH') {
            $this->resetCtrl($segment);
        }

        $this->segments[$index] = $segment;

        return true;
    }

    /**
     * @throws HL7Exception
     */
    public function replaceSegment(Segment $segment, int $index): void
    {
        $this->insertSegment($segment, $index, true);
    }

    /**
     * Return an array containing all segments in the right order.
     *
     * @return array<Segment>
     */
    public function getSegments(): array
    {
        return $this->segments;
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
        $reflector = new ReflectionClass($this);
        $segments = glob(dirname($reflector->getFileName()) . '/Segments/*.php');

        // Go through each available segment class and reset its ID
        foreach ($segments as $file) { // ['OBR', 'PID', 'OBX', 'IN1'...]
            $className = "Aranyasen\\HL7\\Segments\\" . pathinfo($file, PATHINFO_FILENAME);
            if (class_exists($className) && method_exists($className, 'resetIndex')) {
                $className::resetIndex();
            }
        }
    }

    /**
     * @throws HL7Exception
     */
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

    /**
     * Return an array of all segments with the given subclass of Segment
     *
     * @param  string  $segmentClass  Segment class
     * @return array List of segments identified by class
     * @throws HL7Exception
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
     * Remove given segment
     *
     * @return int Count of segments removed
     * @throws HL7Exception
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
     * Reindex all the segments in the message
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
     * After removing segments from the middle of the message, $msg->getSemgnets() returns an array with gaps in the
     * keys. This method can be used to re-key the segments array
     */
    public function rekeySegmentsInArray(): void
    {
        $this->segments = array_values($this->segments);
    }

    /**
     * Return the first segment of the given class in the message
     *
     * @return mixed|null
     * @throws HL7Exception
     */
    public function getFirstSegmentInstanceByClass(string $segmentClass): Segment|null
    {
        if (!$this->hasSegmentOfClass($segmentClass)) {
            return null;
        }
        return $this->getSegmentsByClass($segmentClass)[0];
    }

    /**
     * Check if given segment is present in the message object by class name
     * @throws HL7Exception
     */
    public function hasSegmentOfClass(string $segmentClass): bool
    {
        return count($this->getSegmentsByClass($segmentClass)) > 0;
    }

    /**
     * Check if given segment is present in the message object by class name
     * @throws HL7Exception
     */
    public function hasSegmentByClass(string $segmentClass): bool
    {
        return count($this->getSegmentsByClass($segmentClass)) > 0;
    }
}
