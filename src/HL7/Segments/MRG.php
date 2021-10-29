<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * MRG segment class
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/MRG
 */
class MRG extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('MRG', $fields);
    }

    public function setPriorPatientIdentifierList($value, int $position = 1):bool
    {
        return $this->setField($position, $value);
    }

    public function setPriorAlternatePatientID($value, int $position = 2):bool
    {
        return $this->setField($position, $value);
    }

    public function setPriorPatientAccountNumber($value, int $position = 3):bool
    {
        return $this->setField($position, $value);
    }

    public function setPriorPatientID($value, int $position = 4):bool
    {
        return $this->setField($position, $value);
    }

    public function setPriorVisitNumber($value, int $position = 5):bool
    {
        return $this->setField($position, $value);
    }

    public function setPriorAlternateVisitID($value, int $position = 6):bool
    {
        return $this->setField($position, $value);
    }

    public function setPriorPatientName($value, int $position = 7):bool
    {
        return $this->setField($position, $value);
    }

    public function getPriorPatientIdentifierList(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getPriorAlternatePatientID(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getPriorPatientAccountNumber(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getPriorPatientID(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getPriorVisitNumber(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getPriorAlternateVisitID(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getPriorPatientName(int $position = 7)
    {
        return $this->getField($position);
    }
}
