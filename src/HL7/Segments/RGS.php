<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * RGS segment class
 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=RGS
 */
class RGS extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     */
    protected static int $setId = 1;

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
     * Set Segment Action Code (RGS.2)
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
     * Set Resource Group ID (RGS.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setResourceGroupID($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (RGS.1)
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
     * Get Segment ActionCode (RGS.2)
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
     * Get Resource GroupID (RGS.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getResourceGroupID(int $position = 3)
    {
        return $this->getField($position);
    }
}
