<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * The Pharmacy/Treatment Route segment contains the alternative combination of route, site, administration device,
 * and administration method that are prescribed as they apply to a particular order. The pharmacy, treatment
 * staff and/or nursing staff has a choice between the routes based on either their professional judgment
 * or administration instructions provided by the physician.
 *
 * @link https://hl7-definition.caristix.com/v2/HL7v2.8/Segments/RXR
 */
class RXR extends Segment
{
    public function __construct(?array $fields = null)
    {
        parent::__construct('RXR', $fields);
    }

    public function setRoute(array $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministrationSite(array $value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministrationDevice(array $value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministrationMethod(array $value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setRoutingInstruction(array $value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministrationSiteModifier(array $value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function getRoute(int $position = 1): array
    {
        return $this->getField($position);
    }

    public function getAdministrationSite(int $position = 2): array|null
    {
        return $this->getField($position);
    }

    public function getAdministrationDevice(int $position = 3): array|null
    {
        return $this->getField($position);
    }

    public function getAdministrationMethod(int $position = 4): array|null
    {
        return $this->getField($position);
    }

    public function getRoutingInstruction(int $position = 5): array|null
    {
        return $this->getField($position);
    }

    public function getAdministrationSiteModifier(int $position = 6): array|null
    {
        return $this->getField($position);
    }
}
