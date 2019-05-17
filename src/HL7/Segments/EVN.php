<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * NTE segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-evn-event-type-segment
 */
class EVN extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('EVN', $fields);
        $this->setID($this::$setId++);
    }

    /**
     * Reset index of this segment
     * @param int $index
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setEventTypeCode($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setRecordedDateTime($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeEvent($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setEventReasonCode($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setOperatorID($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setEventOccurred($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function getEventTypeCode(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getRecordedDateTime(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getDateTimeEvent(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getEventReasonCode(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getOperatorID(int $position = 5)
    {
        return $this->setField($position);
    }

    public function getEventOccurred(int $position = 6)
    {
        return $this->setField($position);
    }
}
