<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * OBX segment class
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/OBX
 */
class OBX extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     */
    protected static int $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('OBX', $fields);
        if ($autoIncrementIndices) {
            $this->setID($this::$setId++);
        }
    }

    public function __destruct()
    {
        $this->setID($this::$setId--);
    }

    /**
     * Reset index of this segment
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    /**
     * Set ID (OBX.1)
     *
     * @param int $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Value Type (OBX.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setValueType($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Observation Identifier (OBX.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setObservationIdentifier($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Observation Sub Id (OBX.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setObservationSubId($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Observation Value (OBX.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setObservationValue($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Units (OBX.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setUnits($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Reference Range (OBX.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setReferenceRange($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Abnormal Flags (OBX.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setAbnormalFlags($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Probability (OBX.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setProbability($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Nature Of Abnormal Test (OBX.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setNatureOfAbnormalTest($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Observe Result Status (OBX.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setObserveResultStatus($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Data Last Obs Normal Values (OBX.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setDataLastObsNormalValues($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set User Defined Access Checks (OBX.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setUserDefinedAccessChecks($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Date Time Of The Observation (OBX.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setDateTimeOfTheObservation($value, int $position = 14)
    {
           return $this->setField($position, $value);
    }

    /**
     * Set Producers Id (OBX.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setProducersId($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Responsible Observer (OBX.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setResponsibleObserver($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Observation Method (OBX.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setObservationMethod($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Equipment Instance Identifier (OBX.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setEquipmentInstanceIdentifier($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Date Time Of Analysis (OBX.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setDateTimeOfAnalysis($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (OBX.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Value Type (OBX.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getValueType(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Observation Identifier (OBX.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getObservationIdentifier(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Observation Sub Id (OBX.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getObservationSubId(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Observation Value (OBX.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getObservationValue(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Units (OBX.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getUnits(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Reference Range (OBX.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getReferenceRange(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Abnormal Flags (OBX.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getAbnormalFlags(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Probability (OBX.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getProbability(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Nature Of Abnormal Test (OBX.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getNatureOfAbnormalTest(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Observe Result Status (OBX.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getObserveResultStatus(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Data Last Obs Normal Values (OBX.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getDataLastObsNormalValues(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get User Defined Access Checks (OBX.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getUserDefinedAccessChecks(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Date Time Of The Observation (OBX.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getDateTimeOfTheObservation(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Producers Id (OBX.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getProducersId(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Responsible Observer (OBX.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getResponsibleObserver(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Observation Method (OBX.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getObservationMethod(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Equipment Instance Identifier (OBX.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getEquipmentInstanceIdentifier(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Date Time Of Analysis (OBX.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getDateTimeOfAnalysis(int $position = 19)
    {
        return $this->getField($position);
    }
}
