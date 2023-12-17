<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * AIG segment class
 *
 * AIG: Appointment information - general resource segment
 * The AIG segment contains information about various kinds of resources (other than those with specifically defined
 * segments in this chapter) that can be scheduled. Resources included in a transaction using this segment are assumed
 * to be controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not
 * identified on a schedule request using this segment. Resources described by this segment are general kinds of
 * resources, such as equipment, that are identified with a simple identification code.

 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.3.1&segment=AIG
 */
class AIG extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('AIG', $fields);
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

    /**
     * Set ID (AIG.1)
     *
     * @param int $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setID(int $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Segment Action Code (AIG.2)
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
     * Set Resource ID (AIG.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setResourceID($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Resource Type (AIG.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setResourceType($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Resource Group (AIG.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setResourceGroup($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Resource Quantity (AIG.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setResourceQuantity($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Resource Quantity Units (AIG.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setResourceQuantityUnits($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start Date Time (AIG.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setStartDateTime($value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start Date Time Offset (AIG.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setStartDateTimeOffset($value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Start Date Time Offset Units (AIG.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setStartDateTimeOffsetUnits($value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Duration (AIG.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setDuration($value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Duration Units (AIG.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setDurationUnits($value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Allow Substitution Code (AIG.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setAllowSubstitutionCode($value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Filler Status Code (AIG.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setFillerStatusCode($value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (AIG.1)
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
     * Get Segment Action Code (AIG.2)
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
     * Get Resource ID (AIG.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getResourceID(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Resource Type (AIG.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getResourceType(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Resource Group (AIG.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getResourceGroup(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Resource Quantity (AIG.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getResourceQuantity(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Resource Quantity Units (AIG.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getResourceQuantityUnits(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Start Date Time (AIG.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getStartDateTime(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Start Date Time Offset (AIG.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getStartDateTimeOffset(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Start Date Time Offset Units (AIG.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getStartDateTimeOffsetUnits(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Duration (AIG.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getDuration(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Duration Units (AIG.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getDurationUnits(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Allow Substitution Code (AIG.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getAllowSubstitutionCode(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler Status Code (AIG.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getFillerStatusCode(int $position = 14)
    {
        return $this->getField($position);
    }
}
