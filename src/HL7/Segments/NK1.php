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

    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setNKName($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setRelationship($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setAddress($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setPhoneNumber($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setBusinessPhoneNumber($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setContactRole($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setStartDate($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setEndDate($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setNextOfKinOrAssociatedPartiesJobTitle($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setNextOfKinOrAssociatedPartiesJobCodeOrClass($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setNextOfKinOrAssociatedPartiesEmployeeNumber($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setOrganizationName($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setMaritalStatus($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setAdministrativeSex($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeOfBirth($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setLivingDependency($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setAmbulatoryStatus($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setCitizenship($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setPrimaryLanguage($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setLivingArrangement($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setPublicityCode($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setProtectionIndicator($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setStudentIndicator($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setReligion($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function setMothersMaidenName($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    public function setNationality($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    public function setEthnicGroup($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    public function setContactReason($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    public function setContactPersonsName($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    public function setContactPersonsTelephoneNumber($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    public function setContactPersonsAddress($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    public function setNextOfKinOrAssociatedPartysIdentifiers($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    public function setJobStatus($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    public function setRace($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    public function setHandicap($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    public function setContactPersonSocialSecurityNumber($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    public function setNextOfKinBirthPlace($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    public function setVipIndicator($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getNKName(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getRelationship(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getAddress(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getPhoneNumber(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getBusinessPhoneNumber(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getContactRole(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getStartDate(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getEndDate(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getNextOfKinOrAssociatedPartiesJobTitle(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getNextOfKinOrAssociatedPartiesJobCodeOrClass(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getNextOfKinOrAssociatedPartiesEmployeeNumber(int $position = 12)
    {
        return $this->getField($position);
    }

    public function getOrganizationName(int $position = 13)
    {
        return $this->getField($position);
    }

    public function getMaritalStatus(int $position = 14)
    {
        return $this->getField($position);
    }

    public function getAdministrativeSex(int $position = 15)
    {
        return $this->getField($position);
    }

    public function getDateTimeOfBirth(int $position = 16)
    {
        return $this->getField($position);
    }

    public function getLivingDependency(int $position = 17)
    {
        return $this->getField($position);
    }

    public function getAmbulatoryStatus(int $position = 18)
    {
        return $this->getField($position);
    }

    public function getCitizenship(int $position = 19)
    {
        return $this->getField($position);
    }

    public function getPrimaryLanguage(int $position = 20)
    {
        return $this->getField($position);
    }

    public function getLivingArrangement(int $position = 21)
    {
        return $this->getField($position);
    }

    public function getPublicityCode(int $position = 22)
    {
        return $this->getField($position);
    }

    public function getProtectionIndicator(int $position = 23)
    {
        return $this->getField($position);
    }

    public function getStudentIndicator(int $position = 24)
    {
        return $this->getField($position);
    }

    public function getReligion(int $position = 25)
    {
        return $this->getField($position);
    }

    public function getMothersMaidenName(int $position = 26)
    {
        return $this->getField($position);
    }

    public function getNationality(int $position = 27)
    {
        return $this->getField($position);
    }

    public function getEthnicGroup(int $position = 28)
    {
        return $this->getField($position);
    }

    public function getContactReason(int $position = 29)
    {
        return $this->getField($position);
    }

    public function getContactPersonsName(int $position = 30)
    {
        return $this->getField($position);
    }

    public function getContactPersonsTelephoneNumber(int $position = 31)
    {
        return $this->getField($position);
    }

    public function getContactPersonsAddress(int $position = 32)
    {
        return $this->getField($position);
    }

    public function getNextOfKinOrAssociatedPartysIdentifiers(int $position = 33)
    {
        return $this->getField($position);
    }

    public function getJobStatus(int $position = 34)
    {
        return $this->getField($position);
    }

    public function getRace(int $position = 35)
    {
        return $this->getField($position);
    }

    public function getHandicap(int $position = 36)
    {
        return $this->getField($position);
    }

    public function getContactPersonSocialSecurityNumber(int $position = 37)
    {
        return $this->getField($position);
    }

    public function getNextOfKinBirthPlace(int $position = 38)
    {
        return $this->getField($position);
    }

    public function getVipIndicator(int $position = 39)
    {
        return $this->getField($position);
    }
}
