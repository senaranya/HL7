<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * ARQ segment class
 *
 * ARQ - Appointment Request
 * The ARQ segment defines a request for the booking of an appointment. 
 * It is used in transactions sent from an application acting in the role of a placer.
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/ARQ
 */
class ARQ extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('ARQ', $fields);
    }

    public function setPlacerAppointmentID(int $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setFillerAppointmentID($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setOccurrenceNumber($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerGroupNumber($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setScheduleID($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setRequestEventReason($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setAppointmentReason($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setAppointmentType($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setAppointmentDuration($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setAppointmentDurationUnits($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setRequestedStartDateTimeRange($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setPriority($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setRepeatingInterval($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setRepeatingIntervalDuration($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerContactPerson($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerContactPhoneNumber($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerContactAddress($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerContactLocation($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setEnteredByPerson($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setEnteredByPhoneNumber($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setEnteredByLocation($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setParentPlacerAppointmentID($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setParentFillerAppointmentID($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerOrderNumber($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setFillerOrderNumber($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }



    public function getPlacerAppointmentID(int $position = 1)
    {
        return $this->getField($position);
    }
    
    public function getFillerAppointmentID(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getOccurrenceNumber(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getPlacerGroupNumber(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getScheduleID(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getRequestEventReason(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getAppointmentReason(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getAppointmentType(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getAppointmentDuration(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getAppointmentDurationUnits(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getRequestedStartDateTimeRange(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getPriority(int $position = 12)
    {
        return $this->getField($position);
    }

    public function getRepeatingInterval(int $position = 13)
    {
        return $this->getField($position);
    }

    public function getRepeatingIntervalDuration(int $position = 14)
    {
        return $this->getField($position);
    }

    public function getPlacerContactPerson(int $position = 15)
    {
        return $this->getField($position);
    }

    public function getPlacerContactPhoneNumber(int $position = 16)
    {
        return $this->getField($position);
    }

    public function getPlacerContactAddress(int $position = 17)
    {
        return $this->getField($position);
    }

    public function getPlacerContactLocation(int $position = 18)
    {
        return $this->getField($position);
    }

    public function getEnteredByPerson(int $position = 19)
    {
        return $this->getField($position);
    }

    public function getEnteredByPhoneNumber(int $position = 20)
    {
        return $this->getField($position);
    }

    public function getEnteredByLocation(int $position = 21)
    {
        return $this->getField($position);
    }

    public function getParentPlacerAppointmentID(int $position = 22)
    {
        return $this->getField($position);
    }

    public function getParentFillerAppointmentID(int $position = 23)
    {
        return $this->getField($position);
    }

    public function getPlacerOrderNumber(int $position = 24)
    {
        return $this->getField($position);
    }

    public function getFillerOrderNumber(int $position = 25)
    {
        return $this->getField($position);
    }
}
