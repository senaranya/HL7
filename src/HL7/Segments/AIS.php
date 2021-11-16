<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * AIS segment class
 *
 * AIS - Appointment Information
 * The AIS segment contains information about various kinds of services that can be scheduled. 
 * Services included in a transaction using this segment are assumed to be controlled by a schedule 
 * on a schedule filler application. 
 * Services not controlled by a schedule are not identified on a schedule request using this segment.
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/AIS
 */
class AIS extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('AIS', $fields);
        $this->setID($this::$setId++);
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

    public function setUniversalServiceIdentifier($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setStartDateTime($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setStartDateTimeOffset($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setStartDateTimeOffsetUnits($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setDuration($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setDurationUnits($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setAllowSubstitutionCode($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setFillerStatusCode($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerSupplementalServiceInformation($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setFillerSupplementalServiceInformation($value, int $position = 12)
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
    
    public function getUniversalServiceIdentifier(int $position = 3)
    {
        return $this->getField($position);
    }
    
    public function getStartDateTime(int $position = 4)
    {
        return $this->getField($position);
    }
    
    public function getStartDateTimeOffset(int $position = 5)
    {
        return $this->getField($position);
    }
    
    public function getStartDateTimeOffsetUnits(int $position = 6)
    {
        return $this->getField($position);
    }
    
    public function getDuration(int $position = 7)
    {
        return $this->getField($position);
    }
    
    public function getDurationUnits(int $position = 8)
    {
        return $this->getField($position);
    }
    
    public function getAllowSubstitutionCode(int $position = 9)
    {
        return $this->getField($position);
    }
    
    public function getFillerStatusCode(int $position = 10)
    {
        return $this->getField($position);
    }
    
    public function getPlacerSupplementalServiceInformation(int $position = 11)
    {
        return $this->getField($position);
    }
    
    public function getFillerSupplementalServiceInformation(int $position = 12)
    {
        return $this->getField($position);
    }
}
