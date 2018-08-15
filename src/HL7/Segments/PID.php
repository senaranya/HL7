<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * PID segment class
 * Reference: https://corepointhealth.com/resource-center/hl7-resources/hl7-pid-segment
 */
class PID extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('PID', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setPatientID($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Patient ID (Internal ID)
     * @param string $value
     * @param $position
     * @return bool
     */
    public function setPatientIdentifierList($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setAlternatePatientID($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setPatientName($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setMothersMaidenName($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeOfBirth($value, $position = 7)
    {
        // TODO: Validate if $value is of the form %Y%m%d%H%M%S
        //if ($value !== 'F' && $value !== 'M') {
        //    throw new \InvalidArgumentException("Date should be of the form YYYYmmddHHMMSS. Given: '$value''");
        //}
        return $this->setField($position, $value);
    }

    public function setSex($value, $position = 8)
    {
        if ($value !== 'F' && $value !== 'M') {
            throw new \InvalidArgumentException("Sex should be either 'F' or 'M'. Given: '$value''");
        }
        return $this->setField($position, $value);
    }

    public function setPatientAlias($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setRace($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setPatientAddress($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setCountryCode($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setPhoneNumberHome($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setPhoneNumberBusiness($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setPrimaryLanguage($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setMaritalStatus($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setReligion($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setPatientAccountNumber($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setSSNNumber($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setDriversLicenseNumber($value, $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setMothersIdentifier($value, $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setEthnicGroup($value, $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setBirthPlace($value, $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setMultipleBirthIndicator($value, $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setBirthOrder($value, $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function setCitizenship($value, $position = 26)
    {
        return $this->setField($position, $value);
    }

    public function setVeteransMilitaryStatus($value, $position = 27)
    {
        return $this->setField($position, $value);
    }

    public function setNationality($value, $position = 28)
    {
        return $this->setField($position, $value);
    }

    public function setPatientDeathDateAndTime($value, $position = 29)
    {
        return $this->setField($position, $value);
    }

    public function setPatientDeathIndicator($value, $position = 30)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getPatientID($position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Patient ID (Internal ID)
     * @param $position
     * @return array|null|string
     */
    public function getPatientIdentifierList($position = 3)
    {
        return $this->getField($position);
    }

    public function getAlternatePatientID($position = 4)
    {
        return $this->getField($position);
    }

    public function getPatientName($position = 5)
    {
        return $this->getField($position);
    }

    public function getMothersMaidenName($position = 6)
    {
        return $this->getField($position);
    }

    public function getDateTimeOfBirth($position = 7)
    {
        return $this->getField($position);
    }

    public function getSex($position = 8)
    {
        return $this->getField($position);
    }

    public function getPatientAlias($position = 9)
    {
        return $this->getField($position);
    }

    public function getRace($position = 10)
    {
        return $this->getField($position);
    }

    public function getPatientAddress($position = 11)
    {
        return $this->getField($position);
    }

    public function getCountryCode($position = 12)
    {
        return $this->getField($position);
    }

    public function getPhoneNumberHome($position = 13)
    {
        return $this->getField($position);
    }

    public function getPhoneNumberBusiness($position = 14)
    {
        return $this->getField($position);
    }

    public function getPrimaryLanguage($position = 15)
    {
        return $this->getField($position);
    }

    public function getMaritalStatus($position = 16)
    {
        return $this->getField($position);
    }

    public function getReligion($position = 17)
    {
        return $this->getField($position);
    }

    public function getPatientAccountNumber($position = 18)
    {
        return $this->getField($position);
    }

    public function getSSNNumber($position = 19)
    {
        return $this->getField($position);
    }

    public function getDriversLicenseNumber($position = 20)
    {
        return $this->getField($position);
    }

    public function getMothersIdentifier($position = 21)
    {
        return $this->getField($position);
    }

    public function getEthnicGroup($position = 22)
    {
        return $this->getField($position);
    }

    public function getBirthPlace($position = 23)
    {
        return $this->getField($position);
    }

    public function getMultipleBirthIndicator($position = 24)
    {
        return $this->getField($position);
    }

    public function getBirthOrder($position = 25)
    {
        return $this->getField($position);
    }

    public function getCitizenship($position = 26)
    {
        return $this->getField($position);
    }

    public function getVeteransMilitaryStatus($position = 27)
    {
        return $this->getField($position);
    }

    public function getNationality($position = 28)
    {
        return $this->getField($position);
    }

    public function getPatientDeathDateAndTime( $position = 29)
    {
        return $this->getField($position);
    }

    public function getPatientDeathIndicator($position = 30)
    {
        return $this->getField($position);
    }
}
