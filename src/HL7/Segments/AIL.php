<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * AIL segment class
 *
* AIL: Appointment Information - Location Resource
*
* The AIL segment contains information about location resources (meeting rooms, operating rooms, examination rooms, or
* other locations) that can be scheduled. Resources included in a transaction using this segment are assumed to be
* controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not identified
* on a schedule request using this segment. Location resources are identified with this specific segment because of the
* specific encoding of locations used by the HL7 specification.

 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=AIL
 */
class AIL extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('AIL', $fields);
        $this->setID($this::$setId++);
    }

    public function __destruct()
    {
        $this->setID($this::$setId--);
    }

    /**
     * Reset index of this segment
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setID(int $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Segment ActionCode (OBR.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setSegmentActionCode($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Location ResourceID (OBR.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setLocationResourceID($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Location TypeAIL (OBR.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setLocationTypeAIL($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Location Group (OBR.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setLocationGroup($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start DateTime (OBR.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setStartDateTime($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start DateTimeOffset (OBR.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setStartDateTimeOffset($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start DateTimeOffsetUnits (OBR.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setStartDateTimeOffsetUnits($value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Duration (OBR.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setDuration($value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Duration Units (OBR.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setDurationUnits($value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Allow SubstitutionCode (OBR.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setAllowSubstitutionCode($value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Filler StatusCode (OBR.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setFillerStatusCode($value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (OBR.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Segment ActionCode (OBR.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getSegmentActionCode(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Location ResourceID (OBR.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getLocationResourceID(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Location TypeAIL (OBR.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getLocationTypeAIL(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Location Group (OBR.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getLocationGroup(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Start DateTime (OBR.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getStartDateTime(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Start DateTimeOffset (OBR.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getStartDateTimeOffset(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Start DateTimeOffsetUnits (OBR.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getStartDateTimeOffsetUnits(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Duration (OBR.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getDuration(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Duration Units (OBR.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getDurationUnits(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Allow SubstitutionCode (OBR.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getAllowSubstitutionCode(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler StatusCode (OBR.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getFillerStatusCode(int $position = 12)
    {
        return $this->getField($position);
    }
}
