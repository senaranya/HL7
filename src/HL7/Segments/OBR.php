<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * OBR segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obr-segment
 */
class OBR extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('OBR', $fields);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function placerOrderNumber($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function fillerOrderNumber($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function universalServiceID($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function priority($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function requestedDatetime($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function observationDateTime($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function observationEndDateTime($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function collectionVolume($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function collectorIdentifier($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function specimenActionCode($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function dangerCode($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function relevantClinicalInfo($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function specimenReceivedDateTime($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function specimenSource($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function orderingProvider($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function orderCallbackPhoneNumber($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function placerfield1($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function placerfield2($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function fillerField1($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function fillerField2($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function resultsRptStatusChngDateTime($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function chargetoPractice($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function diagnosticServSectID($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function resultStatus($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function parentResult($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function quantityTiming($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function resultCopiesTo($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function parent($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function transportationMode($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function reasonforStudy($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function principalResultInterpreter($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function assistantResultInterpreter($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function technician($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function transcriptionist($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function scheduledDateTime($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function numberofSampleContainers($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function transportLogisticsofCollectedSample($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function collectorsComment($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function transportArrangementResponsibility($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function transportArranged($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function escortRequired($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function plannedPatientTransportComment($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

}
