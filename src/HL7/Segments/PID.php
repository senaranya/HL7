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

    /**
     * Set ID (PID.1)
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
     * Set Patient ID (PID.2)
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
     * Set Patient Identifier List (PID.3)
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
     * Set Alternate Patient ID (PID.4)
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
     * Set Patient Name (PID.5)
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
     * Set Mothers Maiden Name (PID.6)
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
     * Set Date Time Of Birth (PID.7)
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
     * Set Patient Alias (PID.9)
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
     * Set Race (PID.10)
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
     * Set Patient Address (PID.11)
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
     * Set Country Code (PID.12)
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
     * Set Phone Number Home (PID.13)
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
     * Set Phone Number Business (PID.14)
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
     * Set Primary Language (PID.15)
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
     * Set Marital Status (PID.16)
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
     * Set Religion (PID.17)
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
     * Set Patient Account Number (PID.18)
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
     * Set SSNNumber (PID.19)
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
     * Set Drivers License Number (PID.20)
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
     * Set Mothers Identifier (PID.21)
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
     * Set Ethnic Group (PID.22)
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
     * Set Birth Place (PID.23)
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
     * Set Multiple Birth Indicator (PID.24)
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
     * Set Birth Order (PID.25)
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
     * Set Citizenship (PID.26)
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
     * Set Veterans Military Status (PID.27)
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
     * Set Nationality (PID.28)
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
     * Set Patient Death Date And Time (PID.29)
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
     * Set Patient Death Indicator (PID.30)
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
     * Get ID (PID.1)
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
     * Get Patient ID (PID.2)
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
     * Get Patient IdentifierList (PID.3)
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
     * Get Alternate PatientID (PID.4)
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
     * Get Patient Name (PID.5)
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
     * Get Mothers MaidenName (PID.6)
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
     * Get Date TimeOfBirth (PID.7)
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
     * Get Sex (PID.8)
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
     * Get Patient Alias (PID.9)
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
     * Get Race (PID.10)
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
     * Get Patient Address (PID.11)
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
     * Get Country Code (PID.12)
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
     * Get Phone NumberHome (PID.13)
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
     * Get Phone NumberBusiness (PID.14)
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
     * Get Primary Language (PID.15)
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
     * Get Marital Status (PID.16)
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
     * Get Religion (PID.17)
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
     * Get Patient AccountNumber (PID.18)
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
     * Get SSNNumber (PID.19)
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
     * Get Drivers LicenseNumber (PID.20)
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
     * Get Mothers Identifier (PID.21)
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
     * Get Ethnic Group (PID.22)
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
     * Get Birth Place (PID.23)
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
     * Get Multiple BirthIndicator (PID.24)
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
     * Get Birth Order (PID.25)
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
     * Get Citizenship (PID.26)
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
     * Get Veterans MilitaryStatus (PID.27)
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
     * Get Nationality (PID.28)
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
     * Get Patient DeathDateAndTime (PID.29)
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
     * Get Patient DeathIndicator (PID.30)
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
