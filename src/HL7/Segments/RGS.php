<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * RGS segment class
 *
 * RGS - Resource group segment
 * The RGS segment is used to identify relationships between resources identified for a scheduled event.
 * This segment can be used, on a site specified basis, to identify groups of resources that are used together
 * within a scheduled event, or to describe some other relationship between resources. To specify related groups
 * of resources within a message, begin each group with an RGS segment, and then follow that RGS with one or more
 * of the Appointment Information segments (AIG, AIL, AIS, or AIP).
 *
 * If a message does not require any grouping of resources, then specify a single RGS in the message, and follow it
 * with all of the Appointment Information segments for the scheduled event. (At least one RGS segment is required in
 * each message – even if no grouping of resources is required – to allow parsers to properly understand the message.)
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/RGS
 */
class RGS extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('RGS', $fields);
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
     * @param int $index
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setID(int $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setSegmentActionCode($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setResourceGroupID($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getSegmentActionCode(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getResourceGroupID(int $position = 3)
    {
        return $this->getField($position);
    }
}
