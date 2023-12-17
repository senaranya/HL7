<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * OBR segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obr-segment
 */
class OBR extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null, bool $autoIncrementIndices = true)
    {
        parent::__construct('OBR', $fields);
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
     * Set Placer Order Number (OBR.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setPlacerOrderNumber($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Filler Order Number (OBR.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setFillerOrderNumber($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Universal Service ID (OBR.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setUniversalServiceID($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Priority (OBR.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setPriority($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Requested Datetime (OBR.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setRequestedDatetime($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Observation Date Time (OBR.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setObservationDateTime($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Observation End Date Time (OBR.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setObservationEndDateTime($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Collection Volume (OBR.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setCollectionVolume($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Collector Identifier (OBR.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setCollectorIdentifier($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Specimen Action Code (OBR.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setSpecimenActionCode($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Danger Code (OBR.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setDangerCode($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Relevant Clinical Info (OBR.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setRelevantClinicalInfo($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Specimen Received Date Time (OBR.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setSpecimenReceivedDateTime($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Specimen Source (OBR.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setSpecimenSource($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Ordering Provider (OBR.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setOrderingProvider($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Order Callback Phone Number (OBR.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setOrderCallbackPhoneNumber($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerfield1($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerfield2($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setFillerField1($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setFillerField2($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * This field specifies the date/time when the results were reported or status changed. This field is used to
     * indicate the date and time that the results are composed into a report and released, or that a status, as
     * defined in ORC-5 order status, is entered or changed. (This is a results field only.) When other applications
     * (such as office or clinical database applications) query the laboratory application for untransmitted results,
     * the information in this field may be used to control processing on the communications link. Usually, the
     * ordering service would want only those results for which the reporting date/time is greater than the date/time
     * the inquiring application last received results.
     *
     * @return bool
     */
    /**
     * Set Results Rpt Status Chng Date Time (OBR.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setResultsRptStatusChngDateTime($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Chargeto Practice (OBR.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setChargetoPractice($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Diagnostic Serv Sect ID (OBR.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setDiagnosticServSectID($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Result Status (OBR.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setResultStatus($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Parent Result (OBR.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setParentResult($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Quantity Timing (OBR.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setQuantityTiming($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Result Copies To (OBR.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setResultCopiesTo($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Parent (OBR.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setParent($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Transportation Mode (OBR.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setTransportationMode($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Reasonfor Study (OBR.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setReasonforStudy($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Principal Result Interpreter (OBR.32)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 32
     *
     * @return bool
     *
     */
    public function setPrincipalResultInterpreter($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Assistant Result Interpreter (OBR.33)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 33
     *
     * @return bool
     *
     */
    public function setAssistantResultInterpreter($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Technician (OBR.34)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 34
     *
     * @return bool
     *
     */
    public function setTechnician($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Transcriptionist (OBR.35)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 35
     *
     * @return bool
     *
     */
    public function setTranscriptionist($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Scheduled Date Time (OBR.36)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 36
     *
     * @return bool
     *
     */
    public function setScheduledDateTime($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Numberof Sample Containers (OBR.37)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 37
     *
     * @return bool
     *
     */
    public function setNumberofSampleContainers($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Transport Logisticsof Collected Sample (OBR.38)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 38
     *
     * @return bool
     *
     */
    public function setTransportLogisticsofCollectedSample($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Collectors Comment (OBR.39)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 39
     *
     * @return bool
     *
     */
    public function setCollectorsComment($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Transport Arrangement Responsibility (OBR.40)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 40
     *
     * @return bool
     *
     */
    public function setTransportArrangementResponsibility($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Transport Arranged (OBR.41)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 41
     *
     * @return bool
     *
     */
    public function setTransportArranged($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Escort Required (OBR.42)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 42
     *
     * @return bool
     *
     */
    public function setEscortRequired($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Planned Patient Transport Comment (OBR.43)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 43
     *
     * @return bool
     *
     */
    public function setPlannedPatientTransportComment($value, int $position = 43)
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
     * Get Placer OrderNumber (OBR.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getPlacerOrderNumber(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Filler OrderNumber (OBR.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getFillerOrderNumber(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Universal ServiceID (OBR.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getUniversalServiceID(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Priority (OBR.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getPriority(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Requested Datetime (OBR.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getRequestedDatetime(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Observation DateTime (OBR.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getObservationDateTime(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Observation EndDateTime (OBR.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getObservationEndDateTime(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Collection Volume (OBR.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getCollectionVolume(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Collector Identifier (OBR.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getCollectorIdentifier(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Specimen ActionCode (OBR.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getSpecimenActionCode(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Danger Code (OBR.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getDangerCode(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Relevant ClinicalInfo (OBR.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getRelevantClinicalInfo(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Specimen ReceivedDateTime (OBR.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getSpecimenReceivedDateTime(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Specimen Source (OBR.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getSpecimenSource(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Ordering Provider (OBR.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getOrderingProvider(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Order CallbackPhoneNumber (OBR.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getOrderCallbackPhoneNumber(int $position = 17)
    {
        return $this->getField($position);
    }

    public function getPlacerfield1(int $position = 18)
    {
        return $this->getField($position);
    }

    public function getPlacerfield2(int $position = 19)
    {
        return $this->getField($position);
    }

    public function getFillerField1(int $position = 20)
    {
        return $this->getField($position);
    }

    public function getFillerField2(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Results RptStatusChngDateTime (OBR.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getResultsRptStatusChngDateTime(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Chargeto Practice (OBR.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getChargetoPractice(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Diagnostic ServSectID (OBR.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getDiagnosticServSectID(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Result Status (OBR.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getResultStatus(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Parent Result (OBR.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getParentResult(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Quantity Timing (OBR.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getQuantityTiming(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Result CopiesTo (OBR.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getResultCopiesTo(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Parent (OBR.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getParent(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Transportation Mode (OBR.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getTransportationMode(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Reasonfor Study (OBR.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getReasonforStudy(int $position = 31)
    {
        return $this->getField($position);
    }

    /**
     * Get Principal ResultInterpreter (OBR.32)
     *
     * @param int $position Defaults to 32
     *
     * @return array|string|int|null
     *
     */
    public function getPrincipalResultInterpreter(int $position = 32)
    {
        return $this->getField($position);
    }

    /**
     * Get Assistant ResultInterpreter (OBR.33)
     *
     * @param int $position Defaults to 33
     *
     * @return array|string|int|null
     *
     */
    public function getAssistantResultInterpreter(int $position = 33)
    {
        return $this->getField($position);
    }

    /**
     * Get Technician (OBR.34)
     *
     * @param int $position Defaults to 34
     *
     * @return array|string|int|null
     *
     */
    public function getTechnician(int $position = 34)
    {
        return $this->getField($position);
    }

    /**
     * Get Transcriptionist (OBR.35)
     *
     * @param int $position Defaults to 35
     *
     * @return array|string|int|null
     *
     */
    public function getTranscriptionist(int $position = 35)
    {
        return $this->getField($position);
    }

    /**
     * Get Scheduled DateTime (OBR.36)
     *
     * @param int $position Defaults to 36
     *
     * @return array|string|int|null
     *
     */
    public function getScheduledDateTime(int $position = 36)
    {
        return $this->getField($position);
    }

    /**
     * Get Numberof SampleContainers (OBR.37)
     *
     * @param int $position Defaults to 37
     *
     * @return array|string|int|null
     *
     */
    public function getNumberofSampleContainers(int $position = 37)
    {
        return $this->getField($position);
    }

    /**
     * Get Transport LogisticsofCollectedSample (OBR.38)
     *
     * @param int $position Defaults to 38
     *
     * @return array|string|int|null
     *
     */
    public function getTransportLogisticsofCollectedSample(int $position = 38)
    {
        return $this->getField($position);
    }

    /**
     * Get Collectors Comment (OBR.39)
     *
     * @param int $position Defaults to 39
     *
     * @return array|string|int|null
     *
     */
    public function getCollectorsComment(int $position = 39)
    {
        return $this->getField($position);
    }

    /**
     * Get Transport ArrangementResponsibility (OBR.40)
     *
     * @param int $position Defaults to 40
     *
     * @return array|string|int|null
     *
     */
    public function getTransportArrangementResponsibility(int $position = 40)
    {
        return $this->getField($position);
    }

    /**
     * Get Transport Arranged (OBR.41)
     *
     * @param int $position Defaults to 41
     *
     * @return array|string|int|null
     *
     */
    public function getTransportArranged(int $position = 41)
    {
        return $this->getField($position);
    }

    /**
     * Get Escort Required (OBR.42)
     *
     * @param int $position Defaults to 42
     *
     * @return array|string|int|null
     *
     */
    public function getEscortRequired(int $position = 42)
    {
        return $this->getField($position);
    }

    /**
     * Get Planned PatientTransportComment (OBR.43)
     *
     * @param int $position Defaults to 43
     *
     * @return array|string|int|null
     *
     */
    public function getPlannedPatientTransportComment(int $position = 43)
    {
        return $this->getField($position);
    }
}
