<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * PV2 segment class
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.4/Segments/PV2
 */
class PV2 extends Segment
{
    /**
     * @param array|null $fields
     */
    public function __construct(array $fields = null)
    {
        parent::__construct('PV2', $fields);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPriorPendingLocation($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setAccommodationCode($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setAdmitReason($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setTransferReason($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPatientValuables($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPatientValuablesLocation($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setVisitUserCode($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setExpectedAdmitDateTime($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setExpectedDischargeDateTime($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setEstimatedLengthofInpatientStay($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setActualLengthOfInpatientStay($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setVisitDescription($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setReferralSourceCode($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPreviousServiceDate($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setEmploymentIllnessRelatedIndicator($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPurgeStatusCode($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPurgeStatusDate($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setSpecialProgramCode($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setRetentionIndicator($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setExpectedNumberOfInsurancePlans($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setVisitPublicityCode($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setVisitProtectionIndicator($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setClinicOrganizationName($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPatientStatusCode($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setVisitPriorityCode($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPreviousTreatmentDate($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setExpectedDischargeDisposition($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setSignatureOnFileDate($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setFirstSimilarIllnessDate($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPatientChargeAdjustmentCode($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setRecurringServiceCode($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setBillingMediaCode($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setExpectedSurgeryDateAndTime($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setMilitaryPartnershipCode($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setMilitaryNonAvailabilityCode($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setNewbornBabyIndicator($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setBabyDetainedIndicator($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setModeOfArrivalCode($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setRecreationalDrugUseCode($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setAdmissionLevelOfCareCode($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPrecautionCode($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPatientConditionCode($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setLivingWillCode($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setOrganDonorCode($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setAdvanceDirectiveCode($value, int $position = 45)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setPatientStatusEffectiveDate($value, int $position = 46)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setExpectedLOAReturnDateTime($value, int $position = 47)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    public function getAccommodationCode(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getAdmitReason(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getTransferReason(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getPatientValuables(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getPatientValuablesLocation(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getVisitUserCode(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getExpectedAdmitDateTime(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getExpectedDischargeDateTime(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getEstimatedLengthofInpatientStay(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getActualLengthOfInpatientStay(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getVisitDescription(int $position = 12)
    {
        return $this->getField($position);
    }

    public function getReferralSourceCode(int $position = 13)
    {
        return $this->getField($position);
    }

    public function getPreviousServiceDate(int $position = 14)
    {
        return $this->getField($position);
    }

    public function getEmploymentIllnessRelatedIndicator(int $position = 15)
    {
        return $this->getField($position);
    }

    public function getPurgeStatusCode(int $position = 16)
    {
        return $this->getField($position);
    }

    public function getPurgeStatusDate(int $position = 17)
    {
        return $this->getField($position);
    }

    public function getSpecialProgramCode(int $position = 18)
    {
        return $this->getField($position);
    }

    public function getRetentionIndicator(int $position = 19)
    {
        return $this->getField($position);
    }

    public function getExpectedNumberOfInsurancePlans(int $position = 20)
    {
        return $this->getField($position);
    }

    public function getVisitPublicityCode(int $position = 21)
    {
        return $this->getField($position);
    }

    public function getVisitProtectionIndicator(int $position = 22)
    {
        return $this->getField($position);
    }

    public function getClinicOrganizationName(int $position = 23)
    {
        return $this->getField($position);
    }

    public function getPatientStatusCode(int $position = 24)
    {
        return $this->getField($position);
    }

    public function getVisitPriorityCode(int $position = 25)
    {
        return $this->getField($position);
    }

    public function getPreviousTreatmentDate(int $position = 26)
    {
        return $this->getField($position);
    }

    public function getExpectedDischargeDisposition(int $position = 27)
    {
        return $this->getField($position);
    }

    public function getSignatureOnFileDate(int $position = 28)
    {
        return $this->getField($position);
    }

    public function getFirstSimilarIllnessDate(int $position = 29)
    {
        return $this->getField($position);
    }

    public function getPatientChargeAdjustmentCode(int $position = 30)
    {
        return $this->getField($position);
    }

    public function getRecurringServiceCode(int $position = 31)
    {
        return $this->getField($position);
    }

    public function getBillingMediaCode(int $position = 32)
    {
        return $this->getField($position);
    }

    public function getExpectedSurgeryDateAndTime(int $position = 33)
    {
        return $this->getField($position);
    }

    public function getMilitaryPartnershipCode(int $position = 34)
    {
        return $this->getField($position);
    }

    public function getMilitaryNonAvailabilityCode(int $position = 35)
    {
        return $this->getField($position);
    }

    public function getNewbornBabyIndicator(int $position = 36)
    {
        return $this->getField($position);
    }

    public function getBabyDetainedIndicator(int $position = 37)
    {
        return $this->getField($position);
    }

    public function getModeOfArrivalCode(int $position = 38)
    {
        return $this->getField($position);
    }

    public function getRecreationalDrugUseCode(int $position = 39)
    {
        return $this->getField($position);
    }

    public function getAdmissionLevelOfCareCode(int $position = 40)
    {
        return $this->getField($position);
    }

    public function getPrecautionCode(int $position = 41)
    {
        return $this->getField($position);
    }

    public function getPatientConditionCode(int $position = 42)
    {
        return $this->getField($position);
    }

    public function getLivingWillCode(int $position = 43)
    {
        return $this->getField($position);
    }

    public function getOrganDonorCode(int $position = 44)
    {
        return $this->getField($position);
    }

    public function getAdvanceDirectiveCode(int $position = 45)
    {
        return $this->getField($position);
    }

    public function getPatientStatusEffectiveDate(int $position = 46)
    {
        return $this->getField($position);
    }

    public function getExpectedLOAReturnDateTime(int $position = 47)
    {
        return $this->getField($position);
    }
}
