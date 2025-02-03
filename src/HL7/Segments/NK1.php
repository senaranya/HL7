<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * NK1 segment class: Next of Kin / Associated Parties
 * The NK1 segment contains information about the patients other related parties. Any associated parties may be
 * identified. Utilizing NK1-1 - set ID, multiple NK1 segments can be sent to patient accounts.
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5/Segments/NK1
 */
class NK1 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(?array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('NK1', $fields);
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
     * Set ID (NK1.1)
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
     * Set NKName (NK1.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setNKName($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Relationship (NK1.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setRelationship($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Address (NK1.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setAddress($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Phone Number (NK1.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setPhoneNumber($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Business Phone Number (NK1.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setBusinessPhoneNumber($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Role (NK1.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setContactRole($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start Date (NK1.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setStartDate($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set End Date (NK1.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setEndDate($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Next Of Kin Or Associated Parties Job Title (NK1.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setNextOfKinOrAssociatedPartiesJobTitle($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Next Of Kin Or Associated Parties Job Code Or Class (NK1.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setNextOfKinOrAssociatedPartiesJobCodeOrClass($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Next Of Kin Or Associated Parties Employee Number (NK1.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setNextOfKinOrAssociatedPartiesEmployeeNumber($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Organization Name (NK1.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setOrganizationName($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Marital Status (NK1.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setMaritalStatus($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Administrative Sex (NK1.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setAdministrativeSex($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Date Time Of Birth (NK1.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setDateTimeOfBirth($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Living Dependency (NK1.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setLivingDependency($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ambulatory Status (NK1.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setAmbulatoryStatus($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Citizenship (NK1.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setCitizenship($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Primary Language (NK1.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setPrimaryLanguage($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Living Arrangement (NK1.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setLivingArrangement($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Publicity Code (NK1.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setPublicityCode($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Protection Indicator (NK1.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setProtectionIndicator($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Student Indicator (NK1.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setStudentIndicator($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Religion (NK1.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setReligion($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Mothers Maiden Name (NK1.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setMothersMaidenName($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Nationality (NK1.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setNationality($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ethnic Group (NK1.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setEthnicGroup($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Reason (NK1.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setContactReason($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Persons Name (NK1.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setContactPersonsName($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Persons Telephone Number (NK1.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setContactPersonsTelephoneNumber($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Persons Address (NK1.32)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 32
     *
     * @return bool
     *
     */
    public function setContactPersonsAddress($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Next Of Kin Or Associated Partys Identifiers (NK1.33)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 33
     *
     * @return bool
     *
     */
    public function setNextOfKinOrAssociatedPartysIdentifiers($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Job Status (NK1.34)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 34
     *
     * @return bool
     *
     */
    public function setJobStatus($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Race (NK1.35)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 35
     *
     * @return bool
     *
     */
    public function setRace($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Handicap (NK1.36)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 36
     *
     * @return bool
     *
     */
    public function setHandicap($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Person Social Security Number (NK1.37)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 37
     *
     * @return bool
     *
     */
    public function setContactPersonSocialSecurityNumber($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Next Of Kin Birth Place (NK1.38)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 38
     *
     * @return bool
     *
     */
    public function setNextOfKinBirthPlace($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Vip Indicator (NK1.39)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 39
     *
     * @return bool
     *
     */
    public function setVipIndicator($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (NK1.1)
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
     * Get NKName (NK1.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getNKName(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Relationship (NK1.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getRelationship(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Address (NK1.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getAddress(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Phone Number (NK1.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getPhoneNumber(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Business Phone Number (NK1.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getBusinessPhoneNumber(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Role (NK1.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getContactRole(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Start Date (NK1.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getStartDate(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get End Date (NK1.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getEndDate(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Next Of Kin Or Associated Parties Job Title (NK1.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getNextOfKinOrAssociatedPartiesJobTitle(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Next Of Kin Or Associated Parties Job Code Or Class (NK1.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getNextOfKinOrAssociatedPartiesJobCodeOrClass(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Next Of Kin Or Associated Parties Employee Number (NK1.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getNextOfKinOrAssociatedPartiesEmployeeNumber(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Organization Name (NK1.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getOrganizationName(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Marital Status (NK1.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getMaritalStatus(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Administrative Sex (NK1.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getAdministrativeSex(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Date Time Of Birth (NK1.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getDateTimeOfBirth(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Living Dependency (NK1.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getLivingDependency(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Ambulatory Status (NK1.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getAmbulatoryStatus(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Citizenship (NK1.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getCitizenship(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Primary Language (NK1.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getPrimaryLanguage(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Living Arrangement (NK1.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getLivingArrangement(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Publicity Code (NK1.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getPublicityCode(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Protection Indicator (NK1.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getProtectionIndicator(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Student Indicator (NK1.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getStudentIndicator(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Religion (NK1.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getReligion(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Mothers Maiden Name (NK1.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getMothersMaidenName(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Nationality (NK1.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getNationality(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Ethnic Group (NK1.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getEthnicGroup(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Reason (NK1.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getContactReason(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Persons Name (NK1.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getContactPersonsName(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Persons Telephone Number (NK1.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getContactPersonsTelephoneNumber(int $position = 31)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Persons Address (NK1.32)
     *
     * @param int $position Defaults to 32
     *
     * @return array|string|int|null
     *
     */
    public function getContactPersonsAddress(int $position = 32)
    {
        return $this->getField($position);
    }

    /**
     * Get Next Of Kin Or Associated Partys Identifiers (NK1.33)
     *
     * @param int $position Defaults to 33
     *
     * @return array|string|int|null
     *
     */
    public function getNextOfKinOrAssociatedPartysIdentifiers(int $position = 33)
    {
        return $this->getField($position);
    }

    /**
     * Get Job Status (NK1.34)
     *
     * @param int $position Defaults to 34
     *
     * @return array|string|int|null
     *
     */
    public function getJobStatus(int $position = 34)
    {
        return $this->getField($position);
    }

    /**
     * Get Race (NK1.35)
     *
     * @param int $position Defaults to 35
     *
     * @return array|string|int|null
     *
     */
    public function getRace(int $position = 35)
    {
        return $this->getField($position);
    }

    /**
     * Get Handicap (NK1.36)
     *
     * @param int $position Defaults to 36
     *
     * @return array|string|int|null
     *
     */
    public function getHandicap(int $position = 36)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Person Social Security Number (NK1.37)
     *
     * @param int $position Defaults to 37
     *
     * @return array|string|int|null
     *
     */
    public function getContactPersonSocialSecurityNumber(int $position = 37)
    {
        return $this->getField($position);
    }

    /**
     * Get Next Of Kin Birth Place (NK1.38)
     *
     * @param int $position Defaults to 38
     *
     * @return array|string|int|null
     *
     */
    public function getNextOfKinBirthPlace(int $position = 38)
    {
        return $this->getField($position);
    }

    /**
     * Get Vip Indicator (NK1.39)
     *
     * @param int $position Defaults to 39
     *
     * @return array|string|int|null
     *
     */
    public function getVipIndicator(int $position = 39)
    {
        return $this->getField($position);
    }
}
