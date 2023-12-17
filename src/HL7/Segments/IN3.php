<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * IN3 segment class
 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=ORC
 */
class IN3 extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('IN3', $fields);
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
     * Set Certification Number (IN3.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setCertificationNumber($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certified By (IN3.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setCertifiedBy($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Required (IN3.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setCertificationRequired($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Penalty (IN3.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setPenalty($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Date Time (IN3.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setCertificationDateTime($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Modify Date Time (IN3.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setCertificationModifyDateTime($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Operator (IN3.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setOperator($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Begin Date (IN3.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setCertificationBeginDate($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification End Date (IN3.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setCertificationEndDate($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Days (IN3.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setDays($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Non Concur Code Description (IN3.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setNonConcurCodeDescription($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Non Concur Effective Date Time (IN3.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setNonConcurEffectiveDateTime($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Physician Reviewer (IN3.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setPhysicianReviewer($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Contact (IN3.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setCertificationContact($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Contact Phone Number (IN3.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setCertificationContactPhoneNumber($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Appeal Reason (IN3.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setAppealReason($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Agency (IN3.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setCertificationAgency($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Certification Agency Phone Number (IN3.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setCertificationAgencyPhoneNumber($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Pre Certification Requirement (IN3.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setPreCertificationRequirement($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Case Manager (IN3.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setCaseManager($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Second Opinion Date (IN3.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setSecondOpinionDate($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Second Opinion Status (IN3.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setSecondOpinionStatus($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Second Opinion Documentation Received (IN3.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setSecondOpinionDocumentationReceived($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Second Opinion Physician (IN3.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setSecondOpinionPhysician($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get ID (IN3.1)
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
     * Get Certification Number (IN3.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationNumber(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Certified By (IN3.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getCertifiedBy(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification Required (IN3.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationRequired(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Penalty (IN3.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getPenalty(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification DateTime (IN3.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationDateTime(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification ModifyDateTime (IN3.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationModifyDateTime(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Operator (IN3.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getOperator(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification BeginDate (IN3.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationBeginDate(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification EndDate (IN3.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationEndDate(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Days (IN3.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getDays(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Non ConcurCodeDescription (IN3.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getNonConcurCodeDescription(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Non ConcurEffectiveDateTime (IN3.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getNonConcurEffectiveDateTime(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Physician Reviewer (IN3.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getPhysicianReviewer(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification Contact (IN3.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationContact(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification ContactPhoneNumber (IN3.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationContactPhoneNumber(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Appeal Reason (IN3.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getAppealReason(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification Agency (IN3.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationAgency(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Certification AgencyPhoneNumber (IN3.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getCertificationAgencyPhoneNumber(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Pre CertificationRequirement (IN3.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getPreCertificationRequirement(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Case Manager (IN3.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getCaseManager(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Second OpinionDate (IN3.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getSecondOpinionDate(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Second OpinionStatus (IN3.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getSecondOpinionStatus(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Second OpinionDocumentationReceived (IN3.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getSecondOpinionDocumentationReceived(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Second OpinionPhysician (IN3.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getSecondOpinionPhysician(int $position = 25)
    {
        return $this->getField($position);
    }
}
