<?php

declare(strict_types=1);

namespace Aranyasen\HL7;

use Aranyasen\Exceptions\HL7Exception;
use Aranyasen\HL7\Segments\MSH;

trait MessageHelpersTrait
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

        if (\is_array($field)) {
            foreach ($field as $i => $value) {
                \is_array($value)
                    ? ($fieldString .= implode($this->subcomponentSeparator, $value))
                    : ($fieldString .= $value);

                if ($i < (\count($field) - 1)) {
                    $fieldString .= $this->componentSeparator;
                }
            }
        } else {
            $fieldString .= $field;
        }

        return $fieldString;
    }

    /**
     * Write HL7 to a file
     *
     * @throws HL7Exception
     */
    public function toFile(string $filename): void
    {
        file_put_contents($filename, $this->toString(true));
        if (!file_exists($filename)) {
            throw new HL7Exception("Failed to write HL7 to file '$filename'");
        }
    }

    public function isOrm(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'ORM');
    }

    public function isOru(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'ORU');
    }

    public function isAdt(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'ADT');
    }

    public function isSiu(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'SIU');
    }

    /**
     * Check if given segment is present in the message object
     */
    public function hasSegment(string $segment): bool
    {
        return count($this->getSegmentsByName(strtoupper($segment))) > 0;
    }

    /**
     * Check if given segment is present in the message object by class name
     */
    public function hasSegmentOfClass(string $segmentClass): bool
    {
        return count($this->getSegmentsByClass($segmentClass)) > 0;
    }

    /**
     * Check if given segment is present in the message object by class name
     */
    public function hasSegmentByClass(string $segmentClass): bool
    {
        return count($this->getSegmentsByClass($segmentClass)) > 0;
    }

    /**
     * Return the first segment with given name in the message
     *
     * @return mixed|null
     */
    public function getFirstSegmentInstance(string $segment)
    {
        if (!$this->hasSegment($segment)) {
            return null;
        }
        return $this->getSegmentsByName($segment)[0];
    }

    /**
     * Return the first segment of the given class in the message
     *
     * @return mixed|null
     */
    public function getFirstSegmentInstanceByClass(string $segmentClass)
    {
        if (!$this->hasSegmentOfClass($segmentClass)) {
            return null;
        }
        return $this->getSegmentsByClass($segmentClass)[0];
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
        /** @var Segment $segment */
        foreach ($segments as $segment) {
            $segment->setField(1, $index++);
        }
    }

    public function isEmpty(): bool
    {
        return empty($this->getSegments());
    }
}
