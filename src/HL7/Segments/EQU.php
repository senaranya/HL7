<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * EQU segment class
 * Ref: https://www.interfaceware.com/hl7-standard/hl7-segment-EQU.html
 */
class EQU extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('EQU', $fields);
    }

    /**
     * Reset index of this segment
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setEquipmentInstanceIdentifier(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Event DateTime (OBR.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setEventDateTime($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Equipment State (OBR.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setEquipmentState($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Local RemoteControlState (OBR.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setLocalRemoteControlState($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Alert Level (OBR.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setAlertLevel($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get Equipment InstanceIdentifier (OBR.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getEquipmentInstanceIdentifier(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Event DateTime (OBR.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getEventDateTime(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Equipment State (OBR.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getEquipmentState(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Local RemoteControlState (OBR.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getLocalRemoteControlState(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Alert Level (OBR.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getAlertLevel(int $position = 4)
    {
        return $this->getField($position);
    }
}
