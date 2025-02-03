<?php

declare(strict_types=1);

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

    public function __construct(?array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('PV1', $fields);
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
     * Set ID (PV1.1)
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
     * Set Patient Class (PV1.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setPatientClass($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Assigned Patient Location (PV1.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setAssignedPatientLocation($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Admission Type (PV1.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setAdmissionType($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Pre Admit Number (PV1.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setPreAdmitNumber($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Prior Patient Location (PV1.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setPriorPatientLocation($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Attending Doctor (PV1.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setAttendingDoctor($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Referring Doctor (PV1.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setReferringDoctor($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Consulting Doctor (PV1.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setConsultingDoctor($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Hospital Service (PV1.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setHospitalService($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Temporary Location (PV1.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setTemporaryLocation($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Pre Admit Test Indicator (PV1.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setPreAdmitTestIndicator($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Re Admission Indicator (PV1.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setReAdmissionIndicator($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Admit Source (PV1.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setAdmitSource($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Ambulatory Status (PV1.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setAmbulatoryStatus($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Vip Indicator (PV1.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setVipIndicator($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Admitting Doctor (PV1.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setAdmittingDoctor($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Patient Type (PV1.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setPatientType($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Visit Number (PV1.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setVisitNumber($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Financial Class (PV1.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setFinancialClass($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Charge Price Indicator (PV1.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setChargePriceIndicator($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Courtesy Code (PV1.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setCourtesyCode($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Credit Rating (PV1.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setCreditRating($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Contract Code (PV1.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setContractCode($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Contract Effective Date (PV1.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setContractEffectiveDate($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Contract Amount (PV1.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setContractAmount($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Contract Period (PV1.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setContractPeriod($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Interest Code (PV1.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setInterestCode($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Transfer To Bad Debt Code (PV1.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setTransferToBadDebtCode($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Transfer To Bad Debt Date (PV1.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setTransferToBadDebtDate($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Bad Debt Agency Code (PV1.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setBadDebtAgencyCode($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Bad Debt Transfer Amount (PV1.32)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 32
     *
     * @return bool
     *
     */
    public function setBadDebtTransferAmount($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Bad Debt Recovery Amount (PV1.33)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 33
     *
     * @return bool
     *
     */
    public function setBadDebtRecoveryAmount($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Delete Account Indicator (PV1.34)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 34
     *
     * @return bool
     *
     */
    public function setDeleteAccountIndicator($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Delete Account Date (PV1.35)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 35
     *
     * @return bool
     *
     */
    public function setDeleteAccountDate($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Discharge Disposition (PV1.36)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 36
     *
     * @return bool
     *
     */
    public function setDischargeDisposition($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Discharged To Location (PV1.37)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 37
     *
     * @return bool
     *
     */
    public function setDischargedToLocation($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Diet Type (PV1.38)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 38
     *
     * @return bool
     *
     */
    public function setDietType($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Servicing Facility (PV1.39)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 39
     *
     * @return bool
     *
     */
    public function setServicingFacility($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Bed Status (PV1.40)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 40
     *
     * @return bool
     *
     */
    public function setBedStatus($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Account Status (PV1.41)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 41
     *
     * @return bool
     *
     */
    public function setAccountStatus($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Pending Location (PV1.42)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 42
     *
     * @return bool
     *
     */
    public function setPendingLocation($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Prior Temporary Location (PV1.43)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 43
     *
     * @return bool
     *
     */
    public function setPriorTemporaryLocation($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Admit Date Time (PV1.44)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 44
     *
     * @return bool
     *
     */
    public function setAdmitDateTime($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Discharge Date Time (PV1.45)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 45
     *
     * @return bool
     *
     */
    public function setDischargeDateTime($value, int $position = 45)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Current Patient Balance (PV1.46)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 46
     *
     * @return bool
     *
     */
    public function setCurrentPatientBalance($value, int $position = 46)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Total Charges (PV1.47)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 47
     *
     * @return bool
     *
     */
    public function setTotalCharges($value, int $position = 47)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Total Adjustments (PV1.48)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 48
     *
     * @return bool
     *
     */
    public function setTotalAdjustments($value, int $position = 48)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Total Payments (PV1.49)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 49
     *
     * @return bool
     *
     */
    public function setTotalPayments($value, int $position = 49)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Alternate Visit ID (PV1.50)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 50
     *
     * @return bool
     *
     */
    public function setAlternateVisitID($value, int $position = 50)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Visit Indicator (PV1.51)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 51
     *
     * @return bool
     *
     */
    public function setVisitIndicator($value, int $position = 51)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     */
    /**
     * Set Other Healthcare Provider (PV1.52)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 52
     *
     * @return bool
     *
     */
    public function setOtherHealthcareProvider($value, int $position = 52)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (PV1.1)
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
     * Get Patient Class (PV1.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getPatientClass(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Assigned Patient Location (PV1.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getAssignedPatientLocation(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Admission Type (PV1.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getAdmissionType(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Pre Admit Number (PV1.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getPreAdmitNumber(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior Patient Location (PV1.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getPriorPatientLocation(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Attending Doctor (PV1.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getAttendingDoctor(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Referring Doctor (PV1.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getReferringDoctor(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Consulting Doctor (PV1.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getConsultingDoctor(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Hospital Service (PV1.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getHospitalService(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Temporary Location (PV1.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getTemporaryLocation(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Pre Admit Test Indicator (PV1.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getPreAdmitTestIndicator(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Re Admission Indicator (PV1.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getReAdmissionIndicator(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Admit Source (PV1.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getAdmitSource(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Ambulatory Status (PV1.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getAmbulatoryStatus(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Vip Indicator (PV1.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getVipIndicator(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Admitting Doctor (PV1.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getAdmittingDoctor(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Patient Type (PV1.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getPatientType(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Visit Number (PV1.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getVisitNumber(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Financial Class (PV1.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getFinancialClass(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Charge Price Indicator (PV1.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getChargePriceIndicator(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Courtesy Code (PV1.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getCourtesyCode(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Credit Rating (PV1.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getCreditRating(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Contract Code (PV1.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getContractCode(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Contract Effective Date (PV1.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getContractEffectiveDate(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Contract Amount (PV1.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getContractAmount(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Contract Period (PV1.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getContractPeriod(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Interest Code (PV1.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getInterestCode(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Transfer To Bad Debt Code (PV1.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getTransferToBadDebtCode(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Transfer To Bad Debt Date (PV1.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getTransferToBadDebtDate(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Bad Debt Agency Code (PV1.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getBadDebtAgencyCode(int $position = 31)
    {
        return $this->getField($position);
    }

    /**
     * Get Bad Debt Transfer Amount (PV1.32)
     *
     * @param int $position Defaults to 32
     *
     * @return array|string|int|null
     *
     */
    public function getBadDebtTransferAmount(int $position = 32)
    {
        return $this->getField($position);
    }

    /**
     * Get Bad Debt Recovery Amount (PV1.33)
     *
     * @param int $position Defaults to 33
     *
     * @return array|string|int|null
     *
     */
    public function getBadDebtRecoveryAmount(int $position = 33)
    {
        return $this->getField($position);
    }

    /**
     * Get Delete Account Indicator (PV1.34)
     *
     * @param int $position Defaults to 34
     *
     * @return array|string|int|null
     *
     */
    public function getDeleteAccountIndicator(int $position = 34)
    {
        return $this->getField($position);
    }

    /**
     * Get Delete Account Date (PV1.35)
     *
     * @param int $position Defaults to 35
     *
     * @return array|string|int|null
     *
     */
    public function getDeleteAccountDate(int $position = 35)
    {
        return $this->getField($position);
    }

    /**
     * Get Discharge Disposition (PV1.36)
     *
     * @param int $position Defaults to 36
     *
     * @return array|string|int|null
     *
     */
    public function getDischargeDisposition(int $position = 36)
    {
        return $this->getField($position);
    }

    /**
     * Get Discharged To Location (PV1.37)
     *
     * @param int $position Defaults to 37
     *
     * @return array|string|int|null
     *
     */
    public function getDischargedToLocation(int $position = 37)
    {
        return $this->getField($position);
    }

    /**
     * Get Diet Type (PV1.38)
     *
     * @param int $position Defaults to 38
     *
     * @return array|string|int|null
     *
     */
    public function getDietType(int $position = 38)
    {
        return $this->getField($position);
    }

    /**
     * Get Servicing Facility (PV1.39)
     *
     * @param int $position Defaults to 39
     *
     * @return array|string|int|null
     *
     */
    public function getServicingFacility(int $position = 39)
    {
        return $this->getField($position);
    }

    /**
     * Get Bed Status (PV1.40)
     *
     * @param int $position Defaults to 40
     *
     * @return array|string|int|null
     *
     */
    public function getBedStatus(int $position = 40)
    {
        return $this->getField($position);
    }

    /**
     * Get Account Status (PV1.41)
     *
     * @param int $position Defaults to 41
     *
     * @return array|string|int|null
     *
     */
    public function getAccountStatus(int $position = 41)
    {
        return $this->getField($position);
    }

    /**
     * Get Pending Location (PV1.42)
     *
     * @param int $position Defaults to 42
     *
     * @return array|string|int|null
     *
     */
    public function getPendingLocation(int $position = 42)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior Temporary Location (PV1.43)
     *
     * @param int $position Defaults to 43
     *
     * @return array|string|int|null
     *
     */
    public function getPriorTemporaryLocation(int $position = 43)
    {
        return $this->getField($position);
    }

    /**
     * Get Admit Date Time (PV1.44)
     *
     * @param int $position Defaults to 44
     *
     * @return array|string|int|null
     *
     */
    public function getAdmitDateTime(int $position = 44)
    {
        return $this->getField($position);
    }

    /**
     * Get Discharge Date Time (PV1.45)
     *
     * @param int $position Defaults to 45
     *
     * @return array|string|int|null
     *
     */
    public function getDischargeDateTime(int $position = 45)
    {
        return $this->getField($position);
    }

    /**
     * Get Current Patient Balance (PV1.46)
     *
     * @param int $position Defaults to 46
     *
     * @return array|string|int|null
     *
     */
    public function getCurrentPatientBalance(int $position = 46)
    {
        return $this->getField($position);
    }

    /**
     * Get Total Charges (PV1.47)
     *
     * @param int $position Defaults to 47
     *
     * @return array|string|int|null
     *
     */
    public function getTotalCharges(int $position = 47)
    {
        return $this->getField($position);
    }

    /**
     * Get Total Adjustments (PV1.48)
     *
     * @param int $position Defaults to 48
     *
     * @return array|string|int|null
     *
     */
    public function getTotalAdjustments(int $position = 48)
    {
        return $this->getField($position);
    }

    /**
     * Get Total Payments (PV1.49)
     *
     * @param int $position Defaults to 49
     *
     * @return array|string|int|null
     *
     */
    public function getTotalPayments(int $position = 49)
    {
        return $this->getField($position);
    }

    /**
     * Get Alternate Visit ID (PV1.50)
     *
     * @param int $position Defaults to 50
     *
     * @return array|string|int|null
     *
     */
    public function getAlternateVisitID(int $position = 50)
    {
        return $this->getField($position);
    }

    /**
     * Get Visit Indicator (PV1.51)
     *
     * @param int $position Defaults to 51
     *
     * @return array|string|int|null
     *
     */
    public function getVisitIndicator(int $position = 51)
    {
        return $this->getField($position);
    }

    /**
     * Get Other Healthcare Provider (PV1.52)
     *
     * @param int $position Defaults to 52
     *
     * @return array|string|int|null
     *
     */
    public function getOtherHealthcareProvider(int $position = 52)
    {
        return $this->getField($position);
    }
}
