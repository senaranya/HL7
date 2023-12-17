<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * EVN segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/EVN
 *      https://corepointhealth.com/resource-center/hl7-resources/hl7-evn-event-type-segment
 */
class EVN extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('EVN', $fields);
    }

    /**
     * Set Event Type Code (EVN.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setEventTypeCode($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Recorded Date Time (EVN.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setRecordedDateTime($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Date Time Planned Event (EVN.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setDateTimePlannedEvent($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Event Reason Code (EVN.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setEventReasonCode($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Operator ID (EVN.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setOperatorID($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Event Occurred (EVN.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setEventOccurred($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Get Event TypeCode (EVN.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getEventTypeCode(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Recorded DateTime (EVN.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getRecordedDateTime(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Date TimePlannedEvent (EVN.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getDateTimePlannedEvent(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Event ReasonCode (EVN.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getEventReasonCode(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Operator ID (EVN.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getOperatorID(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Event Occurred (EVN.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getEventOccurred(int $position = 6)
    {
        return $this->getField($position);
    }
}
