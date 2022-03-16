<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * GT1 segment class
 * Reference: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/GT1
 */
class GT1 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     *
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('GT1', $fields);
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
     *
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

    public function setGuarantorNumber($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorName($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorSpouseName($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorAddress($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorHomePhone($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorBusinessPhone($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorDateOfBirth($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorSex(string $value, int $position = 9)
    {
        // Ref: https://hl7-definition.caristix.com/v2/HL7v2.4/Tables/0001
        if (!in_array($value, ['A', 'F', 'M', 'N', 'O', 'U'], true)) {
            throw new InvalidArgumentException("Sex should one of 'A', 'F', 'M', 'N', 'O' or 'U'. Given: '$value'");
        }
        return $this->setField($position, $value);
    }

    public function setGuarantorType($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorRelationship($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorSSN($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorBeginDate($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEndDate($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorPriority($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEmployerName($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEmployerAddress($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEmployerPhone($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEmployeeID($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEmploymentStatus($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorOrganizationName($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorBillingHoldFlag($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorCreditRatingCode($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorDeathDateAndTime($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorDeathFlag($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorChargeAdjustmentCode($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorAnnualIncome($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorHouseholdSize($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEmployerID($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorMaritalStatusCode($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorHireEffectiveDate($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    public function setEmploymentStopDate($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    public function setLivingDependency($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    public function setAmbulatoryStatus($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    public function setCitizenship($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    public function setPrimaryLanguage($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    public function setLivingArrangement($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    public function setPublicityCode($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    public function setProtectionIndicator($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    public function setStudentIndicator($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    public function setReligion($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    public function setMotherMaidenName($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    public function setNationality($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    public function setEthnicGroup($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    public function setContactPersonsName($value, int $position = 45)
    {
        return $this->setField($position, $value);
    }

    public function setContactPersonsPhone($value, int $position = 46)
    {
        return $this->setField($position, $value);
    }

    public function setContactReason($value, int $position = 47)
    {
        return $this->setField($position, $value);
    }

    public function setContactRelationship($value, int $position = 48)
    {
        return $this->setField($position, $value);
    }

    public function setJobTitle($value, int $position = 49)
    {
        return $this->setField($position, $value);
    }

    public function setJobClass($value, int $position = 50)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorEmployersOrganizationName($value, int $position = 51)
    {
        return $this->setField($position, $value);
    }

    public function setHandicap($value, int $position = 52)
    {
        return $this->setField($position, $value);
    }

    public function setJobStatus($value, int $position = 53)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorFinancialClass($value, int $position = 54)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorRace($value, int $position = 55)
    {
        return $this->setField($position, $value);
    }

    public function setGuarantorBirthPlace($value, int $position = 56)
    {
        return $this->setField($position, $value);
    }

    public function setVipIndicator($value, int $position = 57)
    {
        return $this->setField($position, $value);
    }

    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getGuarantorNumber(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getGuarantorName(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getGuarantorSpouseName(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getGuarantorAddress(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getGuarantorHomePhone(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getGuarantorBusinessPhone(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getGuarantorDateOfBirth(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getGuarantorSex(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getGuarantorType(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getGuarantorRelationship(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getGuarantorSSN(int $position = 12)
    {
        return $this->getField($position);
    }

    public function getGuarantorBeginDate(int $position = 13)
    {
        return $this->getField($position);
    }

    public function getGuarantorEndDate(int $position = 14)
    {
        return $this->getField($position);
    }

    public function getGuarantorPriority(int $position = 15)
    {
        return $this->getField($position);
    }

    public function getGuarantorEmployerName(int $position = 16)
    {
        return $this->getField($position);
    }

    public function getGuarantorEmployerAddress(int $position = 17)
    {
        return $this->getField($position);
    }

    public function getGuarantorEmployerPhone(int $position = 18)
    {
        return $this->getField($position);
    }

    public function getGuarantorEmployeeID(int $position = 19)
    {
        return $this->getField($position);
    }

    public function getGuarantorEmploymentStatus(int $position = 20)
    {
        return $this->getField($position);
    }

    public function getGuarantorOrganizationName(int $position = 21)
    {
        return $this->getField($position);
    }

    public function getGuarantorBillingHoldFlag(int $position = 22)
    {
        return $this->getField($position);
    }

    public function getGuarantorCreditRatingCode(int $position = 23)
    {
        return $this->getField($position);
    }

    public function getGuarantorDeathDateAndTime(int $position = 24)
    {
        return $this->getField($position);
    }

    public function getGuarantorDeathFlag(int $position = 25)
    {
        return $this->getField($position);
    }

    public function getGuarantorChargeAdjustmentCode(int $position = 26)
    {
        return $this->getField($position);
    }

    public function getGuarantorAnnualIncome(int $position = 27)
    {
        return $this->getField($position);
    }

    public function getGuarantorHouseholdSize(int $position = 28)
    {
        return $this->getField($position);
    }

    public function getGuarantorEmployerID(int $position = 29)
    {
        return $this->getField($position);
    }

    public function getGuarantorMaritalStatusCode(int $position = 30)
    {
        return $this->getField($position);
    }

    public function getGuarantorHireEffectiveDate(int $position = 31)
    {
        return $this->getField($position);
    }

    public function getEmploymentStopDate(int $position = 32)
    {
        return $this->getField($position);
    }

    public function getLivingDependency(int $position = 33)
    {
        return $this->getField($position);
    }

    public function getAmbulatoryStatus(int $position = 34)
    {
        return $this->getField($position);
    }

    public function getCitizenship(int $position = 35)
    {
        return $this->getField($position);
    }

    public function getPrimaryLanguage(int $position = 36)
    {
        return $this->getField($position);
    }

    public function getLivingArrangement(int $position = 37)
    {
        return $this->getField($position);
    }

    public function getPublicityCode(int $position = 38)
    {
        return $this->getField($position);
    }

    public function getProtectionIndicator(int $position = 39)
    {
        return $this->getField($position);
    }

    public function getStudentIndicator(int $position = 40)
    {
        return $this->getField($position);
    }

    public function getReligion(int $position = 41)
    {
        return $this->getField($position);
    }

    public function getMotherMaidenName(int $position = 42)
    {
        return $this->getField($position);
    }

    public function getNationality(int $position = 43)
    {
        return $this->getField($position);
    }

    public function getEthnicGroup(int $position = 44)
    {
        return $this->getField($position);
    }

    public function getContactPersonsName(int $position = 45)
    {
        return $this->getField($position);
    }

    public function getContactPersonsPhone(int $position = 46)
    {
        return $this->getField($position);
    }

    public function getContactReason(int $position = 47)
    {
        return $this->getField($position);
    }

    public function getContactRelationship(int $position = 48)
    {
        return $this->getField($position);
    }

    public function getJobTitle(int $position = 49)
    {
        return $this->getField($position);
    }

    public function getJobClass(int $position = 50)
    {
        return $this->getField($position);
    }

    public function getGuarantorEmployersOrganizationName(int $position = 51)
    {
        return $this->getField($position);
    }

    public function getHandicap(int $position = 52)
    {
        return $this->getField($position);
    }

    public function getJobStatus(int $position = 53)
    {
        return $this->getField($position);
    }

    public function getGuarantorFinancialClass(int $position = 54)
    {
        return $this->getField($position);
    }

    public function getGuarantorRace(int $position = 55)
    {
        return $this->getField($position);
    }

    public function getGuarantorBirthPlace(int $position = 56)
    {
        return $this->getField($position);
    }

    public function getVipIndicator(int $position = 57)
    {
        return $this->getField($position);
    }
}
