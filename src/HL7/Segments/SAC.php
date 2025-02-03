<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * SAC segment class
 * Ref: https://www.interfaceware.com/hl7-standard/hl7-segment-SAC.html
 */
class SAC extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(?array $fields = null)
    {
        parent::__construct('SAC', $fields);
    }

    /**
     * Reset index of this segment
     */
    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setExternalAccessionIdentifier(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Accession Identifier (SAC.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setAccessionIdentifier($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Container Identifier (SAC.3)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 3
     *
     * @return bool
     *
     */
    public function setContainerIdentifier($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Primary Container Identifier (SAC.4)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 4
     *
     * @return bool
     *
     */
    public function setPrimaryContainerIdentifier($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Equipment Container Identifier (SAC.5)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 5
     *
     * @return bool
     *
     */
    public function setEquipmentContainerIdentifier($value, int $position = 5)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Specimen Source (SAC.6)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 6
     *
     * @return bool
     *
     */
    public function setSpecimenSource($value, int $position = 6)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Registration Date Time (SAC.7)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 7
     *
     * @return bool
     *
     */
    public function setRegistrationDateTime($value, int $position = 7)
    {
        return $this->setField($position, $value);
    }

    /**
     * @return bool
     *
     * value:
     * I : Identified
     * P : In Position
     * O : In Process
     * R : Process Completed
     * L : Left Equipment
     * M : Missing
     * X : Container Unavailable
     * U : Unknown
     */
    /**
     * Set Container Status (SAC.8)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 8
     *
     * @return bool
     *
     */
    public function setContainerStatus($value, int $position = 8)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Carrier Type (SAC.9)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 9
     *
     * @return bool
     *
     */
    public function setCarrierType($value, int $position = 9)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Carrier Identifier (SAC.10)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 10
     *
     * @return bool
     *
     */
    public function setCarrierIdentifier($value, int $position = 10)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Position In Carrier (SAC.11)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 11
     *
     * @return bool
     *
     */
    public function setPositionInCarrier($value, int $position = 11)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Tray Type SAC (SAC.12)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 12
     *
     * @return bool
     *
     */
    public function setTrayTypeSAC($value, int $position = 12)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Tray Identifier (SAC.13)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 13
     *
     * @return bool
     *
     */
    public function setTrayIdentifier($value, int $position = 13)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Position In Tray (SAC.14)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 14
     *
     * @return bool
     *
     */
    public function setPositionInTray($value, int $position = 14)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Location (SAC.15)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 15
     *
     * @return bool
     *
     */
    public function setLocation($value, int $position = 15)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Container Height (SAC.16)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 16
     *
     * @return bool
     *
     */
    public function setContainerHeight($value, int $position = 16)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Container Diameter (SAC.17)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 17
     *
     * @return bool
     *
     */
    public function setContainerDiameter($value, int $position = 17)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Barrier Delta (SAC.18)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 18
     *
     * @return bool
     *
     */
    public function setBarrierDelta($value, int $position = 18)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Bottom Delta (SAC.19)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 19
     *
     * @return bool
     *
     */
    public function setBottomDelta($value, int $position = 19)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Container Size Units (SAC.20)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 20
     *
     * @return bool
     *
     */
    public function setContainerSizeUnits($value, int $position = 20)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Container Volume (SAC.21)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 21
     *
     * @return bool
     *
     */
    public function setContainerVolume($value, int $position = 21)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Available Specimen Volume (SAC.22)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 22
     *
     * @return bool
     *
     */
    public function setAvailableSpecimenVolume($value, int $position = 22)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Initial Specimen Volume (SAC.23)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 23
     *
     * @return bool
     *
     */
    public function setInitialSpecimenVolume($value, int $position = 23)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Volume Units (SAC.24)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 24
     *
     * @return bool
     *
     */
    public function setVolumeUnits($value, int $position = 24)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Separator Type (SAC.25)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 25
     *
     * @return bool
     *
     */
    public function setSeparatorType($value, int $position = 25)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Cap Type (SAC.26)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 26
     *
     * @return bool
     *
     */
    public function setCapType($value, int $position = 26)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Additive (SAC.27)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 27
     *
     * @return bool
     *
     */
    public function setAdditive($value, int $position = 27)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Specimen Component (SAC.28)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 28
     *
     * @return bool
     *
     */
    public function setSpecimenComponent($value, int $position = 28)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Dilution Factor (SAC.29)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 29
     *
     * @return bool
     *
     */
    public function setDilutionFactor($value, int $position = 29)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Treatment (SAC.30)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 30
     *
     * @return bool
     *
     */
    public function setTreatment($value, int $position = 30)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Temperature (SAC.31)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 31
     *
     * @return bool
     *
     */
    public function setTemperature($value, int $position = 31)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Hemolysis Index (SAC.32)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 32
     *
     * @return bool
     *
     */
    public function setHemolysisIndex($value, int $position = 32)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Hemolysis Index Units (SAC.33)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 33
     *
     * @return bool
     *
     */
    public function setHemolysisIndexUnits($value, int $position = 33)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Lepemia Index (SAC.34)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 34
     *
     * @return bool
     *
     */
    public function setLepemiaIndex($value, int $position = 34)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Lepemia Index Units (SAC.35)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 35
     *
     * @return bool
     *
     */
    public function setLepemiaIndexUnits($value, int $position = 35)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Icterus Index (SAC.36)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 36
     *
     * @return bool
     *
     */
    public function setIcterusIndex($value, int $position = 36)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Icterus Index Units (SAC.37)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 37
     *
     * @return bool
     *
     */
    public function setIcterusIndexUnits($value, int $position = 37)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Fibrin Index (SAC.38)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 38
     *
     * @return bool
     *
     */
    public function setFibrinIndex($value, int $position = 38)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Fibrin Index Units (SAC.39)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 39
     *
     * @return bool
     *
     */
    public function setFibrinIndexUnits($value, int $position = 39)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set System Induced Contaminants (SAC.40)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 40
     *
     * @return bool
     *
     */
    public function setSystemInducedContaminants($value, int $position = 40)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Drug Interference (SAC.41)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 41
     *
     * @return bool
     *
     */
    public function setDrugInterference($value, int $position = 41)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Artificial Blood (SAC.42)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 42
     *
     * @return bool
     *
     */
    public function setArtificialBlood($value, int $position = 42)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Special Handling Code (SAC.43)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 43
     *
     * @return bool
     *
     */
    public function setSpecialHandlingCode($value, int $position = 43)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set Other Environmental Factors (SAC.44)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 44
     *
     * @return bool
     *
     */
    public function setOtherEnvironmentalFactors($value, int $position = 44)
    {
        return $this->setField($position, $value);
    }

    /**
     * Get External Accession Identifier (SAC.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getExternalAccessionIdentifier(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get Accession Identifier (SAC.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getAccessionIdentifier(int $position = 2)
    {
        return $this->getField($position);
    }

    /**
     * Get Container Identifier (SAC.3)
     *
     * @param int $position Defaults to 3
     *
     * @return array|string|int|null
     *
     */
    public function getContainerIdentifier(int $position = 3)
    {
        return $this->getField($position);
    }

    /**
     * Get Primary Container Identifier (SAC.4)
     *
     * @param int $position Defaults to 4
     *
     * @return array|string|int|null
     *
     */
    public function getPrimaryContainerIdentifier(int $position = 4)
    {
        return $this->getField($position);
    }

    /**
     * Get Equipment Container Identifier (SAC.5)
     *
     * @param int $position Defaults to 5
     *
     * @return array|string|int|null
     *
     */
    public function getEquipmentContainerIdentifier(int $position = 5)
    {
        return $this->getField($position);
    }

    /**
     * Get Specimen Source (SAC.6)
     *
     * @param int $position Defaults to 6
     *
     * @return array|string|int|null
     *
     */
    public function getSpecimenSource(int $position = 6)
    {
        return $this->getField($position);
    }

    /**
     * Get Registration Date Time (SAC.7)
     *
     * @param int $position Defaults to 7
     *
     * @return array|string|int|null
     *
     */
    public function getRegistrationDateTime(int $position = 7)
    {
        return $this->getField($position);
    }

    /**
     * Get Container Status (SAC.8)
     *
     * @param int $position Defaults to 8
     *
     * @return array|string|int|null
     *
     */
    public function getContainerStatus(int $position = 8)
    {
        return $this->getField($position);
    }

    /**
     * Get Carrier Type (SAC.9)
     *
     * @param int $position Defaults to 9
     *
     * @return array|string|int|null
     *
     */
    public function getCarrierType(int $position = 9)
    {
        return $this->getField($position);
    }

    /**
     * Get Carrier Identifier (SAC.10)
     *
     * @param int $position Defaults to 10
     *
     * @return array|string|int|null
     *
     */
    public function getCarrierIdentifier(int $position = 10)
    {
        return $this->getField($position);
    }

    /**
     * Get Position In Carrier (SAC.11)
     *
     * @param int $position Defaults to 11
     *
     * @return array|string|int|null
     *
     */
    public function getPositionInCarrier(int $position = 11)
    {
        return $this->getField($position);
    }

    /**
     * Get Tray Type SAC (SAC.12)
     *
     * @param int $position Defaults to 12
     *
     * @return array|string|int|null
     *
     */
    public function getTrayTypeSAC(int $position = 12)
    {
        return $this->getField($position);
    }

    /**
     * Get Tray Identifier (SAC.13)
     *
     * @param int $position Defaults to 13
     *
     * @return array|string|int|null
     *
     */
    public function getTrayIdentifier(int $position = 13)
    {
        return $this->getField($position);
    }

    /**
     * Get Position In Tray (SAC.14)
     *
     * @param int $position Defaults to 14
     *
     * @return array|string|int|null
     *
     */
    public function getPositionInTray(int $position = 14)
    {
        return $this->getField($position);
    }

    /**
     * Get Location (SAC.15)
     *
     * @param int $position Defaults to 15
     *
     * @return array|string|int|null
     *
     */
    public function getLocation(int $position = 15)
    {
        return $this->getField($position);
    }

    /**
     * Get Container Height (SAC.16)
     *
     * @param int $position Defaults to 16
     *
     * @return array|string|int|null
     *
     */
    public function getContainerHeight(int $position = 16)
    {
        return $this->getField($position);
    }

    /**
     * Get Container Diameter (SAC.17)
     *
     * @param int $position Defaults to 17
     *
     * @return array|string|int|null
     *
     */
    public function getContainerDiameter(int $position = 17)
    {
        return $this->getField($position);
    }

    /**
     * Get Barrier Delta (SAC.18)
     *
     * @param int $position Defaults to 18
     *
     * @return array|string|int|null
     *
     */
    public function getBarrierDelta(int $position = 18)
    {
        return $this->getField($position);
    }

    /**
     * Get Bottom Delta (SAC.19)
     *
     * @param int $position Defaults to 19
     *
     * @return array|string|int|null
     *
     */
    public function getBottomDelta(int $position = 19)
    {
        return $this->getField($position);
    }

    /**
     * Get Container Size Units (SAC.20)
     *
     * @param int $position Defaults to 20
     *
     * @return array|string|int|null
     *
     */
    public function getContainerSizeUnits(int $position = 20)
    {
        return $this->getField($position);
    }

    /**
     * Get Container Volume (SAC.21)
     *
     * @param int $position Defaults to 21
     *
     * @return array|string|int|null
     *
     */
    public function getContainerVolume(int $position = 21)
    {
        return $this->getField($position);
    }

    /**
     * Get Available Specimen Volume (SAC.22)
     *
     * @param int $position Defaults to 22
     *
     * @return array|string|int|null
     *
     */
    public function getAvailableSpecimenVolume(int $position = 22)
    {
        return $this->getField($position);
    }

    /**
     * Get Initial Specimen Volume (SAC.23)
     *
     * @param int $position Defaults to 23
     *
     * @return array|string|int|null
     *
     */
    public function getInitialSpecimenVolume(int $position = 23)
    {
        return $this->getField($position);
    }

    /**
     * Get Volume Units (SAC.24)
     *
     * @param int $position Defaults to 24
     *
     * @return array|string|int|null
     *
     */
    public function getVolumeUnits(int $position = 24)
    {
        return $this->getField($position);
    }

    /**
     * Get Separator Type (SAC.25)
     *
     * @param int $position Defaults to 25
     *
     * @return array|string|int|null
     *
     */
    public function getSeparatorType(int $position = 25)
    {
        return $this->getField($position);
    }

    /**
     * Get Cap Type (SAC.26)
     *
     * @param int $position Defaults to 26
     *
     * @return array|string|int|null
     *
     */
    public function getCapType(int $position = 26)
    {
        return $this->getField($position);
    }

    /**
     * Get Additive (SAC.27)
     *
     * @param int $position Defaults to 27
     *
     * @return array|string|int|null
     *
     */
    public function getAdditive(int $position = 27)
    {
        return $this->getField($position);
    }

    /**
     * Get Specimen Component (SAC.28)
     *
     * @param int $position Defaults to 28
     *
     * @return array|string|int|null
     *
     */
    public function getSpecimenComponent(int $position = 28)
    {
        return $this->getField($position);
    }

    /**
     * Get Dilution Factor (SAC.29)
     *
     * @param int $position Defaults to 29
     *
     * @return array|string|int|null
     *
     */
    public function getDilutionFactor(int $position = 29)
    {
        return $this->getField($position);
    }

    /**
     * Get Treatment (SAC.30)
     *
     * @param int $position Defaults to 30
     *
     * @return array|string|int|null
     *
     */
    public function getTreatment(int $position = 30)
    {
        return $this->getField($position);
    }

    /**
     * Get Temperature (SAC.31)
     *
     * @param int $position Defaults to 31
     *
     * @return array|string|int|null
     *
     */
    public function getTemperature(int $position = 31)
    {
        return $this->getField($position);
    }

    /**
     * Get Hemolysis Index (SAC.32)
     *
     * @param int $position Defaults to 32
     *
     * @return array|string|int|null
     *
     */
    public function getHemolysisIndex(int $position = 32)
    {
        return $this->getField($position);
    }

    /**
     * Get Hemolysis Index Units (SAC.33)
     *
     * @param int $position Defaults to 33
     *
     * @return array|string|int|null
     *
     */
    public function getHemolysisIndexUnits(int $position = 33)
    {
        return $this->getField($position);
    }

    /**
     * Get Lepemia Index (SAC.34)
     *
     * @param int $position Defaults to 34
     *
     * @return array|string|int|null
     *
     */
    public function getLepemiaIndex(int $position = 34)
    {
        return $this->getField($position);
    }

    /**
     * Get Lepemia Index Units (SAC.35)
     *
     * @param int $position Defaults to 35
     *
     * @return array|string|int|null
     *
     */
    public function getLepemiaIndexUnits(int $position = 35)
    {
        return $this->getField($position);
    }

    /**
     * Get Icterus Index (SAC.36)
     *
     * @param int $position Defaults to 36
     *
     * @return array|string|int|null
     *
     */
    public function getIcterusIndex(int $position = 36)
    {
        return $this->getField($position);
    }

    /**
     * Get Icterus Index Units (SAC.37)
     *
     * @param int $position Defaults to 37
     *
     * @return array|string|int|null
     *
     */
    public function getIcterusIndexUnits(int $position = 37)
    {
        return $this->getField($position);
    }

    /**
     * Get Fibrin Index (SAC.38)
     *
     * @param int $position Defaults to 38
     *
     * @return array|string|int|null
     *
     */
    public function getFibrinIndex(int $position = 38)
    {
        return $this->getField($position);
    }

    /**
     * Get Fibrin Index Units (SAC.39)
     *
     * @param int $position Defaults to 39
     *
     * @return array|string|int|null
     *
     */
    public function getFibrinIndexUnits(int $position = 39)
    {
        return $this->getField($position);
    }

    /**
     * Get System Induced Contaminants (SAC.40)
     *
     * @param int $position Defaults to 40
     *
     * @return array|string|int|null
     *
     */
    public function getSystemInducedContaminants(int $position = 40)
    {
        return $this->getField($position);
    }

    /**
     * Get Drug Interference (SAC.41)
     *
     * @param int $position Defaults to 41
     *
     * @return array|string|int|null
     *
     */
    public function getDrugInterference(int $position = 41)
    {
        return $this->getField($position);
    }

    /**
     * Get Artificial Blood (SAC.42)
     *
     * @param int $position Defaults to 42
     *
     * @return array|string|int|null
     *
     */
    public function getArtificialBlood(int $position = 42)
    {
        return $this->getField($position);
    }

    /**
     * Get Special Handling Code (SAC.43)
     *
     * @param int $position Defaults to 43
     *
     * @return array|string|int|null
     *
     */
    public function getSpecialHandlingCode(int $position = 43)
    {
        return $this->getField($position);
    }

    /**
     * Get Other Environmental Factors (SAC.44)
     *
     * @param int $position Defaults to 44
     *
     * @return array|string|int|null
     *
     */
    public function getOtherEnvironmentalFactors(int $position = 44)
    {
        return $this->getField($position);
    }
}
