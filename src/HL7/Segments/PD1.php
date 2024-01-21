<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * The patient additional demographic segment contains demographic information that is likely
 * to change about the patient.
 *
 * @link https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/PD1
 */
class PD1 extends Segment
{
    public function __construct(?array $fields = null)
    {
        parent::__construct('PD1', $fields);
    }

    public function setLivingDependency(string|null $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setLivingArrangement(string|null $value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setPatientPrimaryFacility(array|null $value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setPatientPrimaryCareProviderNameAndIDNo(array|null $value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setStudentIndicator(string|null $value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setHandicap(string|null $value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setLivingWillCode(string|null $value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    public function setOrganDonorCode(string|null $value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setSeparateBill(string|null $value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function setDuplicatePatient(array|null $value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    public function setPublicityCode(array|null $value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    public function setProtectionIndicator(string|null $value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    public function setProtectionIndicatorEffectiveDate(string|null $value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    public function setPlaceOfWorship(array|null $value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdvanceDirectiveCode(array|null $value, int $position = 15): bool
    {
        return $this->setField($position, $value);
    }

    public function setImmunizationRegistryStatus(string|null $value, int $position = 16): bool
    {
        return $this->setField($position, $value);
    }

    public function setImmunizationRegistryStatusEffectiveDate(string|null $value, int $position = 17): bool
    {
        return $this->setField($position, $value);
    }

    public function setPublicityCodeEffectiveDate(string|null $value, int $position = 18): bool
    {
        return $this->setField($position, $value);
    }

    public function setMilitaryBranch(string|null $value, int $position = 19): bool
    {
        return $this->setField($position, $value);
    }

    public function setMilitaryRankGrade(string|null $value, int $position = 20): bool
    {
        return $this->setField($position, $value);
    }

    public function setMilitaryStatus(string|null $value, int $position = 21): bool
    {
        return $this->setField($position, $value);
    }

    public function getLivingDependency(int $position = 1): string|null
    {
        return $this->getField($position);
    }

    public function getLivingArrangement(int $position = 2): string|null
    {
        return $this->getField($position);
    }

    public function getPatientPrimaryFacility(int $position = 3): array|null
    {
        return $this->getField($position);
    }

    public function getPatientPrimaryCareProviderNameAndIDNo(int $position = 4): array|null
    {
        return $this->getField($position);
    }

    public function getStudentIndicator(int $position = 5): string|null
    {
        return $this->getField($position);
    }

    public function getHandicap(int $position = 6): string|null
    {
        return $this->getField($position);
    }

    public function getLivingWillCode(int $position = 7): string|null
    {
        return $this->getField($position);
    }

    public function getOrganDonorCode(int $position = 8): string|null
    {
        return $this->getField($position);
    }

    public function getSeparateBill(int $position = 9): string|null
    {
        return $this->getField($position);
    }

    public function getDuplicatePatient(int $position = 10): array|null
    {
        return $this->getField($position);
    }

    public function getPublicityCode(int $position = 11): array|null
    {
        return $this->getField($position);
    }

    public function getProtectionIndicator(int $position = 12): string|null
    {
        return $this->getField($position);
    }

    public function getProtectionIndicatorEffectiveDate(int $position = 13): string|null
    {
        return $this->getField($position);
    }

    public function getPlaceOfWorship(int $position = 14): array|null
    {
        return $this->getField($position);
    }

    public function getAdvanceDirectiveCode(int $position = 15): array|null
    {
        return $this->getField($position);
    }

    public function getImmunizationRegistryStatus(int $position = 16): string|null
    {
        return $this->getField($position);
    }

    public function getImmunizationRegistryStatusEffectiveDate(int $position = 17): string|null
    {
        return $this->getField($position);
    }

    public function getPublicityCodeEffectiveDate(int $position = 18): string|null
    {
        return $this->getField($position);
    }

    public function getMilitaryBranch(int $position = 19): string|null
    {
        return $this->getField($position);
    }

    public function getMilitaryRankGrade(int $position = 20): string|null
    {
        return $this->getField($position);
    }

    public function getMilitaryStatus(int $position = 21): string|null
    {
        return $this->getField($position);
    }
}
