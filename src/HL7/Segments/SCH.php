<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * SCH segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-siu-message
 * http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/SCH
 */
class SCH extends Segment
{
    public function __construct(?array $fields = null)
    {
        parent::__construct('SCH', $fields);
    }

    /**
     * Set Placer Appointment ID (SCH.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setPlacerAppointmentID($value, int $position = 1): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Filler Appointment ID (SCH.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setFillerAppointmentID($value, int $position = 2): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Occurrence Number (SCH.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setOccurrenceNumber($value, int $position = 3): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Placer Group Number (SCH.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setPlacerGroupNumber($value, int $position = 4): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Schedule ID (SCH.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setScheduleID($value, int $position = 5): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Event Reason (SCH.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setEventReason($value, int $position = 6): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Appointment Reason (SCH.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setAppointmentReason($value, int $position = 7): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Appointment Type (SCH.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setAppointmentType($value, int $position = 8): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Appointment Duration (SCH.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setAppointmentDuration($value, int $position = 9): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Appointment Duration Units (SCH.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setAppointmentDurationUnits($value, int $position = 10): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Appointment Timing Quantity (SCH.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setAppointmentTimingQuantity($value, int $position = 11): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Placer Contact Person (SCH.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setPlacerContactPerson($value, int $position = 12): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Placer Contact Phone Number (SCH.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setPlacerContactPhoneNumber($value, int $position = 13): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Placer Contact Address (SCH.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setPlacerContactAddress($value, int $position = 14): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Placer Contact Location (SCH.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setPlacerContactLocation($value, int $position = 15): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Filler Contact Person (SCH.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setFillerContactPerson($value, int $position = 16): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Filler Contact Phone Number (SCH.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setFillerContactPhoneNumber($value, int $position = 17): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Filler Contact Address (SCH.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setFillerContactAddress($value, int $position = 18): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Filler Contact Location (SCH.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setFillerContactLocation($value, int $position = 19): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Enteredby Person (SCH.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setEnteredbyPerson($value, int $position = 20): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Enteredby Phone Number (SCH.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setEnteredbyPhoneNumber($value, int $position = 21): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Enteredby Location (SCH.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setEnteredbyLocation($value, int $position = 22): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Parent Placer Appointment ID (SCH.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setParentPlacerAppointmentID($value, int $position = 23): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Parent Filler Appointment ID (SCH.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setParentFillerAppointmentID($value, int $position = 24): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Set Filler Status Code (SCH.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setFillerStatusCode($value, int $position = 25): bool
    {
         return $this->setField($position, $value);
    }

    /**
     * Get Placer Appointment ID (SCH.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerAppointmentID(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler Appointment ID (SCH.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getFillerAppointmentID(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Occurrence Number (SCH.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getOccurrenceNumber(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Placer Group Number (SCH.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerGroupNumber(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Schedule ID (SCH.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getScheduleID(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Event Reason (SCH.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getEventReason(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Appointment Reason (SCH.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getAppointmentReason(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Appointment Type (SCH.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getAppointmentType(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Appointment Duration (SCH.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getAppointmentDuration(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Appointment Duration Units (SCH.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getAppointmentDurationUnits(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Appointment Timing Quantity (SCH.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getAppointmentTimingQuantity(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Placer Contact Person (SCH.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerContactPerson(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Placer Contact Phone Number (SCH.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerContactPhoneNumber(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Placer Contact Address (SCH.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerContactAddress(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Placer Contact Location (SCH.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerContactLocation(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler Contact Person (SCH.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getFillerContactPerson(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler Contact Phone Number (SCH.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getFillerContactPhoneNumber(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler Contact Address (SCH.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getFillerContactAddress(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler Contact Location (SCH.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getFillerContactLocation(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Enteredby Person (SCH.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getEnteredbyPerson(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Enteredby Phone Number (SCH.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getEnteredbyPhoneNumber(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Enteredby Location (SCH.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getEnteredbyLocation(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Parent Placer Appointment ID (SCH.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getParentPlacerAppointmentID(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Parent Filler Appointment ID (SCH.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getParentFillerAppointmentID(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler Status Code (SCH.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getFillerStatusCode(int $position = 25)
    {
        return $this->getField($position);
    }
}
