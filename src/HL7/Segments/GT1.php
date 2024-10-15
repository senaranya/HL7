<?php

declare(strict_types=1);

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
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    /**
     * Set ID (GT1.1)
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
     * Set Guarantor Number (GT1.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setGuarantorNumber($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Name (GT1.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setGuarantorName($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Spouse Name (GT1.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setGuarantorSpouseName($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Address (GT1.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setGuarantorAddress($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Home Phone (GT1.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setGuarantorHomePhone($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Business Phone (GT1.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setGuarantorBusinessPhone($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Date Of Birth (GT1.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
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

    /**
     * Set Guarantor Type (GT1.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setGuarantorType($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Relationship (GT1.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setGuarantorRelationship($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor SSN (GT1.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setGuarantorSSN($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Begin Date (GT1.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setGuarantorBeginDate($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor End Date (GT1.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setGuarantorEndDate($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Priority (GT1.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setGuarantorPriority($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Employer Name (GT1.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setGuarantorEmployerName($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Employer Address (GT1.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setGuarantorEmployerAddress($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Employer Phone (GT1.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setGuarantorEmployerPhone($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Employee ID (GT1.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setGuarantorEmployeeID($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Employment Status (GT1.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setGuarantorEmploymentStatus($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Organization Name (GT1.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setGuarantorOrganizationName($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Billing Hold Flag (GT1.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setGuarantorBillingHoldFlag($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Credit Rating Code (GT1.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setGuarantorCreditRatingCode($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Death Date And Time (GT1.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setGuarantorDeathDateAndTime($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Death Flag (GT1.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setGuarantorDeathFlag($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Charge Adjustment Code (GT1.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setGuarantorChargeAdjustmentCode($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Annual Income (GT1.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setGuarantorAnnualIncome($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Household Size (GT1.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setGuarantorHouseholdSize($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Employer ID (GT1.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setGuarantorEmployerID($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Marital Status Code (GT1.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setGuarantorMaritalStatusCode($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Hire Effective Date (GT1.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setGuarantorHireEffectiveDate($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Employment Stop Date (GT1.32)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 32
     *
     * @return bool
     *
     */
    public function setEmploymentStopDate($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Living Dependency (GT1.33)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 33
     *
     * @return bool
     *
     */
    public function setLivingDependency($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ambulatory Status (GT1.34)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 34
     *
     * @return bool
     *
     */
    public function setAmbulatoryStatus($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Citizenship (GT1.35)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 35
     *
     * @return bool
     *
     */
    public function setCitizenship($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Primary Language (GT1.36)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 36
     *
     * @return bool
     *
     */
    public function setPrimaryLanguage($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Living Arrangement (GT1.37)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 37
     *
     * @return bool
     *
     */
    public function setLivingArrangement($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Publicity Code (GT1.38)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 38
     *
     * @return bool
     *
     */
    public function setPublicityCode($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Protection Indicator (GT1.39)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 39
     *
     * @return bool
     *
     */
    public function setProtectionIndicator($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Student Indicator (GT1.40)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 40
     *
     * @return bool
     *
     */
    public function setStudentIndicator($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Religion (GT1.41)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 41
     *
     * @return bool
     *
     */
    public function setReligion($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Mother Maiden Name (GT1.42)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 42
     *
     * @return bool
     *
     */
    public function setMotherMaidenName($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Nationality (GT1.43)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 43
     *
     * @return bool
     *
     */
    public function setNationality($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ethnic Group (GT1.44)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 44
     *
     * @return bool
     *
     */
    public function setEthnicGroup($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Persons Name (GT1.45)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 45
     *
     * @return bool
     *
     */
    public function setContactPersonsName($value, int $position = 45)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Persons Phone (GT1.46)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 46
     *
     * @return bool
     *
     */
    public function setContactPersonsPhone($value, int $position = 46)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Reason (GT1.47)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 47
     *
     * @return bool
     *
     */
    public function setContactReason($value, int $position = 47)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Contact Relationship (GT1.48)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 48
     *
     * @return bool
     *
     */
    public function setContactRelationship($value, int $position = 48)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Job Title (GT1.49)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 49
     *
     * @return bool
     *
     */
    public function setJobTitle($value, int $position = 49)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Job Class (GT1.50)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 50
     *
     * @return bool
     *
     */
    public function setJobClass($value, int $position = 50)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Employers Organization Name (GT1.51)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 51
     *
     * @return bool
     *
     */
    public function setGuarantorEmployersOrganizationName($value, int $position = 51)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Handicap (GT1.52)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 52
     *
     * @return bool
     *
     */
    public function setHandicap($value, int $position = 52)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Job Status (GT1.53)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 53
     *
     * @return bool
     *
     */
    public function setJobStatus($value, int $position = 53)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Financial Class (GT1.54)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 54
     *
     * @return bool
     *
     */
    public function setGuarantorFinancialClass($value, int $position = 54)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Race (GT1.55)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 55
     *
     * @return bool
     *
     */
    public function setGuarantorRace($value, int $position = 55)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Guarantor Birth Place (GT1.56)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 56
     *
     * @return bool
     *
     */
    public function setGuarantorBirthPlace($value, int $position = 56)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Vip Indicator (GT1.57)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 57
     *
     * @return bool
     *
     */
    public function setVipIndicator($value, int $position = 57)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (GT1.1)
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
     * Get Guarantor Number (GT1.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorNumber(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Name (GT1.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorName(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Spouse Name (GT1.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorSpouseName(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Address (GT1.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorAddress(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Home Phone (GT1.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorHomePhone(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Business Phone (GT1.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorBusinessPhone(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Date Of Birth (GT1.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorDateOfBirth(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Sex (GT1.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorSex(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Type (GT1.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorType(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Relationship (GT1.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorRelationship(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor SSN (GT1.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorSSN(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Begin Date (GT1.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorBeginDate(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor End Date (GT1.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEndDate(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Priority (GT1.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorPriority(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Employer Name (GT1.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEmployerName(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Employer Address (GT1.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEmployerAddress(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Employer Phone (GT1.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEmployerPhone(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Employee ID (GT1.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEmployeeID(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Employment Status (GT1.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEmploymentStatus(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Organization Name (GT1.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorOrganizationName(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Billing Hold Flag (GT1.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorBillingHoldFlag(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Credit Rating Code (GT1.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorCreditRatingCode(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Death Date And Time (GT1.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorDeathDateAndTime(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Death Flag (GT1.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorDeathFlag(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Charge Adjustment Code (GT1.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorChargeAdjustmentCode(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Annual Income (GT1.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorAnnualIncome(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Household Size (GT1.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorHouseholdSize(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Employer ID (GT1.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEmployerID(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Marital Status Code (GT1.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorMaritalStatusCode(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Hire Effective Date (GT1.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorHireEffectiveDate(int $position = 31)
    {
        return $this->getField($position);
    }

    /**
     * Get Employment Stop Date (GT1.32)
     *
     * @param int $position Defaults to 32
     *
     * @return array|string|int|null
     *
     */
    public function getEmploymentStopDate(int $position = 32)
    {
        return $this->getField($position);
    }

    /**
     * Get Living Dependency (GT1.33)
     *
     * @param int $position Defaults to 33
     *
     * @return array|string|int|null
     *
     */
    public function getLivingDependency(int $position = 33)
    {
        return $this->getField($position);
    }

    /**
     * Get Ambulatory Status (GT1.34)
     *
     * @param int $position Defaults to 34
     *
     * @return array|string|int|null
     *
     */
    public function getAmbulatoryStatus(int $position = 34)
    {
        return $this->getField($position);
    }

    /**
     * Get Citizenship (GT1.35)
     *
     * @param int $position Defaults to 35
     *
     * @return array|string|int|null
     *
     */
    public function getCitizenship(int $position = 35)
    {
        return $this->getField($position);
    }

    /**
     * Get Primary Language (GT1.36)
     *
     * @param int $position Defaults to 36
     *
     * @return array|string|int|null
     *
     */
    public function getPrimaryLanguage(int $position = 36)
    {
        return $this->getField($position);
    }

    /**
     * Get Living Arrangement (GT1.37)
     *
     * @param int $position Defaults to 37
     *
     * @return array|string|int|null
     *
     */
    public function getLivingArrangement(int $position = 37)
    {
        return $this->getField($position);
    }

    /**
     * Get Publicity Code (GT1.38)
     *
     * @param int $position Defaults to 38
     *
     * @return array|string|int|null
     *
     */
    public function getPublicityCode(int $position = 38)
    {
        return $this->getField($position);
    }

    /**
     * Get Protection Indicator (GT1.39)
     *
     * @param int $position Defaults to 39
     *
     * @return array|string|int|null
     *
     */
    public function getProtectionIndicator(int $position = 39)
    {
        return $this->getField($position);
    }

    /**
     * Get Student Indicator (GT1.40)
     *
     * @param int $position Defaults to 40
     *
     * @return array|string|int|null
     *
     */
    public function getStudentIndicator(int $position = 40)
    {
        return $this->getField($position);
    }

    /**
     * Get Religion (GT1.41)
     *
     * @param int $position Defaults to 41
     *
     * @return array|string|int|null
     *
     */
    public function getReligion(int $position = 41)
    {
        return $this->getField($position);
    }

    /**
     * Get Mother Maiden Name (GT1.42)
     *
     * @param int $position Defaults to 42
     *
     * @return array|string|int|null
     *
     */
    public function getMotherMaidenName(int $position = 42)
    {
        return $this->getField($position);
    }

    /**
     * Get Nationality (GT1.43)
     *
     * @param int $position Defaults to 43
     *
     * @return array|string|int|null
     *
     */
    public function getNationality(int $position = 43)
    {
        return $this->getField($position);
    }

    /**
     * Get Ethnic Group (GT1.44)
     *
     * @param int $position Defaults to 44
     *
     * @return array|string|int|null
     *
     */
    public function getEthnicGroup(int $position = 44)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Persons Name (GT1.45)
     *
     * @param int $position Defaults to 45
     *
     * @return array|string|int|null
     *
     */
    public function getContactPersonsName(int $position = 45)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Persons Phone (GT1.46)
     *
     * @param int $position Defaults to 46
     *
     * @return array|string|int|null
     *
     */
    public function getContactPersonsPhone(int $position = 46)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Reason (GT1.47)
     *
     * @param int $position Defaults to 47
     *
     * @return array|string|int|null
     *
     */
    public function getContactReason(int $position = 47)
    {
        return $this->getField($position);
    }

    /**
     * Get Contact Relationship (GT1.48)
     *
     * @param int $position Defaults to 48
     *
     * @return array|string|int|null
     *
     */
    public function getContactRelationship(int $position = 48)
    {
        return $this->getField($position);
    }

    /**
     * Get Job Title (GT1.49)
     *
     * @param int $position Defaults to 49
     *
     * @return array|string|int|null
     *
     */
    public function getJobTitle(int $position = 49)
    {
        return $this->getField($position);
    }

    /**
     * Get Job Class (GT1.50)
     *
     * @param int $position Defaults to 50
     *
     * @return array|string|int|null
     *
     */
    public function getJobClass(int $position = 50)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Employers Organization Name (GT1.51)
     *
     * @param int $position Defaults to 51
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorEmployersOrganizationName(int $position = 51)
    {
        return $this->getField($position);
    }

    /**
     * Get Handicap (GT1.52)
     *
     * @param int $position Defaults to 52
     *
     * @return array|string|int|null
     *
     */
    public function getHandicap(int $position = 52)
    {
        return $this->getField($position);
    }

    /**
     * Get Job Status (GT1.53)
     *
     * @param int $position Defaults to 53
     *
     * @return array|string|int|null
     *
     */
    public function getJobStatus(int $position = 53)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Financial Class (GT1.54)
     *
     * @param int $position Defaults to 54
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorFinancialClass(int $position = 54)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Race (GT1.55)
     *
     * @param int $position Defaults to 55
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorRace(int $position = 55)
    {
        return $this->getField($position);
    }

    /**
     * Get Guarantor Birth Place (GT1.56)
     *
     * @param int $position Defaults to 56
     *
     * @return array|string|int|null
     *
     */
    public function getGuarantorBirthPlace(int $position = 56)
    {
        return $this->getField($position);
    }

    /**
     * Get Vip Indicator (GT1.57)
     *
     * @param int $position Defaults to 57
     *
     * @return array|string|int|null
     *
     */
    public function getVipIndicator(int $position = 57)
    {
        return $this->getField($position);
    }
}
