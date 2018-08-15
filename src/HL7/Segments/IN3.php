<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * IN3 segment class
 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=ORC
 */
class IN3 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('IN3', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationNumber($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setCertifiedBy($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationRequired($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setPenalty($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationDateTime($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationModifyDateTime($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setOperator($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationBeginDate($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationEndDate($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setDays($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setNonConcurCodeDescription($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setNonConcurEffectiveDateTime($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setPhysicianReviewer($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationContact($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationContactPhoneNumber($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setAppealReason($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationAgency($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setCertificationAgencyPhoneNumber($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setPreCertificationRequirement($value, $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setCaseManager($value, $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setSecondOpinionDate($value, $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setSecondOpinionStatus($value, $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setSecondOpinionDocumentationReceived($value, $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setSecondOpinionPhysician($value, $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getCertificationNumber($position = 2)
    {
        return $this->getField($position);
    }

    public function getCertifiedBy($position = 3)
    {
        return $this->getField($position);
    }

    public function getCertificationRequired($position = 4)
    {
        return $this->getField($position);
    }

    public function getPenalty($position = 5)
    {
        return $this->getField($position);
    }

    public function getCertificationDateTime($position = 6)
    {
        return $this->getField($position);
    }

    public function getCertificationModifyDateTime($position = 7)
    {
        return $this->getField($position);
    }

    public function getOperator($position = 8)
    {
        return $this->getField($position);
    }

    public function getCertificationBeginDate($position = 9)
    {
        return $this->getField($position);
    }

    public function getCertificationEndDate($position = 10)
    {
        return $this->getField($position);
    }

    public function getDays($position = 11)
    {
        return $this->getField($position);
    }

    public function getNonConcurCodeDescription($position = 12)
    {
        return $this->getField($position);
    }

    public function getNonConcurEffectiveDateTime($position = 13)
    {
        return $this->getField($position);
    }

    public function getPhysicianReviewer($position = 14)
    {
        return $this->getField($position);
    }

    public function getCertificationContact($position = 15)
    {
        return $this->getField($position);
    }

    public function getCertificationContactPhoneNumber($position = 16)
    {
        return $this->getField($position);
    }

    public function getAppealReason($position = 17)
    {
        return $this->getField($position);
    }

    public function getCertificationAgency($position = 18)
    {
        return $this->getField($position);
    }

    public function getCertificationAgencyPhoneNumber($position = 19)
    {
        return $this->getField($position);
    }

    public function getPreCertificationRequirement($position = 20)
    {
        return $this->getField($position);
    }

    public function getCaseManager($position = 21)
    {
        return $this->getField($position);
    }

    public function getSecondOpinionDate($position = 22)
    {
        return $this->getField($position);
    }

    public function getSecondOpinionStatus($position = 23)
    {
        return $this->getField($position);
    }

    public function getSecondOpinionDocumentationReceived($position = 24)
    {
        return $this->getField($position);
    }

    public function getSecondOpinionPhysician($position = 25)
    {
        return $this->getField($position);
    }
}
