<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * DG1 segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/DG1
 */
class DG1 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('DG1', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisCodingMethod($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisCodeDG1($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisDescription($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisDateTime($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisType($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setMajorDiagnosticCategory($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosticRelatedGroup($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setDRGApprovalIndicator($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setDRGGrouperReviewCode($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setOutlierType($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setOutlierDays($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setOutlierCost($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setGrouperVersionAndType($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisPriority($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosingClinician($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisClassification($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setConfidentialIndicator($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setAttestationDateTime($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getDiagnosisCodingMethod($position = 2)
    {
        return $this->getField($position);
    }

    public function getDiagnosisCodeDG1($position = 3)
    {
        return $this->getField($position);
    }

    public function getDiagnosisDescription($position = 4)
    {
        return $this->getField($position);
    }

    public function getDiagnosisDateTime($position = 5)
    {
        return $this->getField($position);
    }

    public function getDiagnosisType($position = 6)
    {
        return $this->getField($position);
    }

    public function getMajorDiagnosticCategory($position = 7)
    {
        return $this->getField($position);
    }

    public function getDiagnosticRelatedGroup($position = 8)
    {
        return $this->getField($position);
    }

    public function getDRGApprovalIndicator($position = 9)
    {
        return $this->getField($position);
    }

    public function getDRGGrouperReviewCode($position = 10)
    {
        return $this->getField($position);
    }

    public function getOutlierType($position = 11)
    {
        return $this->getField($position);
    }

    public function getOutlierDays($position = 12)
    {
        return $this->getField($position);
    }

    public function getOutlierCost($position = 13)
    {
        return $this->getField($position);
    }

    public function getGrouperVersionAndType($position = 14)
    {
        return $this->getField($position);
    }

    public function getDiagnosisPriority($position = 15)
    {
        return $this->getField($position);
    }

    public function getDiagnosingClinician($position = 16)
    {
        return $this->getField($position);
    }

    public function getDiagnosisClassification($position = 17)
    {
        return $this->getField($position);
    }

    public function getConfidentialIndicator($position = 18)
    {
        return $this->getField($position);
    }

    public function getAttestationDateTime($position = 19)
    {
        return $this->getField($position);
    }
}
