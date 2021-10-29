<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;
use InvalidArgumentException;

/**
 * PID segment class
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/PID
 */
class PID extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('PID', $fields);
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
     * @param int $index
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
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

    public function setSex(string $value, int $position = 8)
    {
        // Ref: https://hl7-definition.caristix.com/v2/HL7v2.4/Tables/0001
        if (!in_array($value, ['A', 'F', 'M', 'N', 'O', 'U'], true)) {
            throw new InvalidArgumentException("Sex should one of 'A', 'F', 'M', 'N', 'O' or 'U'. Given: '$value'");
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

    public function setIdentityUnknownIndicator($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    public function setIdentityReliabilityCode($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    public function setLastUpdateDateTime($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    public function setLastUpdateFacility($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    public function setSpeciesCode($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    public function setBreedCode($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    public function setStrain($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    public function setProductionClassCode($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    public function setTribalCitizenship($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }


    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getPatientID(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Patient ID (Internal ID)
     * @param int $position
     * @return array|null|string
     */
    public function getPatientIdentifierList(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getAlternatePatientID(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getPatientName(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getMothersMaidenName(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getDateTimeOfBirth(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getSex(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getPatientAlias(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getRace(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getPatientAddress(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getCountryCode(int $position = 12)
    {
        return $this->getField($position);
    }

    public function getPhoneNumberHome(int $position = 13)
    {
        return $this->getField($position);
    }

    public function getPhoneNumberBusiness(int $position = 14)
    {
        return $this->getField($position);
    }

    public function getPrimaryLanguage(int $position = 15)
    {
        return $this->getField($position);
    }

    public function getMaritalStatus(int $position = 16)
    {
        return $this->getField($position);
    }

    public function getReligion(int $position = 17)
    {
        return $this->getField($position);
    }

    public function getPatientAccountNumber(int $position = 18)
    {
        return $this->getField($position);
    }

    public function getSSNNumber(int $position = 19)
    {
        return $this->getField($position);
    }

    public function getDriversLicenseNumber(int $position = 20)
    {
        return $this->getField($position);
    }

    public function getMothersIdentifier(int $position = 21)
    {
        return $this->getField($position);
    }

    public function getEthnicGroup(int $position = 22)
    {
        return $this->getField($position);
    }

    public function getBirthPlace(int $position = 23)
    {
        return $this->getField($position);
    }

    public function getMultipleBirthIndicator(int $position = 24)
    {
        return $this->getField($position);
    }

    public function getBirthOrder(int $position = 25)
    {
        return $this->getField($position);
    }

    public function getCitizenship(int $position = 26)
    {
        return $this->getField($position);
    }

    public function getVeteransMilitaryStatus(int $position = 27)
    {
        return $this->getField($position);
    }

    public function getNationality(int $position = 28)
    {
        return $this->getField($position);
    }

    public function getPatientDeathDateAndTime( int $position = 29)
    {
        return $this->getField($position);
    }

    public function getPatientDeathIndicator(int $position = 30)
    {
        return $this->getField($position);
    }
    
    public function getIdentityUnknownIndicator(int $position = 31)
    {
        return $this->getField($position);
    }
    
    public function getIdentityReliabilityCode(int $position = 32)
    {
        return $this->getField($position);
    }
    
    public function getLastUpdateDateTime(int $position = 33)
    {
        return $this->getField($position);
    }
    
    public function getLastUpdateFacility(int $position = 34)
    {
        return $this->getField($position);
    }
    
    public function getSpeciesCode(int $position = 35)
    {
        return $this->getField($position);
    }
    
    public function getBreedCode(int $position = 36)
    {
        return $this->getField($position);
    }
    
    public function getStrain(int $position = 37)
    {
        return $this->getField($position);
    }
    
    public function getProductionClassCode(int $position = 38)
    {
        return $this->getField($position);
    }
    
    public function getTribalCitizenship(int $position = 39)
    {
        return $this->getField($position);
    }
}
