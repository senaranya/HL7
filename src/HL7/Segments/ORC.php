<?php

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

    public function setOrderControl($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerOrderNumber($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setFillerOrderNumber($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerGroupNumber($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setOrderStatus($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setResponseFlag($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setQuantityTiming($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setParentOrder($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeofTransaction($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setEnteredBy($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setVerifiedBy($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setOrderingProvider($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setEnterersLocation($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setCallBackPhoneNumber($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setOrderEffectiveDateTime($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setOrderControlCodeReason($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setEnteringOrganization($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setEnteringDevice($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setActionBy($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setAdvancedBeneficiaryNoticeCode($value, $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setOrderingFacilityName($value, $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setOrderingFacilityAddress($value, $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setOrderingFacilityPhoneNumber($value, $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setOrderingProviderAddress($value, $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setOrderStatusModifier($value, $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function setAdvancedBeneficiaryNoticeOverrideReason($value, $position = 26)
    {
        return $this->setField($position, $value);
    }

    public function setFillersExpectedAvailabilityDateTime($value, $position = 27)
    {
        return $this->setField($position, $value);
    }

    public function setConfidentialityCode($value, $position = 28)
    {
        return $this->setField($position, $value);
    }

    public function setOrderType($value, $position = 29)
    {
        return $this->setField($position, $value);
    }

    public function setEntererAuthorizationMode($value, $position = 30)
    {
        return $this->setField($position, $value);
    }

    public function setParentUniversalServiceIdentifier($value, $position = 31)
    {
        return $this->setField($position, $value);
    }

    public function getOrderControl($position = 1)
    {
        return $this->getField($position);
    }

    public function getPlacerOrderNumber($position = 2)
    {
        return $this->getField($position);
    }

    public function getFillerOrderNumber($position = 3)
    {
        return $this->getField($position);
    }

    public function getPlacerGroupNumber($position = 4)
    {
        return $this->getField($position);
    }

    public function getOrderStatus($position = 5)
    {
        return $this->getField($position);
    }

    public function getResponseFlag($position = 6)
    {
        return $this->getField($position);
    }

    public function getQuantityTiming($position = 7)
    {
        return $this->getField($position);
    }

    public function getParentOrder($position = 8)
    {
        return $this->getField($position);
    }

    public function getDateTimeofTransaction($position = 9)
    {
        return $this->getField($position);
    }

    public function getEnteredBy($position = 10)
    {
        return $this->getField($position);
    }

    public function getVerifiedBy($position = 11)
    {
        return $this->getField($position);
    }

    public function getOrderingProvider($position = 12)
    {
        return $this->getField($position);
    }

    public function getEnterersLocation($position = 13)
    {
        return $this->getField($position);
    }

    public function getCallBackPhoneNumber($position = 14)
    {
        return $this->getField($position);
    }

    public function getOrderEffectiveDateTime($position = 15)
    {
        return $this->getField($position);
    }

    public function getOrderControlCodeReason($position = 16)
    {
        return $this->getField($position);
    }

    public function getEnteringOrganization($position = 17)
    {
        return $this->getField($position);
    }

    public function getEnteringDevice($position = 18)
    {
        return $this->getField($position);
    }

    public function getActionBy($position = 19)
    {
        return $this->getField($position);
    }

    public function getAdvancedBeneficiaryNoticeCode($position = 20)
    {
        return $this->getField($position);
    }

    public function getOrderingFacilityName($position = 21)
    {
        return $this->getField($position);
    }

    public function getOrderingFacilityAddress($position = 22)
    {
        return $this->getField($position);
    }

    public function getOrderingFacilityPhoneNumber($position = 23)
    {
        return $this->getField($position);
    }

    public function getOrderingProviderAddress($position = 24)
    {
        return $this->getField($position);
    }

    public function getOrderStatusModifier($position = 25)
    {
        return $this->getField($position);
    }

    public function getAdvancedBeneficiaryNoticeOverrideReason($position = 26)
    {
        return $this->getField($position);
    }

    public function getFillersExpectedAvailabilityDateTime($position = 27)
    {
        return $this->getField($position);
    }

    public function getConfidentialityCode($position = 28)
    {
        return $this->getField($position);
    }

    public function getOrderType($position = 29)
    {
        return $this->getField($position);
    }

    public function getEntererAuthorizationMode($position = 30)
    {
        return $this->getField($position);
    }

    public function getParentUniversalServiceIdentifier($position = 31)
    {
        return $this->getField($position);
    }
}
