<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * PV1 segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-pv1-patient-visit-information-segment
 */
class PV1 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('PV1', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setPatientClass($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setAssignedPatientLocation($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAdmissionType($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setPreAdmitNumber($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setPriorPatientLocation($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAttendingDoctor($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setReferringDoctor($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setConsultingDoctor($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setHospitalService($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setTemporaryLocation($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setPreAdmitTestIndicator($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setReAdmissionIndicator($value, $position = 13)
        {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAdmitSource($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAmbulatoryStatus($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setVipIndicator($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAdmittingDoctor($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setPatientType($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setVisitNumber($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setFinancialClass($value, $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setChargePriceIndicator($value, $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setCourtesyCode($value, $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setCreditRating($value, $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setContractCode($value, $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setContractEffectiveDate($value, $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setContractAmount($value, $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setContractPeriod($value, $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setInterestCode($value, $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setTransferToBadDebtCode($value, $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setTransferToBadDebtDate($value, $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setBadDebtAgencyCode($value, $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setBadDebtTransferAmount($value, $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setBadDebtRecoveryAmount($value, $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setDeleteAccountIndicator($value, $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setDeleteAccountDate($value, $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setDischargeDisposition($value, $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setDischargedToLocation($value, $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setDietType($value, $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setServicingFacility($value, $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setBedStatus($value, $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAccountStatus($value, $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setPendingLocation($value, $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setPriorTemporaryLocation($value, $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAdmitDateTime($value, $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setDischargeDateTime($value, $position = 45)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setCurrentPatientBalance($value, $position = 46)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setTotalCharges($value, $position = 47)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setTotalAdjustments($value, $position = 48)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setTotalPayments($value, $position = 49)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setAlternateVisitID($value, $position = 50)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setVisitIndicator($value, $position = 51)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param $position
     * @return bool
     */
    public function setOtherHealthcareProvider($value, $position = 52)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getPatientClass($position = 2)
    {
        return $this->getField($position);
    }

    public function getAssignedPatientLocation($position = 3)
    {
        return $this->getField($position);
    }

    public function getAdmissionType($position = 4)
    {
        return $this->getField($position);
    }

    public function getPreAdmitNumber($position = 5)
    {
        return $this->getField($position);
    }

    public function getPriorPatientLocation($position = 6)
    {
        return $this->getField($position);
    }

    public function getAttendingDoctor($position = 7)
    {
        return $this->getField($position);
    }

    public function getReferringDoctor($position = 8)
    {
        return $this->getField($position);
    }

    public function getConsultingDoctor($position = 9)
    {
        return $this->getField($position);
    }

    public function getHospitalService($position = 10)
    {
        return $this->getField($position);
    }

    public function getTemporaryLocation($position = 11)
    {
        return $this->getField($position);
    }

    public function getPreAdmitTestIndicator($position = 12)
    {
        return $this->getField($position);
    }

    public function getReAdmissionIndicator($position = 13)
    {
        return $this->getField($position);
    }

    public function getAdmitSource($position = 14)
    {
        return $this->getField($position);
    }

    public function getAmbulatoryStatus($position = 15)
    {
        return $this->getField($position);
    }

    public function getVipIndicator($position = 16)
    {
        return $this->getField($position);
    }

    public function getAdmittingDoctor($position = 17)
    {
        return $this->getField($position);
    }

    public function getPatientType($position = 18)
    {
        return $this->getField($position);
    }

    public function getVisitNumber($position = 19)
    {
        return $this->getField($position);
    }

    public function getFinancialClass($position = 20)
    {
        return $this->getField($position);
    }

    public function getChargePriceIndicator($position = 21)
    {
        return $this->getField($position);
    }

    public function getCourtesyCode($position = 22)
    {
        return $this->getField($position);
    }

    public function getCreditRating($position = 23)
    {
        return $this->getField($position);
    }

    public function getContractCode($position = 24)
    {
        return $this->getField($position);
    }

    public function getContractEffectiveDate($position = 25)
    {
        return $this->getField($position);
    }

    public function getContractAmount($position = 26)
    {
        return $this->getField($position);
    }

    public function getContractPeriod($position = 27)
    {
        return $this->getField($position);
    }

    public function getInterestCode($position = 28)
    {
        return $this->getField($position);
    }

    public function getTransferToBadDebtCode($position = 29)
    {
        return $this->getField($position);
    }

    public function getTransferToBadDebtDate($position = 30)
    {
        return $this->getField($position);
    }

    public function getBadDebtAgencyCode($position = 31)
    {
        return $this->getField($position);
    }

    public function getBadDebtTransferAmount($position = 32)
    {
        return $this->getField($position);
    }

    public function getBadDebtRecoveryAmount($position = 33)
    {
        return $this->getField($position);
    }

    public function getDeleteAccountIndicator($position = 34)
    {
        return $this->getField($position);
    }

    public function getDeleteAccountDate($position = 35)
    {
        return $this->getField($position);
    }

    public function getDischargeDisposition($position = 36)
    {
        return $this->getField($position);
    }

    public function getDischargedToLocation($position = 37)
    {
        return $this->getField($position);
    }

    public function getDietType($position = 38)
    {
        return $this->getField($position);
    }

    public function getServicingFacility($position = 39)
    {
        return $this->getField($position);
    }

    public function getBedStatus($position = 40)
    {
        return $this->getField($position);
    }

    public function getAccountStatus($position = 41)
    {
        return $this->getField($position);
    }

    public function getPendingLocation($position = 42)
    {
        return $this->getField($position);
    }

    public function getPriorTemporaryLocation($position = 43)
    {
        return $this->getField($position);
    }

    public function getAdmitDateTime($position = 44)
    {
        return $this->getField($position);
    }

    public function getDischargeDateTime($position = 45)
    {
        return $this->getField($position);
    }

    public function getCurrentPatientBalance($position = 46)
    {
        return $this->getField($position);
    }

    public function getTotalCharges($position = 47)
    {
        return $this->getField($position);
    }

    public function getTotalAdjustments($position = 48)
    {
        return $this->getField($position);
    }

    public function getTotalPayments($position = 49)
    {
        return $this->getField($position);
    }

    public function getAlternateVisitID($position = 50)
    {
        return $this->getField($position);
    }

    public function getVisitIndicator($position = 51)
    {
        return $this->getField($position);
    }

    public function getOtherHealthcareProvider($position = 52)
    {
        return $this->getField($position);
    }
}
