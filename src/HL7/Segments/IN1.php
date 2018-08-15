<?php

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

    public function __construct(array $fields = null)
    {
        parent::__construct('IN1', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setInsurancePlanID($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setInsuranceCompanyID($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setInsuranceCompanyName($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setInsuranceCompanyAddress($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setInsuranceCoContactPerson($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setInsuranceCoPhoneNumber($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setGroupNumber($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setGroupName($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsGroupEmpID($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsGroupEmpName($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setPlanEffectiveDate($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setPlanExpirationDate($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setAuthorizationInformation($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setPlanType($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setNameOfInsured($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsRelationshipToPatient($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsDateOfBirth($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsAddress($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setAssignmentOfBenefits($value, $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setCoordinationOfBenefits($value, $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setCoordOfBenPriority($value, $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setNoticeOfAdmissionFlag($value, $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setNoticeOfAdmissionDate($value, $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setReportOfEligibilityFlag($value, $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function setReportOfEligibilityDate($value, $position = 26)
    {
        return $this->setField($position, $value);
    }

    public function setReleaseInformationCode($value, $position = 27)
    {
        return $this->setField($position, $value);
    }

    public function setPreAdmitCertPAC($value, $position = 28)
    {
        return $this->setField($position, $value);
    }

    public function setVerificationDateTime($value, $position = 29)
    {
        return $this->setField($position, $value);
    }

    public function setVerificationBy($value, $position = 30)
    {
        return $this->setField($position, $value);
    }

    public function setTypeOfAgreementCode($value, $position = 31)
    {
        return $this->setField($position, $value);
    }

    public function setBillingStatus($value, $position = 32)
    {
        return $this->setField($position, $value);
    }

    public function setLifetimeReserveDays($value, $position = 33)
    {
        return $this->setField($position, $value);
    }

    public function setDelayBeforeLRDay($value, $position = 34)
    {
        return $this->setField($position, $value);
    }

    public function setCompanyPlanCode($value, $position = 35)
    {
        return $this->setField($position, $value);
    }

    public function setPolicyNumber($value, $position = 36)
    {
        return $this->setField($position, $value);
    }

    public function setPolicyDeductible($value, $position = 37)
    {
        return $this->setField($position, $value);
    }

    public function setPolicyLimitAmount($value, $position = 38)
    {
        return $this->setField($position, $value);
    }

    public function setPolicyLimitDays($value, $position = 39)
    {
        return $this->setField($position, $value);
    }

    public function setRoomRateSemiPrivate($value, $position = 40)
    {
        return $this->setField($position, $value);
    }

    public function setRoomRatePrivate($value, $position = 41)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsEmploymentStatus($value, $position = 42)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsSex($value, $position = 43)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsEmployersAddress($value, $position = 44)
    {
        return $this->setField($position, $value);
    }

    public function setVerificationStatus($value, $position = 45)
    {
        return $this->setField($position, $value);
    }

    public function setPriorInsurancePlanID($value, $position = 46)
    {
        return $this->setField($position, $value);
    }

    public function setCoverageType($value, $position = 47)
    {
        return $this->setField($position, $value);
    }

    public function setHandicap($value, $position = 48)
    {
        return $this->setField($position, $value);
    }

    public function setInsuredsIDNumber($value, $position = 49)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getInsurancePlanID($position = 2)
    {
        return $this->getField($position);
    }

    public function getInsuranceCompanyID($position = 3)
    {
        return $this->getField($position);
    }

    public function getInsuranceCompanyName($position = 4)
    {
        return $this->getField($position);
    }

    public function getInsuranceCompanyAddress($position = 5)
    {
        return $this->getField($position);
    }

    public function getInsuranceCoContactPerson($position = 6)
    {
        return $this->getField($position);
    }

    public function getInsuranceCoPhoneNumber($position = 7)
    {
        return $this->getField($position);
    }

    public function getGroupNumber($position = 8)
    {
        return $this->getField($position);
    }

    public function getGroupName($position = 9)
    {
        return $this->getField($position);
    }

    public function getInsuredsGroupEmpID($position = 10)
    {
        return $this->getField($position);
    }

    public function getInsuredsGroupEmpName($position = 11)
    {
        return $this->getField($position);
    }

    public function getPlanEffectiveDate($position = 12)
    {
        return $this->getField($position);
    }

    public function getPlanExpirationDate($position = 13)
    {
        return $this->getField($position);
    }

    public function getAuthorizationInformation($position = 14)
    {
        return $this->getField($position);
    }

    public function getPlanType($position = 15)
    {
        return $this->getField($position);
    }

    public function getNameOfInsured($position = 16)
    {
        return $this->getField($position);
    }

    public function getInsuredsRelationshipToPatient($position = 17)
    {
        return $this->getField($position);
    }

    public function getInsuredsDateOfBirth($position = 18)
    {
        return $this->getField($position);
    }

    public function getInsuredsAddress($position = 19)
    {
        return $this->getField($position);
    }

    public function getAssignmentOfBenefits($position = 20)
    {
        return $this->getField($position);
    }

    public function getCoordinationOfBenefits($position = 21)
    {
        return $this->getField($position);
    }

    public function getCoordOfBenPriority($position = 22)
    {
        return $this->getField($position);
    }

    public function getNoticeOfAdmissionFlag($position = 23)
    {
        return $this->getField($position);
    }

    public function getNoticeOfAdmissionDate($position = 24)
    {
        return $this->getField($position);
    }

    public function getReportOfEligibilityFlag($position = 25)
    {
        return $this->getField($position);
    }

    public function getReportOfEligibilityDate($position = 26)
    {
        return $this->getField($position);
    }

    public function getReleaseInformationCode($position = 27)
    {
        return $this->getField($position);
    }

    public function getPreAdmitCertPAC($position = 28)
    {
        return $this->getField($position);
    }

    public function getVerificationDateTime($position = 29)
    {
        return $this->getField($position);
    }

    public function getVerificationBy($position = 30)
    {
        return $this->getField($position);
    }

    public function getTypeOfAgreementCode($position = 31)
    {
        return $this->getField($position);
    }

    public function getBillingStatus($position = 32)
    {
        return $this->getField($position);
    }

    public function getLifetimeReserveDays($position = 33)
    {
        return $this->getField($position);
    }

    public function getDelayBeforeLRDay($position = 34)
    {
        return $this->getField($position);
    }

    public function getCompanyPlanCode($position = 35)
    {
        return $this->getField($position);
    }

    public function getPolicyNumber($position = 36)
    {
        return $this->getField($position);
    }

    public function getPolicyDeductible($position = 37)
    {
        return $this->getField($position);
    }

    public function getPolicyLimitAmount($position = 38)
    {
        return $this->getField($position);
    }

    public function getPolicyLimitDays($position = 39)
    {
        return $this->getField($position);
    }

    public function getRoomRateSemiPrivate($position = 40)
    {
        return $this->getField($position);
    }

    public function getRoomRatePrivate($position = 41)
    {
        return $this->getField($position);
    }

    public function getInsuredsEmploymentStatus($position = 42)
    {
        return $this->getField($position);
    }

    public function getInsuredsSex($position = 43)
    {
        return $this->getField($position);
    }

    public function getInsuredsEmployersAddress($position = 44)
    {
        return $this->getField($position);
    }

    public function getVerificationStatus($position = 45)
    {
        return $this->getField($position);
    }

    public function getPriorInsurancePlanID($position = 46)
    {
        return $this->getField($position);
    }

    public function getCoverageType($position = 47)
    {
        return $this->getField($position);
    }

    public function getHandicap($position = 48)
    {
        return $this->getField($position);
    }

    public function getInsuredsIDNumber($position = 49)
    {
        return $this->getField($position);
    }
}
