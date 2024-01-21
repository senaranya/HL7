<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * The ORC must have the filler order number and the order control code RE. As a site-specific variant,
 * the RXO and associated RXCs and/or the RXE (and associated RXCs) may be present if the receiving
 * application needs any of their data. The RXA carries the administration data.
 *
 * @link https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/RXA
 */
class RXA extends Segment
{
    public function __construct(?array $fields = null)
    {
        parent::__construct('RXA', $fields);
    }

    public function setGiveSubIdCounter(int $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministrationSubIdCounter(int $value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeStartAdministration(string|array $value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setDateTimeEndAdministration(string|array $value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredCode(array $value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredAmount(string $value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredUnits(array|null $value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredDosageForm(array|null $value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministrationNotes(array|null $value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeringProvider(array|null $value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredAtLocation(array|null $value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredPerTimeUnit(string|null $value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredStrength(string|null $value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredStrengthUnits(array|null $value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    public function setSubstanceLotNumber(string|null $value, int $position = 15): bool
    {
        return $this->setField($position, $value);
    }

    public function setSubstanceExpirationDate(string|array|null $value, int $position = 16): bool
    {
        return $this->setField($position, $value);
    }

    public function setSubstanceManufacturerName(array|null $value, int $position = 17): bool
    {
        return $this->setField($position, $value);
    }

    public function setSubstanceTreatmentRefusalReason(array|null $value, int $position = 18): bool
    {
        return $this->setField($position, $value);
    }

    public function setIndication(array|null $value, int $position = 19): bool
    {
        return $this->setField($position, $value);
    }

    public function setCompletionStatus(string|null $value, int $position = 20): bool
    {
        return $this->setField($position, $value);
    }

    public function setActionCode(string|null $value, int $position = 21): bool
    {
        return $this->setField($position, $value);
    }

    public function setSystemEntryDateTime(string|array|null $value, int $position = 22): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredDrugStrengthVolume(string|null $value, int $position = 23): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredDrugStrengthVolumeUnits(array|null $value, int $position = 24): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdministeredBarcodeIdentifier(array|null $value, int $position = 25): bool
    {
        return $this->setField($position, $value);
    }

    public function setPharmacyOrderType(string|null $value, int $position = 26): bool
    {
        return $this->setField($position, $value);
    }

    public function getGiveSubIdCounter(int $position = 1): int
    {
        return $this->getField($position);
    }

    public function getAdministrationSubIdCounter(int $position = 2): int
    {
        return $this->getField($position);
    }

    public function getDateTimeStartAdministration(int $position = 3): string|array
    {
        return $this->getField($position);
    }

    public function getDateTimeEndAdministration(int $position = 4): string|array
    {
        return $this->getField($position);
    }

    public function getAdministeredCode(int $position = 5): array
    {
        return $this->getField($position);
    }

    public function getAdministeredAmount(int $position = 6): string
    {
        return $this->getField($position);
    }

    public function getAdministeredUnits(int $position = 7): array|null
    {
        return $this->getField($position);
    }

    public function getAdministeredDosageForm(int $position = 8): array|null
    {
        return $this->getField($position);
    }

    public function getAdministrationNotes(int $position = 9): array|null
    {
        return $this->getField($position);
    }

    public function getAdministeringProvider(int $position = 10): array|null
    {
        return $this->getField($position);
    }

    public function getAdministeredAtLocation(int $position = 11): array|null
    {
        return $this->getField($position);
    }

    public function getAdministeredPerTimeUnit(int $position = 12): string|null
    {
        return $this->getField($position);
    }

    public function getAdministeredStrength(int $position = 13): string|null
    {
        return $this->getField($position);
    }

    public function getAdministeredStrengthUnits(int $position = 14): array|null
    {
        return $this->getField($position);
    }

    public function getSubstanceLotNumber(int $position = 15): string|null
    {
        return $this->getField($position);
    }

    public function getSubstanceExpirationDate(int $position = 16): string|array|null
    {
        return $this->getField($position);
    }

    public function getSubstanceManufacturerName(int $position = 17): array|null
    {
        return $this->getField($position);
    }

    public function getSubstanceTreatmentRefusalReason(int $position = 18): array|null
    {
        return $this->getField($position);
    }

    public function getIndication(int $position = 19): array|null
    {
        return $this->getField($position);
    }

    public function getCompletionStatus(int $position = 20): string|null
    {
        return $this->getField($position);
    }

    public function getActionCode(int $position = 21): string|null
    {
        return $this->getField($position);
    }

    public function getSystemEntryDateTime(int $position = 22): string|array|null
    {
        return $this->getField($position);
    }

    public function getAdministeredDrugStrengthVolume(int $position = 23): string|null
    {
        return $this->getField($position);
    }

    public function getAdministeredDrugStrengthVolumeUnits(int $position = 24): array|null
    {
        return $this->getField($position);
    }

    public function getAdministeredBarcodeIdentifier(int $position = 25): array|null
    {
        return $this->getField($position);
    }

    public function getPharmacyOrderType(int $position = 26): string|null
    {
        return $this->getField($position);
    }
}
