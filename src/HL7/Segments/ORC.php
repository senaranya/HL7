<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * ORC segment class
 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7%20v2.5.1&segment=ORC
 */
class ORC extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('ORC', $fields);
    }

    /**
     * Set Order Control (OBR.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setOrderControl($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Placer OrderNumber (OBR.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setPlacerOrderNumber($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Filler OrderNumber (OBR.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setFillerOrderNumber($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Placer GroupNumber (OBR.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setPlacerGroupNumber($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Order Status (OBR.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setOrderStatus($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Response Flag (OBR.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setResponseFlag($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Quantity Timing (OBR.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setQuantityTiming($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Parent Order (OBR.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setParentOrder($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Date TimeofTransaction (OBR.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setDateTimeofTransaction($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Entered By (OBR.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setEnteredBy($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Verified By (OBR.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setVerifiedBy($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ordering Provider (OBR.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setOrderingProvider($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Enterers Location (OBR.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setEnterersLocation($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Call BackPhoneNumber (OBR.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setCallBackPhoneNumber($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Order EffectiveDateTime (OBR.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setOrderEffectiveDateTime($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Order ControlCodeReason (OBR.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setOrderControlCodeReason($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Entering Organization (OBR.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setEnteringOrganization($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Entering Device (OBR.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setEnteringDevice($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Action By (OBR.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setActionBy($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Advanced BeneficiaryNoticeCode (OBR.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setAdvancedBeneficiaryNoticeCode($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ordering FacilityName (OBR.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setOrderingFacilityName($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ordering FacilityAddress (OBR.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setOrderingFacilityAddress($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ordering FacilityPhoneNumber (OBR.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setOrderingFacilityPhoneNumber($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ordering ProviderAddress (OBR.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setOrderingProviderAddress($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Order StatusModifier (OBR.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setOrderStatusModifier($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Advanced BeneficiaryNoticeOverrideReason (OBR.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setAdvancedBeneficiaryNoticeOverrideReason($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Fillers ExpectedAvailabilityDateTime (OBR.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setFillersExpectedAvailabilityDateTime($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Confidentiality Code (OBR.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setConfidentialityCode($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Order Type (OBR.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setOrderType($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Enterer AuthorizationMode (OBR.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setEntererAuthorizationMode($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Parent UniversalServiceIdentifier (OBR.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setParentUniversalServiceIdentifier($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get Order Control (OBR.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getOrderControl(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Placer OrderNumber (OBR.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerOrderNumber(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler OrderNumber (OBR.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getFillerOrderNumber(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Placer GroupNumber (OBR.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerGroupNumber(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Order Status (OBR.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getOrderStatus(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Response Flag (OBR.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getResponseFlag(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Quantity Timing (OBR.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getQuantityTiming(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Parent Order (OBR.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getParentOrder(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Date TimeofTransaction (OBR.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getDateTimeofTransaction(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Entered By (OBR.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getEnteredBy(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Verified By (OBR.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getVerifiedBy(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Ordering Provider (OBR.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getOrderingProvider(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Enterers Location (OBR.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getEnterersLocation(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Call BackPhoneNumber (OBR.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getCallBackPhoneNumber(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Order EffectiveDateTime (OBR.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getOrderEffectiveDateTime(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Order ControlCodeReason (OBR.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getOrderControlCodeReason(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Entering Organization (OBR.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getEnteringOrganization(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Entering Device (OBR.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getEnteringDevice(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Action By (OBR.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getActionBy(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Advanced BeneficiaryNoticeCode (OBR.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getAdvancedBeneficiaryNoticeCode(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Ordering FacilityName (OBR.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getOrderingFacilityName(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Ordering FacilityAddress (OBR.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getOrderingFacilityAddress(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Ordering FacilityPhoneNumber (OBR.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getOrderingFacilityPhoneNumber(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Ordering ProviderAddress (OBR.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getOrderingProviderAddress(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Order StatusModifier (OBR.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getOrderStatusModifier(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Advanced BeneficiaryNoticeOverrideReason (OBR.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getAdvancedBeneficiaryNoticeOverrideReason(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Fillers ExpectedAvailabilityDateTime (OBR.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getFillersExpectedAvailabilityDateTime(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Confidentiality Code (OBR.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getConfidentialityCode(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Order Type (OBR.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getOrderType(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Enterer AuthorizationMode (OBR.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getEntererAuthorizationMode(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Parent UniversalServiceIdentifier (OBR.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getParentUniversalServiceIdentifier(int $position = 31)
    {
        return $this->getField($position);
    }
}
