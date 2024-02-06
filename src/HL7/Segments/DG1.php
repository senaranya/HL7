<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * DG1 segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/DG1
 */
class DG1 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     */
    protected static int $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('DG1', $fields);
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

    /**
     * Set ID (DG1.1)
     *
     * @param int $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosis Coding Method (DG1.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setDiagnosisCodingMethod($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosisCodeDG1($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosis Description (DG1.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setDiagnosisDescription($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosis Date Time (DG1.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setDiagnosisDateTime($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosis Type (DG1.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setDiagnosisType($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Major Diagnostic Category (DG1.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setMajorDiagnosticCategory($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnostic Related Group (DG1.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setDiagnosticRelatedGroup($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set DRGApproval Indicator (DG1.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setDRGApprovalIndicator($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set DRGGrouper Review Code (DG1.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setDRGGrouperReviewCode($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Outlier Type (DG1.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setOutlierType($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Outlier Days (DG1.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setOutlierDays($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Outlier Cost (DG1.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setOutlierCost($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Grouper Version And Type (DG1.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setGrouperVersionAndType($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosis Priority (DG1.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setDiagnosisPriority($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosing Clinician (DG1.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setDiagnosingClinician($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosis Classification (DG1.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setDiagnosisClassification($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Confidential Indicator (DG1.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setConfidentialIndicator($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Attestation Date Time (DG1.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setAttestationDateTime($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (DG1.1)
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
     * Get Diagnosis Coding Method (DG1.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosisCodingMethod(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosis Code DG1 (DG1.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosisCodeDG1(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosis Description (DG1.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosisDescription(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosis Date Time (DG1.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosisDateTime(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosis Type (DG1.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosisType(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Major Diagnostic Category (DG1.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getMajorDiagnosticCategory(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnostic Related Group (DG1.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosticRelatedGroup(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get DRGApproval Indicator (DG1.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getDRGApprovalIndicator(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get DRGGrouper Review Code (DG1.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getDRGGrouperReviewCode(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Outlier Type (DG1.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getOutlierType(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Outlier Days (DG1.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getOutlierDays(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Outlier Cost (DG1.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getOutlierCost(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Grouper Version And Type (DG1.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getGrouperVersionAndType(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosis Priority (DG1.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosisPriority(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosing Clinician (DG1.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosingClinician(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosis Classification (DG1.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosisClassification(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Confidential Indicator (DG1.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getConfidentialIndicator(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Attestation Date Time (DG1.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getAttestationDateTime(int $position = 19)
    {
        return $this->getField($position);
    }
}
