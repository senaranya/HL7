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

    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnosis CodingMethod (OBR.2)
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
     * Set Diagnosis Description (OBR.4)
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
     * Set Diagnosis DateTime (OBR.5)
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
     * Set Diagnosis Type (OBR.6)
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
     * Set Major DiagnosticCategory (OBR.7)
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
     * Set Diagnostic RelatedGroup (OBR.8)
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
     * Set DRGApproval Indicator (OBR.9)
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
     * Set DRGGrouper ReviewCode (OBR.10)
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
     * Set Outlier Type (OBR.11)
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
     * Set Outlier Days (OBR.12)
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
     * Set Outlier Cost (OBR.13)
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
     * Set Grouper VersionAndType (OBR.14)
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
     * Set Diagnosis Priority (OBR.15)
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
     * Set Diagnosing Clinician (OBR.16)
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
     * Set Diagnosis Classification (OBR.17)
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
     * Set Confidential Indicator (OBR.18)
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
     * Set Attestation DateTime (OBR.19)
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
     * Get Diagnosis CodingMethod (OBR.2)
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

    public function getDiagnosisCodeDG1(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnosis Description (OBR.4)
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
     * Get Diagnosis DateTime (OBR.5)
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
     * Get Diagnosis Type (OBR.6)
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
     * Get Major DiagnosticCategory (OBR.7)
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
     * Get Diagnostic RelatedGroup (OBR.8)
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
     * Get DRGApproval Indicator (OBR.9)
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
     * Get DRGGrouper ReviewCode (OBR.10)
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
     * Get Outlier Type (OBR.11)
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
     * Get Outlier Days (OBR.12)
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
     * Get Outlier Cost (OBR.13)
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
     * Get Grouper VersionAndType (OBR.14)
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
     * Get Diagnosis Priority (OBR.15)
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
     * Get Diagnosing Clinician (OBR.16)
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
     * Get Diagnosis Classification (OBR.17)
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
     * Get Confidential Indicator (OBR.18)
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
     * Get Attestation DateTime (OBR.19)
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
