<?php

declare(strict_types=1);

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
     * @return bool
     */
    /**
     * Set Prior Pending Location (PV2.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setPriorPendingLocation($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Accommodation Code (PV2.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setAccommodationCode($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Admit Reason (PV2.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setAdmitReason($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Transfer Reason (PV2.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setTransferReason($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Patient Valuables (PV2.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setPatientValuables($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Patient Valuables Location (PV2.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setPatientValuablesLocation($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Visit User Code (PV2.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setVisitUserCode($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Expected Admit Date Time (PV2.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setExpectedAdmitDateTime($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Expected Discharge Date Time (PV2.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setExpectedDischargeDateTime($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Estimated Lengthof Inpatient Stay (PV2.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setEstimatedLengthofInpatientStay($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Actual Length Of Inpatient Stay (PV2.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setActualLengthOfInpatientStay($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Visit Description (PV2.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setVisitDescription($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Referral Source Code (PV2.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setReferralSourceCode($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Previous Service Date (PV2.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setPreviousServiceDate($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Employment Illness Related Indicator (PV2.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setEmploymentIllnessRelatedIndicator($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Purge Status Code (PV2.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setPurgeStatusCode($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Purge Status Date (PV2.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setPurgeStatusDate($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Special Program Code (PV2.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setSpecialProgramCode($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Retention Indicator (PV2.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setRetentionIndicator($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Expected Number Of Insurance Plans (PV2.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setExpectedNumberOfInsurancePlans($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Visit Publicity Code (PV2.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setVisitPublicityCode($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Visit Protection Indicator (PV2.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setVisitProtectionIndicator($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Clinic Organization Name (PV2.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setClinicOrganizationName($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Patient Status Code (PV2.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setPatientStatusCode($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Visit Priority Code (PV2.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setVisitPriorityCode($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Previous Treatment Date (PV2.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setPreviousTreatmentDate($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Expected Discharge Disposition (PV2.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setExpectedDischargeDisposition($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Signature On File Date (PV2.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setSignatureOnFileDate($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set First Similar Illness Date (PV2.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setFirstSimilarIllnessDate($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Patient Charge Adjustment Code (PV2.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setPatientChargeAdjustmentCode($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Recurring Service Code (PV2.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setRecurringServiceCode($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Billing Media Code (PV2.32)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 32
     *
     * @return bool
     *
     */
    public function setBillingMediaCode($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Expected Surgery Date And Time (PV2.33)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 33
     *
     * @return bool
     *
     */
    public function setExpectedSurgeryDateAndTime($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Military Partnership Code (PV2.34)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 34
     *
     * @return bool
     *
     */
    public function setMilitaryPartnershipCode($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Military Non Availability Code (PV2.35)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 35
     *
     * @return bool
     *
     */
    public function setMilitaryNonAvailabilityCode($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Newborn Baby Indicator (PV2.36)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 36
     *
     * @return bool
     *
     */
    public function setNewbornBabyIndicator($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Baby Detained Indicator (PV2.37)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 37
     *
     * @return bool
     *
     */
    public function setBabyDetainedIndicator($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Mode Of Arrival Code (PV2.38)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 38
     *
     * @return bool
     *
     */
    public function setModeOfArrivalCode($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Recreational Drug Use Code (PV2.39)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 39
     *
     * @return bool
     *
     */
    public function setRecreationalDrugUseCode($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Admission Level Of Care Code (PV2.40)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 40
     *
     * @return bool
     *
     */
    public function setAdmissionLevelOfCareCode($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Precaution Code (PV2.41)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 41
     *
     * @return bool
     *
     */
    public function setPrecautionCode($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Patient Condition Code (PV2.42)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 42
     *
     * @return bool
     *
     */
    public function setPatientConditionCode($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Living Will Code (PV2.43)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 43
     *
     * @return bool
     *
     */
    public function setLivingWillCode($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Organ Donor Code (PV2.44)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 44
     *
     * @return bool
     *
     */
    public function setOrganDonorCode($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Advance Directive Code (PV2.45)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 45
     *
     * @return bool
     *
     */
    public function setAdvanceDirectiveCode($value, int $position = 45)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Patient Status Effective Date (PV2.46)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 46
     *
     * @return bool
     *
     */
    public function setPatientStatusEffectiveDate($value, int $position = 46)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Expected LOAReturn Date Time (PV2.47)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 47
     *
     * @return bool
     *
     */
    public function setExpectedLOAReturnDateTime($value, int $position = 47)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    /**
     * Get Accommodation Code (PV2.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getAccommodationCode(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Admit Reason (PV2.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getAdmitReason(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Transfer Reason (PV2.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getTransferReason(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient Valuables (PV2.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getPatientValuables(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient ValuablesLocation (PV2.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getPatientValuablesLocation(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Visit UserCode (PV2.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getVisitUserCode(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Expected AdmitDateTime (PV2.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getExpectedAdmitDateTime(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Expected DischargeDateTime (PV2.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getExpectedDischargeDateTime(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Estimated LengthofInpatientStay (PV2.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getEstimatedLengthofInpatientStay(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Actual LengthOfInpatientStay (PV2.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getActualLengthOfInpatientStay(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Visit Description (PV2.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getVisitDescription(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Referral SourceCode (PV2.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getReferralSourceCode(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Previous ServiceDate (PV2.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getPreviousServiceDate(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Employment IllnessRelatedIndicator (PV2.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getEmploymentIllnessRelatedIndicator(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Purge StatusCode (PV2.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getPurgeStatusCode(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Purge StatusDate (PV2.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getPurgeStatusDate(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Special ProgramCode (PV2.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getSpecialProgramCode(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Retention Indicator (PV2.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getRetentionIndicator(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Expected NumberOfInsurancePlans (PV2.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getExpectedNumberOfInsurancePlans(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Visit PublicityCode (PV2.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getVisitPublicityCode(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Visit ProtectionIndicator (PV2.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getVisitProtectionIndicator(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Clinic OrganizationName (PV2.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getClinicOrganizationName(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient StatusCode (PV2.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getPatientStatusCode(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Visit PriorityCode (PV2.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getVisitPriorityCode(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Previous TreatmentDate (PV2.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getPreviousTreatmentDate(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Expected DischargeDisposition (PV2.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getExpectedDischargeDisposition(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Signature OnFileDate (PV2.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getSignatureOnFileDate(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get First SimilarIllnessDate (PV2.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getFirstSimilarIllnessDate(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient ChargeAdjustmentCode (PV2.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getPatientChargeAdjustmentCode(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Recurring ServiceCode (PV2.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getRecurringServiceCode(int $position = 31)
    {
        return $this->getField($position);
    }

    /**
     * Get Billing MediaCode (PV2.32)
     *
     * @param int $position Defaults to 32
     *
     * @return array|string|int|null
     *
     */
    public function getBillingMediaCode(int $position = 32)
    {
        return $this->getField($position);
    }

    /**
     * Get Expected SurgeryDateAndTime (PV2.33)
     *
     * @param int $position Defaults to 33
     *
     * @return array|string|int|null
     *
     */
    public function getExpectedSurgeryDateAndTime(int $position = 33)
    {
        return $this->getField($position);
    }

    /**
     * Get Military PartnershipCode (PV2.34)
     *
     * @param int $position Defaults to 34
     *
     * @return array|string|int|null
     *
     */
    public function getMilitaryPartnershipCode(int $position = 34)
    {
        return $this->getField($position);
    }

    /**
     * Get Military NonAvailabilityCode (PV2.35)
     *
     * @param int $position Defaults to 35
     *
     * @return array|string|int|null
     *
     */
    public function getMilitaryNonAvailabilityCode(int $position = 35)
    {
        return $this->getField($position);
    }

    /**
     * Get Newborn BabyIndicator (PV2.36)
     *
     * @param int $position Defaults to 36
     *
     * @return array|string|int|null
     *
     */
    public function getNewbornBabyIndicator(int $position = 36)
    {
        return $this->getField($position);
    }

    /**
     * Get Baby DetainedIndicator (PV2.37)
     *
     * @param int $position Defaults to 37
     *
     * @return array|string|int|null
     *
     */
    public function getBabyDetainedIndicator(int $position = 37)
    {
        return $this->getField($position);
    }

    /**
     * Get Mode OfArrivalCode (PV2.38)
     *
     * @param int $position Defaults to 38
     *
     * @return array|string|int|null
     *
     */
    public function getModeOfArrivalCode(int $position = 38)
    {
        return $this->getField($position);
    }

    /**
     * Get Recreational DrugUseCode (PV2.39)
     *
     * @param int $position Defaults to 39
     *
     * @return array|string|int|null
     *
     */
    public function getRecreationalDrugUseCode(int $position = 39)
    {
        return $this->getField($position);
    }

    /**
     * Get Admission LevelOfCareCode (PV2.40)
     *
     * @param int $position Defaults to 40
     *
     * @return array|string|int|null
     *
     */
    public function getAdmissionLevelOfCareCode(int $position = 40)
    {
        return $this->getField($position);
    }

    /**
     * Get Precaution Code (PV2.41)
     *
     * @param int $position Defaults to 41
     *
     * @return array|string|int|null
     *
     */
    public function getPrecautionCode(int $position = 41)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient ConditionCode (PV2.42)
     *
     * @param int $position Defaults to 42
     *
     * @return array|string|int|null
     *
     */
    public function getPatientConditionCode(int $position = 42)
    {
        return $this->getField($position);
    }

    /**
     * Get Living WillCode (PV2.43)
     *
     * @param int $position Defaults to 43
     *
     * @return array|string|int|null
     *
     */
    public function getLivingWillCode(int $position = 43)
    {
        return $this->getField($position);
    }

    /**
     * Get Organ DonorCode (PV2.44)
     *
     * @param int $position Defaults to 44
     *
     * @return array|string|int|null
     *
     */
    public function getOrganDonorCode(int $position = 44)
    {
        return $this->getField($position);
    }

    /**
     * Get Advance DirectiveCode (PV2.45)
     *
     * @param int $position Defaults to 45
     *
     * @return array|string|int|null
     *
     */
    public function getAdvanceDirectiveCode(int $position = 45)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient StatusEffectiveDate (PV2.46)
     *
     * @param int $position Defaults to 46
     *
     * @return array|string|int|null
     *
     */
    public function getPatientStatusEffectiveDate(int $position = 46)
    {
        return $this->getField($position);
    }

    /**
     * Get Expected LOAReturnDateTime (PV2.47)
     *
     * @param int $position Defaults to 47
     *
     * @return array|string|int|null
     *
     */
    public function getExpectedLOAReturnDateTime(int $position = 47)
    {
        return $this->getField($position);
    }
}
