<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * TQ1 segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.5.1/dataType/Default.aspx?version=HL7+v2.5.1&dataType=TQ1
 */
class TQ1 extends Segment
{
    public function __construct(?array $fields = null)
    {
        parent::__construct('TQ1', $fields);
    }

    public function setSetIdTQ1($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Quantity (TQ1.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setQuantity($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Repeat Pattern (TQ1.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setRepeatPattern($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Explicit Time (TQ1.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setExplicitTime($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Relative Time And Units (TQ1.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setRelativeTimeAndUnits($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Service Duration (TQ1.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setServiceDuration($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start Date Time (TQ1.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setStartDateTime($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set End Date Time (TQ1.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setEndDateTime($value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Priority (TQ1.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setPriority($value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Condition Text (TQ1.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setConditionText($value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Text Instruction (TQ1.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setTextInstruction($value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Conjunction (TQ1.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setConjunction($value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Occurrence Duration (TQ1.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setOccurrenceDuration($value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Total Occurrences (TQ1.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setTotalOccurrences($value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    public function getSetIdTQ1(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Quantity (TQ1.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getQuantity(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Repeat Pattern (TQ1.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getRepeatPattern(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Explicit Time (TQ1.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getExplicitTime(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Relative Time And Units (TQ1.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getRelativeTimeAndUnits(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Service Duration (TQ1.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getServiceDuration(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Start Date Time (TQ1.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getStartDateTime(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get End Date Time (TQ1.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getEndDateTime(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Priority (TQ1.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getPriority(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Condition Text (TQ1.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getConditionText(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Text Instruction (TQ1.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getTextInstruction(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Conjunction (TQ1.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getConjunction(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Occurrence Duration (TQ1.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getOccurrenceDuration(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Total Occurrences (TQ1.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getTotalOccurrences(int $position = 14)
    {
        return $this->getField($position);
    }
}
