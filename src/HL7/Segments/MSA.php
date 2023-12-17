<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * MSA: Message acknowledgement segment
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3/segment/MSA
 */
class MSA extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('MSA', $fields);
    }

    /**
     * Set Acknowledgement Code (MSA.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setAcknowledgementCode($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Message Control ID (MSA.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setMessageControlID($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Text Message (MSA.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setTextMessage($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Expected Sequence Number (MSA.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setExpectedSequenceNumber($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Delayed Acknowledgement Type (MSA.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setDelayedAcknowledgementType($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Error Condition (MSA.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setErrorCondition($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    /**
     * Get Acknowledgement Code (MSA.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getAcknowledgementCode(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Message ControlID (MSA.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getMessageControlID(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Text Message (MSA.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getTextMessage(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Expected SequenceNumber (MSA.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getExpectedSequenceNumber(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Delayed AcknowledgementType (MSA.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getDelayedAcknowledgementType(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Error Condition (MSA.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getErrorCondition(int $position = 6)
    {
        return $this->getField($position);
    }
}
