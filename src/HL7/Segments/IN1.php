<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * IN1 segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-in1-insurance-segment
 */
class IN1 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('IN1', $fields);
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
     * Set Insurance Plan ID (IN1.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setInsurancePlanID($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insurance Company ID (IN1.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setInsuranceCompanyID($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insurance Company Name (IN1.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setInsuranceCompanyName($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insurance Company Address (IN1.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setInsuranceCompanyAddress($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insurance Co Contact Person (IN1.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setInsuranceCoContactPerson($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insurance Co Phone Number (IN1.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setInsuranceCoPhoneNumber($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Group Number (IN1.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setGroupNumber($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Group Name (IN1.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setGroupName($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Group Emp ID (IN1.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setInsuredsGroupEmpID($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Group Emp Name (IN1.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setInsuredsGroupEmpName($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Plan Effective Date (IN1.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setPlanEffectiveDate($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Plan Expiration Date (IN1.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setPlanExpirationDate($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Authorization Information (IN1.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setAuthorizationInformation($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Plan Type (IN1.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setPlanType($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Name Of Insured (IN1.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setNameOfInsured($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Relationship To Patient (IN1.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setInsuredsRelationshipToPatient($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Date Of Birth (IN1.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setInsuredsDateOfBirth($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Address (IN1.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setInsuredsAddress($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Assignment Of Benefits (IN1.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setAssignmentOfBenefits($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Coordination Of Benefits (IN1.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setCoordinationOfBenefits($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Coord Of Ben Priority (IN1.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setCoordOfBenPriority($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Notice Of Admission Flag (IN1.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setNoticeOfAdmissionFlag($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Notice Of Admission Date (IN1.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setNoticeOfAdmissionDate($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Report Of Eligibility Flag (IN1.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setReportOfEligibilityFlag($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Report Of Eligibility Date (IN1.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setReportOfEligibilityDate($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Release Information Code (IN1.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setReleaseInformationCode($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Pre Admit Cert PAC (IN1.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setPreAdmitCertPAC($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Verification Date Time (IN1.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setVerificationDateTime($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Verification By (IN1.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setVerificationBy($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Type Of Agreement Code (IN1.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setTypeOfAgreementCode($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Billing Status (IN1.32)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 32
     *
     * @return bool
     *
     */
    public function setBillingStatus($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Lifetime Reserve Days (IN1.33)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 33
     *
     * @return bool
     *
     */
    public function setLifetimeReserveDays($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Delay Before LRDay (IN1.34)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 34
     *
     * @return bool
     *
     */
    public function setDelayBeforeLRDay($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Company Plan Code (IN1.35)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 35
     *
     * @return bool
     *
     */
    public function setCompanyPlanCode($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Policy Number (IN1.36)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 36
     *
     * @return bool
     *
     */
    public function setPolicyNumber($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Policy Deductible (IN1.37)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 37
     *
     * @return bool
     *
     */
    public function setPolicyDeductible($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Policy Limit Amount (IN1.38)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 38
     *
     * @return bool
     *
     */
    public function setPolicyLimitAmount($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Policy Limit Days (IN1.39)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 39
     *
     * @return bool
     *
     */
    public function setPolicyLimitDays($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Room Rate Semi Private (IN1.40)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 40
     *
     * @return bool
     *
     */
    public function setRoomRateSemiPrivate($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Room Rate Private (IN1.41)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 41
     *
     * @return bool
     *
     */
    public function setRoomRatePrivate($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Employment Status (IN1.42)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 42
     *
     * @return bool
     *
     */
    public function setInsuredsEmploymentStatus($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Sex (IN1.43)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 43
     *
     * @return bool
     *
     */
    public function setInsuredsSex($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds Employers Address (IN1.44)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 44
     *
     * @return bool
     *
     */
    public function setInsuredsEmployersAddress($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Verification Status (IN1.45)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 45
     *
     * @return bool
     *
     */
    public function setVerificationStatus($value, int $position = 45)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Prior Insurance Plan ID (IN1.46)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 46
     *
     * @return bool
     *
     */
    public function setPriorInsurancePlanID($value, int $position = 46)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Coverage Type (IN1.47)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 47
     *
     * @return bool
     *
     */
    public function setCoverageType($value, int $position = 47)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Handicap (IN1.48)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 48
     *
     * @return bool
     *
     */
    public function setHandicap($value, int $position = 48)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Insureds IDNumber (IN1.49)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 49
     *
     * @return bool
     *
     */
    public function setInsuredsIDNumber($value, int $position = 49)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (IN1.1)
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
     * Get Insurance PlanID (IN1.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getInsurancePlanID(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Insurance CompanyID (IN1.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getInsuranceCompanyID(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Insurance CompanyName (IN1.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getInsuranceCompanyName(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Insurance CompanyAddress (IN1.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getInsuranceCompanyAddress(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Insurance CoContactPerson (IN1.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getInsuranceCoContactPerson(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Insurance CoPhoneNumber (IN1.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getInsuranceCoPhoneNumber(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Group Number (IN1.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getGroupNumber(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Group Name (IN1.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getGroupName(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds GroupEmpID (IN1.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsGroupEmpID(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds GroupEmpName (IN1.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsGroupEmpName(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Plan EffectiveDate (IN1.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getPlanEffectiveDate(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Plan ExpirationDate (IN1.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getPlanExpirationDate(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Authorization Information (IN1.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getAuthorizationInformation(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Plan Type (IN1.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getPlanType(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Name OfInsured (IN1.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getNameOfInsured(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds RelationshipToPatient (IN1.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsRelationshipToPatient(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds DateOfBirth (IN1.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsDateOfBirth(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds Address (IN1.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsAddress(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Assignment OfBenefits (IN1.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getAssignmentOfBenefits(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Coordination OfBenefits (IN1.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getCoordinationOfBenefits(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Coord OfBenPriority (IN1.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getCoordOfBenPriority(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Notice OfAdmissionFlag (IN1.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getNoticeOfAdmissionFlag(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Notice OfAdmissionDate (IN1.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getNoticeOfAdmissionDate(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Report OfEligibilityFlag (IN1.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getReportOfEligibilityFlag(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Report OfEligibilityDate (IN1.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getReportOfEligibilityDate(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Release InformationCode (IN1.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getReleaseInformationCode(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Pre AdmitCertPAC (IN1.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getPreAdmitCertPAC(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Verification DateTime (IN1.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getVerificationDateTime(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Verification By (IN1.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getVerificationBy(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Type OfAgreementCode (IN1.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getTypeOfAgreementCode(int $position = 31)
    {
        return $this->getField($position);
    }

    /**
     * Get Billing Status (IN1.32)
     *
     * @param int $position Defaults to 32
     *
     * @return array|string|int|null
     *
     */
    public function getBillingStatus(int $position = 32)
    {
        return $this->getField($position);
    }

    /**
     * Get Lifetime ReserveDays (IN1.33)
     *
     * @param int $position Defaults to 33
     *
     * @return array|string|int|null
     *
     */
    public function getLifetimeReserveDays(int $position = 33)
    {
        return $this->getField($position);
    }

    /**
     * Get Delay BeforeLRDay (IN1.34)
     *
     * @param int $position Defaults to 34
     *
     * @return array|string|int|null
     *
     */
    public function getDelayBeforeLRDay(int $position = 34)
    {
        return $this->getField($position);
    }

    /**
     * Get Company PlanCode (IN1.35)
     *
     * @param int $position Defaults to 35
     *
     * @return array|string|int|null
     *
     */
    public function getCompanyPlanCode(int $position = 35)
    {
        return $this->getField($position);
    }

    /**
     * Get Policy Number (IN1.36)
     *
     * @param int $position Defaults to 36
     *
     * @return array|string|int|null
     *
     */
    public function getPolicyNumber(int $position = 36)
    {
        return $this->getField($position);
    }

    /**
     * Get Policy Deductible (IN1.37)
     *
     * @param int $position Defaults to 37
     *
     * @return array|string|int|null
     *
     */
    public function getPolicyDeductible(int $position = 37)
    {
        return $this->getField($position);
    }

    /**
     * Get Policy LimitAmount (IN1.38)
     *
     * @param int $position Defaults to 38
     *
     * @return array|string|int|null
     *
     */
    public function getPolicyLimitAmount(int $position = 38)
    {
        return $this->getField($position);
    }

    /**
     * Get Policy LimitDays (IN1.39)
     *
     * @param int $position Defaults to 39
     *
     * @return array|string|int|null
     *
     */
    public function getPolicyLimitDays(int $position = 39)
    {
        return $this->getField($position);
    }

    /**
     * Get Room RateSemiPrivate (IN1.40)
     *
     * @param int $position Defaults to 40
     *
     * @return array|string|int|null
     *
     */
    public function getRoomRateSemiPrivate(int $position = 40)
    {
        return $this->getField($position);
    }

    /**
     * Get Room RatePrivate (IN1.41)
     *
     * @param int $position Defaults to 41
     *
     * @return array|string|int|null
     *
     */
    public function getRoomRatePrivate(int $position = 41)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds EmploymentStatus (IN1.42)
     *
     * @param int $position Defaults to 42
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsEmploymentStatus(int $position = 42)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds Sex (IN1.43)
     *
     * @param int $position Defaults to 43
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsSex(int $position = 43)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds EmployersAddress (IN1.44)
     *
     * @param int $position Defaults to 44
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsEmployersAddress(int $position = 44)
    {
        return $this->getField($position);
    }

    /**
     * Get Verification Status (IN1.45)
     *
     * @param int $position Defaults to 45
     *
     * @return array|string|int|null
     *
     */
    public function getVerificationStatus(int $position = 45)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior InsurancePlanID (IN1.46)
     *
     * @param int $position Defaults to 46
     *
     * @return array|string|int|null
     *
     */
    public function getPriorInsurancePlanID(int $position = 46)
    {
        return $this->getField($position);
    }

    /**
     * Get Coverage Type (IN1.47)
     *
     * @param int $position Defaults to 47
     *
     * @return array|string|int|null
     *
     */
    public function getCoverageType(int $position = 47)
    {
        return $this->getField($position);
    }

    /**
     * Get Handicap (IN1.48)
     *
     * @param int $position Defaults to 48
     *
     * @return array|string|int|null
     *
     */
    public function getHandicap(int $position = 48)
    {
        return $this->getField($position);
    }

    /**
     * Get Insureds IDNumber (IN1.49)
     *
     * @param int $position Defaults to 49
     *
     * @return array|string|int|null
     *
     */
    public function getInsuredsIDNumber(int $position = 49)
    {
        return $this->getField($position);
    }
}
