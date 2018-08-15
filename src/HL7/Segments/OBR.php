<?php

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

    public function __construct(array $fields = null)
    {
        parent::__construct('OBR', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerOrderNumber($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setFillerOrderNumber($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setUniversalServiceID($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function setPriority($value, $position = 5)
    {
        return $this->setField($position, $value);
    }

    public function setRequestedDatetime($value, $position = 6)
    {
        return $this->setField($position, $value);
    }

    public function setObservationDateTime($value, $position = 7)
    {
        return $this->setField($position, $value);
    }

    public function setObservationEndDateTime($value, $position = 8)
    {
        return $this->setField($position, $value);
    }

    public function setCollectionVolume($value, $position = 9)
    {
        return $this->setField($position, $value);
    }

    public function setCollectorIdentifier($value, $position = 10)
    {
        return $this->setField($position, $value);
    }

    public function setSpecimenActionCode($value, $position = 11)
    {
        return $this->setField($position, $value);
    }

    public function setDangerCode($value, $position = 12)
    {
        return $this->setField($position, $value);
    }

    public function setRelevantClinicalInfo($value, $position = 13)
    {
        return $this->setField($position, $value);
    }

    public function setSpecimenReceivedDateTime($value, $position = 14)
    {
        return $this->setField($position, $value);
    }

    public function setSpecimenSource($value, $position = 15)
    {
        return $this->setField($position, $value);
    }

    public function setOrderingProvider($value, $position = 16)
    {
        return $this->setField($position, $value);
    }

    public function setOrderCallbackPhoneNumber($value, $position = 17)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerfield1($value, $position = 18)
    {
        return $this->setField($position, $value);
    }

    public function setPlacerfield2($value, $position = 19)
    {
        return $this->setField($position, $value);
    }

    public function setFillerField1($value, $position = 20)
    {
        return $this->setField($position, $value);
    }

    public function setFillerField2($value, $position = 21)
    {
        return $this->setField($position, $value);
    }

    public function setResultsRptStatusChngDateTime($value, $position = 22)
    {
        return $this->setField($position, $value);
    }

    public function setChargetoPractice($value, $position = 23)
    {
        return $this->setField($position, $value);
    }

    public function setDiagnosticServSectID($value, $position = 24)
    {
        return $this->setField($position, $value);
    }

    public function setResultStatus($value, $position = 25)
    {
        return $this->setField($position, $value);
    }

    public function setParentResult($value, $position = 26)
    {
        return $this->setField($position, $value);
    }

    public function setQuantityTiming($value, $position = 27)
    {
        return $this->setField($position, $value);
    }

    public function setResultCopiesTo($value, $position = 28)
    {
        return $this->setField($position, $value);
    }

    public function setParent($value, $position = 29)
    {
        return $this->setField($position, $value);
    }

    public function setTransportationMode($value, $position = 30)
    {
        return $this->setField($position, $value);
    }

    public function setReasonforStudy($value, $position = 31)
    {
        return $this->setField($position, $value);
    }

    public function setPrincipalResultInterpreter($value, $position = 32)
    {
        return $this->setField($position, $value);
    }

    public function setAssistantResultInterpreter($value, $position = 33)
    {
        return $this->setField($position, $value);
    }

    public function setTechnician($value, $position = 34)
    {
        return $this->setField($position, $value);
    }

    public function setTranscriptionist($value, $position = 35)
    {
        return $this->setField($position, $value);
    }

    public function setScheduledDateTime($value, $position = 36)
    {
        return $this->setField($position, $value);
    }

    public function setNumberofSampleContainers($value, $position = 37)
    {
        return $this->setField($position, $value);
    }

    public function setTransportLogisticsofCollectedSample($value, $position = 38)
    {
        return $this->setField($position, $value);
    }

    public function setCollectorsComment($value, $position = 39)
    {
        return $this->setField($position, $value);
    }

    public function setTransportArrangementResponsibility($value, $position = 40)
    {
        return $this->setField($position, $value);
    }

    public function setTransportArranged($value, $position = 41)
    {
        return $this->setField($position, $value);
    }

    public function setEscortRequired($value, $position = 42)
    {
        return $this->setField($position, $value);
    }

    public function setPlannedPatientTransportComment($value, $position = 43)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getPlacerOrderNumber($position = 2)
    {
        return $this->getField($position);
    }

    public function getFillerOrderNumber($position = 3)
    {
        return $this->getField($position);
    }

    public function getUniversalServiceID($position = 4)
    {
        return $this->getField($position);
    }

    public function getPriority($position = 5)
    {
        return $this->getField($position);
    }

    public function getRequestedDatetime($position = 6)
    {
        return $this->getField($position);
    }

    public function getObservationDateTime($position = 7)
    {
        return $this->getField($position);
    }

    public function getObservationEndDateTime($position = 8)
    {
        return $this->getField($position);
    }

    public function getCollectionVolume($position = 9)
    {
        return $this->getField($position);
    }

    public function getCollectorIdentifier($position = 10)
    {
        return $this->getField($position);
    }

    public function getSpecimenActionCode($position = 11)
    {
        return $this->getField($position);
    }

    public function getDangerCode($position = 12)
    {
        return $this->getField($position);
    }

    public function getRelevantClinicalInfo($position = 13)
    {
        return $this->getField($position);
    }

    public function getSpecimenReceivedDateTime($position = 14)
    {
        return $this->getField($position);
    }

    public function getSpecimenSource($position = 15)
    {
        return $this->getField($position);
    }

    public function getOrderingProvider($position = 16)
    {
        return $this->getField($position);
    }

    public function getOrderCallbackPhoneNumber($position = 17)
    {
        return $this->getField($position);
    }

    public function getPlacerfield1($position = 18)
    {
        return $this->getField($position);
    }

    public function getPlacerfield2($position = 19)
    {
        return $this->getField($position);
    }

    public function getFillerField1($position = 20)
    {
        return $this->getField($position);
    }

    public function getFillerField2($position = 21)
    {
        return $this->getField($position);
    }

    public function getResultsRptStatusChngDateTime($position = 22)
    {
        return $this->getField($position);
    }

    public function getChargetoPractice($position = 23)
    {
        return $this->getField($position);
    }

    public function getDiagnosticServSectID($position = 24)
    {
        return $this->getField($position);
    }

    public function getResultStatus($position = 25)
    {
        return $this->getField($position);
    }

    public function getParentResult($position = 26)
    {
        return $this->getField($position);
    }

    public function getQuantityTiming($position = 27)
    {
        return $this->getField($position);
    }

    public function getResultCopiesTo($position = 28)
    {
        return $this->getField($position);
    }

    public function getParent($position = 29)
    {
        return $this->getField($position);
    }

    public function getTransportationMode($position = 30)
    {
        return $this->getField($position);
    }

    public function getReasonforStudy($position = 31)
    {
        return $this->getField($position);
    }

    public function getPrincipalResultInterpreter($position = 32)
    {
        return $this->getField($position);
    }

    public function getAssistantResultInterpreter($position = 33)
    {
        return $this->getField($position);
    }

    public function getTechnician($position = 34)
    {
        return $this->getField($position);
    }

    public function getTranscriptionist($position = 35)
    {
        return $this->getField($position);
    }

    public function getScheduledDateTime($position = 36)
    {
        return $this->getField($position);
    }

    public function getNumberofSampleContainers($position = 37)
    {
        return $this->getField($position);
    }

    public function getTransportLogisticsofCollectedSample($position = 38)
    {
        return $this->getField($position);
    }

    public function getCollectorsComment($position = 39)
    {
        return $this->getField($position);
    }

    public function getTransportArrangementResponsibility($position = 40)
    {
        return $this->getField($position);
    }

    public function getTransportArranged($position = 41)
    {
        return $this->getField($position);
    }

    public function getEscortRequired($position = 42)
    {
        return $this->getField($position);
    }

    public function getPlannedPatientTransportComment($position = 43)
    {
        return $this->getField($position);
    }
}
