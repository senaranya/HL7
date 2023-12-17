<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * MRG segment class
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/MRG
 */
class MRG extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('MRG', $fields);
    }

    /**
     * Set Prior Patient Identifier List (MRG.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setPriorPatientIdentifierList($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Prior Alternate Patient ID (MRG.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setPriorAlternatePatientID($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Prior Patient Account Number (MRG.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setPriorPatientAccountNumber($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Prior Patient ID (MRG.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setPriorPatientID($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Prior Visit Number (MRG.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setPriorVisitNumber($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Prior Alternate Visit ID (MRG.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setPriorAlternateVisitID($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Prior Patient Name (MRG.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setPriorPatientName($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    /**
     * Get Prior PatientIdentifierList (MRG.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getPriorPatientIdentifierList(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior AlternatePatientID (MRG.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getPriorAlternatePatientID(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior PatientAccountNumber (MRG.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getPriorPatientAccountNumber(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior PatientID (MRG.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getPriorPatientID(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior VisitNumber (MRG.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getPriorVisitNumber(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior AlternateVisitID (MRG.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getPriorAlternateVisitID(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Prior PatientName (MRG.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getPriorPatientName(int $position = 7)
    {
        return $this->getField($position);
    }
}
