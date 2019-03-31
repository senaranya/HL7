<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * TQ segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/dataType/TQ
 */
class TQ extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('TQ', $fields);
    }

    public function setQuantity($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuInterval($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuDuration($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuStartDatetime($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuEndDatetime($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuPriority($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuCondition($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuText($value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuConjunction($value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuOrderSequencing($value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuOccurrenceDuration($value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    public function setQuTotalOccurences($value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    public function getQuantity(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getQuInterval(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getQuDuration(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getQuStartDatetime(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getQuEndDatetime(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getQuPriority(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getQuCondition(int $position = 7)
    {
        return $this->getField($position);
    }

    public function getQuText(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getQuConjunction(int $position = 9)
    {
        return $this->getField($position);
    }

    public function getQuOrderSequencing(int $position = 10)
    {
        return $this->getField($position);
    }

    public function getQuOccurrenceDuration(int $position = 11)
    {
        return $this->getField($position);
    }

    public function getQuTotalOccurences(int $position = 12)
    {
        return $this->getField($position);
    }
}
