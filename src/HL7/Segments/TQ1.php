<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * TQ1 segment class
 * The TQ1 segment is used to specify the complex timing of events and actions such as those that occur in order
 * management and scheduling systems. This segment determines the quantity, frequency, priority, and timing
 * of a service.
 * By allowing the segment to repeat, it is possible to have service requests that vary the quantity,
 * frequency and priority of a service request over time.
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/TQ1
 */
class TQ1 extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('TQ1', $fields);
    }

    public function setSetIdTQ1($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuantity($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setRepeatPattern($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setExplicitTime($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setRelativeTimeAndUnits($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setServiceDuration($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setStartDateTime($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    public function setEndDateTime($value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setPriority($value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function setConditionText($value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    public function setTextInstruction($value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    public function setConjunction($value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    public function setOccurrenceDuration($value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    public function setTotalOccurrences($value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    public function getSetIdTQ1(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getQuantity(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getRepeatPattern(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getExplicitTime(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getRelativeTimeAndUnits(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getServiceDuration(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getStartDateTime(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getEndDateTime(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getPriority(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getConditionText(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getTextInstruction(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getConjunction(int $position = 12)
    {
        return $this->getField($position);
    }

    public function getOccurrenceDuration(int $position = 13)
    {
        return $this->getField($position);
    }

    public function getTotalOccurrences(int $position = 14)
    {
        return $this->getField($position);
    }
}
