<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * IN1 segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-in1-insurance-segment
 */
class IN1 extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('IN1', $fields);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insurancePlanID($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuranceCompanyID($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuranceCompanyName($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuranceCompanyAddress($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuranceCoContactPerson($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuranceCoPhoneNumber($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function groupNumber($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function groupName($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsGroupEmpID($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsGroupEmpName($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function planEffectiveDate($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function planExpirationDate($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function authorizationInformation($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function planType($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function nameOfInsured($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsRelationshipToPatient($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsDateOfBirth($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsAddress($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function assignmentOfBenefits($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function coordinationOfBenefits($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function coordOfBenPriority($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function noticeOfAdmissionFlag($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function noticeOfAdmissionDate($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function reportOfEligibilityFlag($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function reportOfEligibilityDate($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function releaseInformationCode($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function preAdmitCertPAC($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function verificationDateTime($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function verificationBy($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function typeOfAgreementCode($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function billingStatus($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function lifetimeReserveDays($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function delayBeforeLRDay($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function companyPlanCode($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function policyNumber($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function policyDeductible($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function policyLimitAmount($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function policyLimitDays($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function roomRateSemiPrivate($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function roomRatePrivate($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsEmploymentStatus($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsSex($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsEmployersAddress($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function verificationStatus($value, int $position = 45)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function priorInsurancePlanID($value, int $position = 46)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function coverageType($value, int $position = 47)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function handicap($value, int $position = 48)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function insuredsIDNumber($value, int $position = 49)
    {
        return $this->setField($position, $value);
    }
}
