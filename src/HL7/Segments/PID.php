<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * PID segment class
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

    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setPatientID($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Patient ID (Internal ID)
     * @param string $value
     * @param int $position
     * @return bool
     */
    public function setPatientIdentifierList($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setAlternatePatientID($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setPatientName($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setMothersMaidenName($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeOfBirth($value, int $position = 7)
    {
        // TODO: Validate if $value is of the form %Y%m%d%H%M%S
        //if ($value !== 'F' && $value !== 'M') {
        //    throw new \InvalidArgumentException("Date should be of the form YYYYmmddHHMMSS. Given: '$value''");
        //}
        return $this->setField($position, $value);
    }

    public function setSex($value, int $position = 8)
    {
        if ($value !== 'F' && $value !== 'M') {
            throw new \InvalidArgumentException("Sex should be either 'F' or 'M'. Given: '$value''");
        }
        return $this->setField($position, $value);
    }

    public function setPatientAlias($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setRace($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setPatientAddress($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setCountryCode($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setPhoneNumberHome($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setPhoneNumberBusiness($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setPrimaryLanguage($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setMaritalStatus($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setReligion($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setPatientAccountNumber($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setSSNNumber($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setDriversLicenseNumber($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setMothersIdentifier($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setEthnicGroup($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setBirthPlace($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setMultipleBirthIndicator($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setBirthOrder($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function setCitizenship($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    public function setVeteransMilitaryStatus($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    public function setNationality($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    public function setPatientDeathDateAndTime($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    public function setPatientDeathIndicator($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

}
