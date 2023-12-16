<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;
use InvalidArgumentException;

/**
 * PID segment class
 * Reference: https://corepointhealth.com/resource-center/hl7-resources/hl7-pid-segment
 */
class PID extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     */
    protected static int $setId = 1;

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
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Patient ID (OBR.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setPatientID($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Patient ID (Internal ID)
     * @param string $value
     */
    /**
     * Set Patient IdentifierList (OBR.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setPatientIdentifierList($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Alternate PatientID (OBR.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setAlternatePatientID($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Patient Name (OBR.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setPatientName($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Mothers MaidenName (OBR.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setMothersMaidenName($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Date TimeOfBirth (OBR.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
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

    /**
     * Set Patient Alias (OBR.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setPatientAlias($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Race (OBR.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setRace($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Patient Address (OBR.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setPatientAddress($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Country Code (OBR.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setCountryCode($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Phone NumberHome (OBR.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setPhoneNumberHome($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Phone NumberBusiness (OBR.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setPhoneNumberBusiness($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Primary Language (OBR.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setPrimaryLanguage($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Marital Status (OBR.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setMaritalStatus($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Religion (OBR.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setReligion($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Patient AccountNumber (OBR.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setPatientAccountNumber($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set SSNNumber (OBR.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setSSNNumber($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Drivers LicenseNumber (OBR.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setDriversLicenseNumber($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Mothers Identifier (OBR.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setMothersIdentifier($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ethnic Group (OBR.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setEthnicGroup($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Birth Place (OBR.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setBirthPlace($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Multiple BirthIndicator (OBR.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setMultipleBirthIndicator($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Birth Order (OBR.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setBirthOrder($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Citizenship (OBR.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setCitizenship($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Veterans MilitaryStatus (OBR.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setVeteransMilitaryStatus($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Nationality (OBR.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setNationality($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Patient DeathDateAndTime (OBR.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setPatientDeathDateAndTime($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Patient DeathIndicator (OBR.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setPatientDeathIndicator($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (OBR.1)
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
     * Get Patient ID (OBR.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getPatientID(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Patient ID (Internal ID)
     * @return array|null|string
     */
    /**
     * Get Patient IdentifierList (OBR.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getPatientIdentifierList(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Alternate PatientID (OBR.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getAlternatePatientID(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient Name (OBR.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getPatientName(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Mothers MaidenName (OBR.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getMothersMaidenName(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Date TimeOfBirth (OBR.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getDateTimeOfBirth(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Sex (OBR.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getSex(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient Alias (OBR.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getPatientAlias(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Race (OBR.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getRace(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient Address (OBR.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getPatientAddress(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Country Code (OBR.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getCountryCode(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Phone NumberHome (OBR.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getPhoneNumberHome(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Phone NumberBusiness (OBR.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getPhoneNumberBusiness(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Primary Language (OBR.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getPrimaryLanguage(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Marital Status (OBR.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getMaritalStatus(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Religion (OBR.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getReligion(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient AccountNumber (OBR.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getPatientAccountNumber(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get SSNNumber (OBR.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getSSNNumber(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Drivers LicenseNumber (OBR.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getDriversLicenseNumber(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Mothers Identifier (OBR.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getMothersIdentifier(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Ethnic Group (OBR.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getEthnicGroup(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Birth Place (OBR.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getBirthPlace(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Multiple BirthIndicator (OBR.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getMultipleBirthIndicator(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Birth Order (OBR.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getBirthOrder(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Citizenship (OBR.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getCitizenship(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Veterans MilitaryStatus (OBR.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getVeteransMilitaryStatus(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Nationality (OBR.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getNationality(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient DeathDateAndTime (OBR.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getPatientDeathDateAndTime(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient DeathIndicator (OBR.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getPatientDeathIndicator(int $position = 30)
    {
        return $this->getField($position);
    }
}
