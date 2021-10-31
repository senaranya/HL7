<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * APR segment class
 *
 * APR - Appointment Preferences
 * The APR segment contains parameters and preference specifications used for requesting appointments
 * in the SRM message.
 * It allows placer applications to provide coded parameters and preference indicators to the filler application,
 * to help determine when a requested appointment should be scheduled. An APR segment can be provided in conjunction
 * with either the ARQ segment or any of the service and resource segments (AIG, AIS, AIP, and AIL).
 * If an APR segment appears in conjunction with an ARQ segment, its parameters and preference indicators pertain
 * to the schedule request as a whole. If the APR segment appears with any of the service and resource segments,
 * then its parameters and preferences apply only to the immediately preceding service or resource.
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/APR
 */
class APR extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('APR', $fields);
    }

    public function setTimeSelectionCriteria($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setResourceSelectionCriteria($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setLocationSelectionCriteria($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setSlotSpacingCriteria($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setFillerOverrideCriteria($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }



    public function getTimeSelectionCriteria(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getResourceSelectionCriteria(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getLocationSelectionCriteria(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getSlotSpacingCriteria(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getFillerOverrideCriteria(int $position = 5)
    {
        return $this->getField($position);
    }
}
