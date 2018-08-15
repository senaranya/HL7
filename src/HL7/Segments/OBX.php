<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * OBX segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obx-segment
 */
class OBX extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('OBX', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setValueType($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setObservationIdentifier($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setObservationSubId($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setObservationValue($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setUnits($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setReferenceRange($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setAbnormalFlags($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setProbability($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setNatureOfAbnormalTest($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setObserveResultStatus($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setDataLastObsNormalValues($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setUserDefinedAccessChecks($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeOfTheObservation($value, $position = 14)
    {
           return $this->setField($position, $value);
    }

    public function setProducersId($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setResponsibleObserver($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setObservationMethod($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getValueType($position = 2)
    {
        return $this->getField($position);
    }

    public function getObservationIdentifier($position = 3)
    {
        return $this->getField($position);
    }

    public function getObservationSubId($position = 4)
    {
        return $this->getField($position);
    }

    public function getObservationValue($position = 5)
    {
        return $this->getField($position);
    }

    public function getUnits($position = 6)
    {
        return $this->getField($position);
    }

    public function getReferenceRange($position = 7)
    {
        return $this->getField($position);
    }

    public function getAbnormalFlags($position = 8)
    {
        return $this->getField($position);
    }

    public function getProbability($position = 9)
    {
        return $this->getField($position);
    }

    public function getNatureOfAbnormalTest($position = 10)
    {
        return $this->getField($position);
    }

    public function getObserveResultStatus($position = 11)
    {
        return $this->getField($position);
    }

    public function getDataLastObsNormalValues($position = 12)
    {
        return $this->getField($position);
    }

    public function getUserDefinedAccessChecks($position = 13)
    {
        return $this->getField($position);
    }

    public function getDateTimeOfTheObservation($position = 14)
    {
        return $this->getField($position);
    }

    public function getProducersId($position = 15)
    {
        return $this->getField($position);
    }

    public function getResponsibleObserver($position = 16)
    {
        return $this->getField($position);
    }

    public function getObservationMethod($position = 17)
    {
        return $this->getField($position);
    }
}
