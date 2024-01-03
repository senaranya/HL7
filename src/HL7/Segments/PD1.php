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

    public function setLivingDependency($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setLivingArrangement($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setPatientPrimaryFacility($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setPatientPrimaryCareProviderNameAndIDNo($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setStudentIndicator($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setHandicap($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setLivingWillCode($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    public function setOrganDonorCode($value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setSeparateBill($value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function setDuplicatePatient($value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    public function setPublicityCode($value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    public function setProtectionIndicator($value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    public function setProtectionIndicatorEffectiveDate($value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    public function setPlaceOfWorship($value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    public function setAdvanceDirectiveCode($value, int $position = 15): bool
    {
        return $this->setField($position, $value);
    }

    public function setImmunizationRegistryStatus($value, int $position = 16): bool
    {
        return $this->setField($position, $value);
    }

    public function setImmunizationRegistryStatusEffectiveDate($value, int $position = 17): bool
    {
        return $this->setField($position, $value);
    }

    public function setPublicityCodeEffectiveDate($value, int $position = 18): bool
    {
        return $this->setField($position, $value);
    }

    public function setMilitaryBranch($value, int $position = 19): bool
    {
        return $this->setField($position, $value);
    }

    public function setMilitaryRankGrade($value, int $position = 20): bool
    {
        return $this->setField($position, $value);
    }

    public function setMilitaryStatus($value, int $position = 21): bool
    {
        return $this->setField($position, $value);
    }

    public function getLivingDependency(int $position = 1): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getLivingArrangement(int $position = 2): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getPatientPrimaryFacility(int $position = 3): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getPatientPrimaryCareProviderNameAndIDNo(int $position = 4): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getStudentIndicator(int $position = 5): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getHandicap(int $position = 6): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getLivingWillCode(int $position = 7): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getOrganDonorCode(int $position = 8): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getSeparateBill(int $position = 9): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getDuplicatePatient(int $position = 10): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getPublicityCode(int $position = 11): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getProtectionIndicator(int $position = 12): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getProtectionIndicatorEffectiveDate(int $position = 13): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getPlaceOfWorship(int $position = 14): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getAdvanceDirectiveCode(int $position = 15): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getImmunizationRegistryStatus(int $position = 16): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getImmunizationRegistryStatusEffectiveDate(int $position = 17): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getPublicityCodeEffectiveDate(int $position = 18): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getMilitaryBranch(int $position = 19): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getMilitaryRankGrade(int $position = 20): int|array|string|null
    {
        return $this->getField($position);
    }

    public function getMilitaryStatus(int $position = 21): int|array|string|null
    {
        return $this->getField($position);
    }
}
