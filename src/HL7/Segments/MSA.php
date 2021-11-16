<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * MSA: Message acknowledgement segment
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/MSA
 */
class MSA extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('MSA', $fields);
    }

    public function setAcknowledgmentCode($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Backward compatibility with 2.3
     * @param $value
     * @param int $position
     * @return bool
     */
    public function setAcknowledgementCode($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setMessageControlID($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setTextMessage($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setExpectedSequenceNumber($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setDelayedAcknowledgementType($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setErrorCondition($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    public function getAcknowledgmentCode(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Backward compatibility with 2.3
     * @param int $position
     * @return array|string|null
     */
    public function getAcknowledgementCode(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getMessageControlID(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getTextMessage(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getExpectedSequenceNumber(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getDelayedAcknowledgementType(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getErrorCondition(int $position = 6)
    {
        return $this->getField($position);
    }
}
