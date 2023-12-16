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
     * Set Insurance PlanID (OBR.2)
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
     * Set Insurance CompanyID (OBR.3)
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
     * Set Insurance CompanyName (OBR.4)
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
     * Set Insurance CompanyAddress (OBR.5)
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
     * Set Insurance CoContactPerson (OBR.6)
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
     * Set Insurance CoPhoneNumber (OBR.7)
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
     * Set Group Number (OBR.8)
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
     * Set Group Name (OBR.9)
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
     * Set Insureds GroupEmpID (OBR.10)
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
     * Set Insureds GroupEmpName (OBR.11)
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
     * Set Plan EffectiveDate (OBR.12)
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
     * Set Plan ExpirationDate (OBR.13)
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
     * Set Authorization Information (OBR.14)
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
     * Set Plan Type (OBR.15)
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
     * Set Name OfInsured (OBR.16)
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
     * Set Insureds RelationshipToPatient (OBR.17)
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
     * Set Insureds DateOfBirth (OBR.18)
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
     * Set Insureds Address (OBR.19)
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
     * Set Assignment OfBenefits (OBR.20)
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
     * Set Coordination OfBenefits (OBR.21)
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
     * Set Coord OfBenPriority (OBR.22)
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
     * Set Notice OfAdmissionFlag (OBR.23)
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
     * Set Notice OfAdmissionDate (OBR.24)
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
     * Set Report OfEligibilityFlag (OBR.25)
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
     * Set Report OfEligibilityDate (OBR.26)
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
     * Set Release InformationCode (OBR.27)
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
     * Set Pre AdmitCertPAC (OBR.28)
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
     * Set Verification DateTime (OBR.29)
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
     * Set Verification By (OBR.30)
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
     * Set Type OfAgreementCode (OBR.31)
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
     * Set Billing Status (OBR.32)
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
     * Set Lifetime ReserveDays (OBR.33)
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
     * Set Delay BeforeLRDay (OBR.34)
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
     * Set Company PlanCode (OBR.35)
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
     * Set Policy Number (OBR.36)
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
     * Set Policy Deductible (OBR.37)
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
     * Set Policy LimitAmount (OBR.38)
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
     * Set Policy LimitDays (OBR.39)
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
     * Set Room RateSemiPrivate (OBR.40)
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
     * Set Room RatePrivate (OBR.41)
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
     * Set Insureds EmploymentStatus (OBR.42)
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
     * Set Insureds Sex (OBR.43)
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
     * Set Insureds EmployersAddress (OBR.44)
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
     * Set Verification Status (OBR.45)
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
     * Set Prior InsurancePlanID (OBR.46)
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
     * Set Coverage Type (OBR.47)
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
     * Set Handicap (OBR.48)
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
     * Set Insureds IDNumber (OBR.49)
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
     * Get Insurance PlanID (OBR.2)
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
     * Get Insurance CompanyID (OBR.3)
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
     * Get Insurance CompanyName (OBR.4)
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
     * Get Insurance CompanyAddress (OBR.5)
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
     * Get Insurance CoContactPerson (OBR.6)
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
     * Get Insurance CoPhoneNumber (OBR.7)
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
     * Get Group Number (OBR.8)
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
     * Get Group Name (OBR.9)
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
     * Get Insureds GroupEmpID (OBR.10)
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
     * Get Insureds GroupEmpName (OBR.11)
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
     * Get Plan EffectiveDate (OBR.12)
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
     * Get Plan ExpirationDate (OBR.13)
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
     * Get Authorization Information (OBR.14)
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
     * Get Plan Type (OBR.15)
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
     * Get Name OfInsured (OBR.16)
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
     * Get Insureds RelationshipToPatient (OBR.17)
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
     * Get Insureds DateOfBirth (OBR.18)
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
     * Get Insureds Address (OBR.19)
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
     * Get Assignment OfBenefits (OBR.20)
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
     * Get Coordination OfBenefits (OBR.21)
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
     * Get Coord OfBenPriority (OBR.22)
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
     * Get Notice OfAdmissionFlag (OBR.23)
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
     * Get Notice OfAdmissionDate (OBR.24)
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
     * Get Report OfEligibilityFlag (OBR.25)
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
     * Get Report OfEligibilityDate (OBR.26)
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
     * Get Release InformationCode (OBR.27)
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
     * Get Pre AdmitCertPAC (OBR.28)
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
     * Get Verification DateTime (OBR.29)
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
     * Get Verification By (OBR.30)
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
     * Get Type OfAgreementCode (OBR.31)
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
     * Get Billing Status (OBR.32)
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
     * Get Lifetime ReserveDays (OBR.33)
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
     * Get Delay BeforeLRDay (OBR.34)
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
     * Get Company PlanCode (OBR.35)
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
     * Get Policy Number (OBR.36)
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
     * Get Policy Deductible (OBR.37)
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
     * Get Policy LimitAmount (OBR.38)
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
     * Get Policy LimitDays (OBR.39)
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
     * Get Room RateSemiPrivate (OBR.40)
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
     * Get Room RatePrivate (OBR.41)
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
     * Get Insureds EmploymentStatus (OBR.42)
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
     * Get Insureds Sex (OBR.43)
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
     * Get Insureds EmployersAddress (OBR.44)
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
     * Get Verification Status (OBR.45)
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
     * Get Prior InsurancePlanID (OBR.46)
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
     * Get Coverage Type (OBR.47)
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
     * Get Handicap (OBR.48)
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
     * Get Insureds IDNumber (OBR.49)
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
