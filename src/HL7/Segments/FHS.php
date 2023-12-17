<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * FHS: File Header Segment
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.3/Segments/FHS
 */
class FHS extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('FHS', $fields);
    }

    /**
     * Set File Field Separator (FHS.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setFileFieldSeparator($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Encoding Characters (FHS.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setFileEncodingCharacters($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Sending Application (FHS.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setFileSendingApplication($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Sending Facility (FHS.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setFileSendingFacility($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Recieving Application (FHS.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setFileRecievingApplication($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Recieving Facility (FHS.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setFileRecievingFacility($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Creation Date Time (FHS.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setFileCreationDateTime($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Security (FHS.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setFileSecurity($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Name Id (FHS.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setFileNameId($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Header Comment (FHS.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setFileHeaderComment($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Control Id (FHS.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setFileControlId($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Reference File Control Id (FHS.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setReferenceFileControlId($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    /**
     * Get File FieldSeparator (FHS.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getFileFieldSeparator(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get File EncodingCharacters (FHS.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getFileEncodingCharacters(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get File SendingApplication (FHS.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getFileSendingApplication(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get File SendingFacility (FHS.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getFileSendingFacility(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get File RecievingApplication (FHS.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getFileRecievingApplication(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get File RecievingFacility (FHS.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getFileRecievingFacility(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get File CreationDateTime (FHS.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getFileCreationDateTime(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get File Security (FHS.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getFileSecurity(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get File NameId (FHS.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getFileNameId(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get File HeaderComment (FHS.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getFileHeaderComment(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get File ControlId (FHS.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getFileControlId(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Reference FileControlId (FHS.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getReferenceFileControlId(int $position = 12)
    {
        return $this->getField($position);
    }
}
