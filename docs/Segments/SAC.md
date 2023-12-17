# Aranyasen\HL7\Segments\SAC  

SAC segment class
Ref: https://www.interfaceware.com/hl7-standard/hl7-segment-SAC.html



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAccessionIdentifier](#sacgetaccessionidentifier)|Get Accession Identifier (SAC.2)|
|[getAdditive](#sacgetadditive)|Get Additive (SAC.27)|
|[getArtificialBlood](#sacgetartificialblood)|Get Artificial Blood (SAC.42)|
|[getAvailableSpecimenVolume](#sacgetavailablespecimenvolume)|Get Available SpecimenVolume (SAC.22)|
|[getBarrierDelta](#sacgetbarrierdelta)|Get Barrier Delta (SAC.18)|
|[getBottomDelta](#sacgetbottomdelta)|Get Bottom Delta (SAC.19)|
|[getCapType](#sacgetcaptype)|Get Cap Type (SAC.26)|
|[getCarrierIdentifier](#sacgetcarrieridentifier)|Get Carrier Identifier (SAC.10)|
|[getCarrierType](#sacgetcarriertype)|Get Carrier Type (SAC.9)|
|[getContainerDiameter](#sacgetcontainerdiameter)|Get Container Diameter (SAC.17)|
|[getContainerHeight](#sacgetcontainerheight)|Get Container Height (SAC.16)|
|[getContainerIdentifier](#sacgetcontaineridentifier)|Get Container Identifier (SAC.3)|
|[getContainerSizeUnits](#sacgetcontainersizeunits)|Get Container SizeUnits (SAC.20)|
|[getContainerStatus](#sacgetcontainerstatus)|Get Container Status (SAC.8)|
|[getContainerVolume](#sacgetcontainervolume)|Get Container Volume (SAC.21)|
|[getDilutionFactor](#sacgetdilutionfactor)|Get Dilution Factor (SAC.29)|
|[getDrugInterference](#sacgetdruginterference)|Get Drug Interference (SAC.41)|
|[getEquipmentContainerIdentifier](#sacgetequipmentcontaineridentifier)|Get Equipment ContainerIdentifier (SAC.5)|
|[getExternalAccessionIdentifier](#sacgetexternalaccessionidentifier)|Get External AccessionIdentifier (SAC.1)|
|[getFibrinIndex](#sacgetfibrinindex)|Get Fibrin Index (SAC.38)|
|[getFibrinIndexUnits](#sacgetfibrinindexunits)|Get Fibrin IndexUnits (SAC.39)|
|[getHemolysisIndex](#sacgethemolysisindex)|Get Hemolysis Index (SAC.32)|
|[getHemolysisIndexUnits](#sacgethemolysisindexunits)|Get Hemolysis IndexUnits (SAC.33)|
|[getIcterusIndex](#sacgeticterusindex)|Get Icterus Index (SAC.36)|
|[getIcterusIndexUnits](#sacgeticterusindexunits)|Get Icterus IndexUnits (SAC.37)|
|[getInitialSpecimenVolume](#sacgetinitialspecimenvolume)|Get Initial SpecimenVolume (SAC.23)|
|[getLepemiaIndex](#sacgetlepemiaindex)|Get Lepemia Index (SAC.34)|
|[getLepemiaIndexUnits](#sacgetlepemiaindexunits)|Get Lepemia IndexUnits (SAC.35)|
|[getLocation](#sacgetlocation)|Get Location (SAC.15)|
|[getOtherEnvironmentalFactors](#sacgetotherenvironmentalfactors)|Get Other EnvironmentalFactors (SAC.44)|
|[getPositionInCarrier](#sacgetpositionincarrier)|Get Position InCarrier (SAC.11)|
|[getPositionInTray](#sacgetpositionintray)|Get Position InTray (SAC.14)|
|[getPrimaryContainerIdentifier](#sacgetprimarycontaineridentifier)|Get Primary ContainerIdentifier (SAC.4)|
|[getRegistrationDateTime](#sacgetregistrationdatetime)|Get Registration DateTime (SAC.7)|
|[getSeparatorType](#sacgetseparatortype)|Get Separator Type (SAC.25)|
|[getSpecialHandlingCode](#sacgetspecialhandlingcode)|Get Special HandlingCode (SAC.43)|
|[getSpecimenComponent](#sacgetspecimencomponent)|Get Specimen Component (SAC.28)|
|[getSpecimenSource](#sacgetspecimensource)|Get Specimen Source (SAC.6)|
|[getSystemInducedContaminants](#sacgetsysteminducedcontaminants)|Get System InducedContaminants (SAC.40)|
|[getTemperature](#sacgettemperature)|Get Temperature (SAC.31)|
|[getTrayIdentifier](#sacgettrayidentifier)|Get Tray Identifier (SAC.13)|
|[getTrayTypeSAC](#sacgettraytypesac)|Get Tray TypeSAC (SAC.12)|
|[getTreatment](#sacgettreatment)|Get Treatment (SAC.30)|
|[getVolumeUnits](#sacgetvolumeunits)|Get Volume Units (SAC.24)|
|[resetIndex](#sacresetindex)|Reset index of this segment|
|[setAccessionIdentifier](#sacsetaccessionidentifier)|Set Accession Identifier (SAC.2)|
|[setAdditive](#sacsetadditive)|Set Additive (SAC.27)|
|[setArtificialBlood](#sacsetartificialblood)|Set Artificial Blood (SAC.42)|
|[setAvailableSpecimenVolume](#sacsetavailablespecimenvolume)|Set Available Specimen Volume (SAC.22)|
|[setBarrierDelta](#sacsetbarrierdelta)|Set Barrier Delta (SAC.18)|
|[setBottomDelta](#sacsetbottomdelta)|Set Bottom Delta (SAC.19)|
|[setCapType](#sacsetcaptype)|Set Cap Type (SAC.26)|
|[setCarrierIdentifier](#sacsetcarrieridentifier)|Set Carrier Identifier (SAC.10)|
|[setCarrierType](#sacsetcarriertype)|Set Carrier Type (SAC.9)|
|[setContainerDiameter](#sacsetcontainerdiameter)|Set Container Diameter (SAC.17)|
|[setContainerHeight](#sacsetcontainerheight)|Set Container Height (SAC.16)|
|[setContainerIdentifier](#sacsetcontaineridentifier)|Set Container Identifier (SAC.3)|
|[setContainerSizeUnits](#sacsetcontainersizeunits)|Set Container Size Units (SAC.20)|
|[setContainerStatus](#sacsetcontainerstatus)|Set Container Status (SAC.8)|
|[setContainerVolume](#sacsetcontainervolume)|Set Container Volume (SAC.21)|
|[setDilutionFactor](#sacsetdilutionfactor)|Set Dilution Factor (SAC.29)|
|[setDrugInterference](#sacsetdruginterference)|Set Drug Interference (SAC.41)|
|[setEquipmentContainerIdentifier](#sacsetequipmentcontaineridentifier)|Set Equipment Container Identifier (SAC.5)|
|[setExternalAccessionIdentifier](#sacsetexternalaccessionidentifier)||
|[setFibrinIndex](#sacsetfibrinindex)|Set Fibrin Index (SAC.38)|
|[setFibrinIndexUnits](#sacsetfibrinindexunits)|Set Fibrin Index Units (SAC.39)|
|[setHemolysisIndex](#sacsethemolysisindex)|Set Hemolysis Index (SAC.32)|
|[setHemolysisIndexUnits](#sacsethemolysisindexunits)|Set Hemolysis Index Units (SAC.33)|
|[setIcterusIndex](#sacseticterusindex)|Set Icterus Index (SAC.36)|
|[setIcterusIndexUnits](#sacseticterusindexunits)|Set Icterus Index Units (SAC.37)|
|[setInitialSpecimenVolume](#sacsetinitialspecimenvolume)|Set Initial Specimen Volume (SAC.23)|
|[setLepemiaIndex](#sacsetlepemiaindex)|Set Lepemia Index (SAC.34)|
|[setLepemiaIndexUnits](#sacsetlepemiaindexunits)|Set Lepemia Index Units (SAC.35)|
|[setLocation](#sacsetlocation)|Set Location (SAC.15)|
|[setOtherEnvironmentalFactors](#sacsetotherenvironmentalfactors)|Set Other Environmental Factors (SAC.44)|
|[setPositionInCarrier](#sacsetpositionincarrier)|Set Position In Carrier (SAC.11)|
|[setPositionInTray](#sacsetpositionintray)|Set Position In Tray (SAC.14)|
|[setPrimaryContainerIdentifier](#sacsetprimarycontaineridentifier)|Set Primary Container Identifier (SAC.4)|
|[setRegistrationDateTime](#sacsetregistrationdatetime)|Set Registration Date Time (SAC.7)|
|[setSeparatorType](#sacsetseparatortype)|Set Separator Type (SAC.25)|
|[setSpecialHandlingCode](#sacsetspecialhandlingcode)|Set Special Handling Code (SAC.43)|
|[setSpecimenComponent](#sacsetspecimencomponent)|Set Specimen Component (SAC.28)|
|[setSpecimenSource](#sacsetspecimensource)|Set Specimen Source (SAC.6)|
|[setSystemInducedContaminants](#sacsetsysteminducedcontaminants)|Set System Induced Contaminants (SAC.40)|
|[setTemperature](#sacsettemperature)|Set Temperature (SAC.31)|
|[setTrayIdentifier](#sacsettrayidentifier)|Set Tray Identifier (SAC.13)|
|[setTrayTypeSAC](#sacsettraytypesac)|Set Tray Type SAC (SAC.12)|
|[setTreatment](#sacsettreatment)|Set Treatment (SAC.30)|
|[setVolumeUnits](#sacsetvolumeunits)|Set Volume Units (SAC.24)|

## Inherited methods

| Name | Description |
|------|-------------|
|__construct|Create a segment.|
|clearField|Remove any existing value from the field|
|getField|Get the field at index.|
|getFields|Get fields from a segment|
|getName|Get the name of the segment. This is basically the value at index 0|
|setField|Set the field specified by index to value.|
|size|Get the number of fields for this segment, not including the name|



### SAC::getAccessionIdentifier  

**Description**

```php
public getAccessionIdentifier (int $position)
```

Get Accession Identifier (SAC.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getAdditive  

**Description**

```php
public getAdditive (int $position)
```

Get Additive (SAC.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getArtificialBlood  

**Description**

```php
public getArtificialBlood (int $position)
```

Get Artificial Blood (SAC.42) 

 

**Parameters**

* `(int) $position`
: Defaults to 42  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getAvailableSpecimenVolume  

**Description**

```php
public getAvailableSpecimenVolume (int $position)
```

Get Available SpecimenVolume (SAC.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getBarrierDelta  

**Description**

```php
public getBarrierDelta (int $position)
```

Get Barrier Delta (SAC.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getBottomDelta  

**Description**

```php
public getBottomDelta (int $position)
```

Get Bottom Delta (SAC.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getCapType  

**Description**

```php
public getCapType (int $position)
```

Get Cap Type (SAC.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getCarrierIdentifier  

**Description**

```php
public getCarrierIdentifier (int $position)
```

Get Carrier Identifier (SAC.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getCarrierType  

**Description**

```php
public getCarrierType (int $position)
```

Get Carrier Type (SAC.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getContainerDiameter  

**Description**

```php
public getContainerDiameter (int $position)
```

Get Container Diameter (SAC.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getContainerHeight  

**Description**

```php
public getContainerHeight (int $position)
```

Get Container Height (SAC.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getContainerIdentifier  

**Description**

```php
public getContainerIdentifier (int $position)
```

Get Container Identifier (SAC.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getContainerSizeUnits  

**Description**

```php
public getContainerSizeUnits (int $position)
```

Get Container SizeUnits (SAC.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getContainerStatus  

**Description**

```php
public getContainerStatus (int $position)
```

Get Container Status (SAC.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getContainerVolume  

**Description**

```php
public getContainerVolume (int $position)
```

Get Container Volume (SAC.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getDilutionFactor  

**Description**

```php
public getDilutionFactor (int $position)
```

Get Dilution Factor (SAC.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getDrugInterference  

**Description**

```php
public getDrugInterference (int $position)
```

Get Drug Interference (SAC.41) 

 

**Parameters**

* `(int) $position`
: Defaults to 41  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getEquipmentContainerIdentifier  

**Description**

```php
public getEquipmentContainerIdentifier (int $position)
```

Get Equipment ContainerIdentifier (SAC.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getExternalAccessionIdentifier  

**Description**

```php
public getExternalAccessionIdentifier (int $position)
```

Get External AccessionIdentifier (SAC.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getFibrinIndex  

**Description**

```php
public getFibrinIndex (int $position)
```

Get Fibrin Index (SAC.38) 

 

**Parameters**

* `(int) $position`
: Defaults to 38  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getFibrinIndexUnits  

**Description**

```php
public getFibrinIndexUnits (int $position)
```

Get Fibrin IndexUnits (SAC.39) 

 

**Parameters**

* `(int) $position`
: Defaults to 39  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getHemolysisIndex  

**Description**

```php
public getHemolysisIndex (int $position)
```

Get Hemolysis Index (SAC.32) 

 

**Parameters**

* `(int) $position`
: Defaults to 32  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getHemolysisIndexUnits  

**Description**

```php
public getHemolysisIndexUnits (int $position)
```

Get Hemolysis IndexUnits (SAC.33) 

 

**Parameters**

* `(int) $position`
: Defaults to 33  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getIcterusIndex  

**Description**

```php
public getIcterusIndex (int $position)
```

Get Icterus Index (SAC.36) 

 

**Parameters**

* `(int) $position`
: Defaults to 36  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getIcterusIndexUnits  

**Description**

```php
public getIcterusIndexUnits (int $position)
```

Get Icterus IndexUnits (SAC.37) 

 

**Parameters**

* `(int) $position`
: Defaults to 37  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getInitialSpecimenVolume  

**Description**

```php
public getInitialSpecimenVolume (int $position)
```

Get Initial SpecimenVolume (SAC.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getLepemiaIndex  

**Description**

```php
public getLepemiaIndex (int $position)
```

Get Lepemia Index (SAC.34) 

 

**Parameters**

* `(int) $position`
: Defaults to 34  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getLepemiaIndexUnits  

**Description**

```php
public getLepemiaIndexUnits (int $position)
```

Get Lepemia IndexUnits (SAC.35) 

 

**Parameters**

* `(int) $position`
: Defaults to 35  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getLocation  

**Description**

```php
public getLocation (int $position)
```

Get Location (SAC.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getOtherEnvironmentalFactors  

**Description**

```php
public getOtherEnvironmentalFactors (int $position)
```

Get Other EnvironmentalFactors (SAC.44) 

 

**Parameters**

* `(int) $position`
: Defaults to 44  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getPositionInCarrier  

**Description**

```php
public getPositionInCarrier (int $position)
```

Get Position InCarrier (SAC.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getPositionInTray  

**Description**

```php
public getPositionInTray (int $position)
```

Get Position InTray (SAC.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getPrimaryContainerIdentifier  

**Description**

```php
public getPrimaryContainerIdentifier (int $position)
```

Get Primary ContainerIdentifier (SAC.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getRegistrationDateTime  

**Description**

```php
public getRegistrationDateTime (int $position)
```

Get Registration DateTime (SAC.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getSeparatorType  

**Description**

```php
public getSeparatorType (int $position)
```

Get Separator Type (SAC.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getSpecialHandlingCode  

**Description**

```php
public getSpecialHandlingCode (int $position)
```

Get Special HandlingCode (SAC.43) 

 

**Parameters**

* `(int) $position`
: Defaults to 43  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getSpecimenComponent  

**Description**

```php
public getSpecimenComponent (int $position)
```

Get Specimen Component (SAC.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getSpecimenSource  

**Description**

```php
public getSpecimenSource (int $position)
```

Get Specimen Source (SAC.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getSystemInducedContaminants  

**Description**

```php
public getSystemInducedContaminants (int $position)
```

Get System InducedContaminants (SAC.40) 

 

**Parameters**

* `(int) $position`
: Defaults to 40  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getTemperature  

**Description**

```php
public getTemperature (int $position)
```

Get Temperature (SAC.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getTrayIdentifier  

**Description**

```php
public getTrayIdentifier (int $position)
```

Get Tray Identifier (SAC.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getTrayTypeSAC  

**Description**

```php
public getTrayTypeSAC (int $position)
```

Get Tray TypeSAC (SAC.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getTreatment  

**Description**

```php
public getTreatment (int $position)
```

Get Treatment (SAC.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### SAC::getVolumeUnits  

**Description**

```php
public getVolumeUnits (int $position)
```

Get Volume Units (SAC.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### SAC::resetIndex  

**Description**

```php
public static resetIndex (void)
```

Reset index of this segment 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### SAC::setAccessionIdentifier  

**Description**

```php
public setAccessionIdentifier (string|int|array|null $value, int $position)
```

Set Accession Identifier (SAC.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### SAC::setAdditive  

**Description**

```php
public setAdditive (string|int|array|null $value, int $position)
```

Set Additive (SAC.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### SAC::setArtificialBlood  

**Description**

```php
public setArtificialBlood (string|int|array|null $value, int $position)
```

Set Artificial Blood (SAC.42) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 42  

**Return Values**

`bool`




<hr />


### SAC::setAvailableSpecimenVolume  

**Description**

```php
public setAvailableSpecimenVolume (string|int|array|null $value, int $position)
```

Set Available Specimen Volume (SAC.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### SAC::setBarrierDelta  

**Description**

```php
public setBarrierDelta (string|int|array|null $value, int $position)
```

Set Barrier Delta (SAC.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### SAC::setBottomDelta  

**Description**

```php
public setBottomDelta (string|int|array|null $value, int $position)
```

Set Bottom Delta (SAC.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### SAC::setCapType  

**Description**

```php
public setCapType (string|int|array|null $value, int $position)
```

Set Cap Type (SAC.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### SAC::setCarrierIdentifier  

**Description**

```php
public setCarrierIdentifier (string|int|array|null $value, int $position)
```

Set Carrier Identifier (SAC.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### SAC::setCarrierType  

**Description**

```php
public setCarrierType (string|int|array|null $value, int $position)
```

Set Carrier Type (SAC.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### SAC::setContainerDiameter  

**Description**

```php
public setContainerDiameter (string|int|array|null $value, int $position)
```

Set Container Diameter (SAC.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### SAC::setContainerHeight  

**Description**

```php
public setContainerHeight (string|int|array|null $value, int $position)
```

Set Container Height (SAC.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### SAC::setContainerIdentifier  

**Description**

```php
public setContainerIdentifier (string|int|array|null $value, int $position)
```

Set Container Identifier (SAC.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### SAC::setContainerSizeUnits  

**Description**

```php
public setContainerSizeUnits (string|int|array|null $value, int $position)
```

Set Container Size Units (SAC.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### SAC::setContainerStatus  

**Description**

```php
public setContainerStatus (string|int|array|null $value, int $position)
```

Set Container Status (SAC.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### SAC::setContainerVolume  

**Description**

```php
public setContainerVolume (string|int|array|null $value, int $position)
```

Set Container Volume (SAC.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### SAC::setDilutionFactor  

**Description**

```php
public setDilutionFactor (string|int|array|null $value, int $position)
```

Set Dilution Factor (SAC.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### SAC::setDrugInterference  

**Description**

```php
public setDrugInterference (string|int|array|null $value, int $position)
```

Set Drug Interference (SAC.41) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 41  

**Return Values**

`bool`




<hr />


### SAC::setEquipmentContainerIdentifier  

**Description**

```php
public setEquipmentContainerIdentifier (string|int|array|null $value, int $position)
```

Set Equipment Container Identifier (SAC.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### SAC::setExternalAccessionIdentifier  

**Description**

```php
 setExternalAccessionIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### SAC::setFibrinIndex  

**Description**

```php
public setFibrinIndex (string|int|array|null $value, int $position)
```

Set Fibrin Index (SAC.38) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 38  

**Return Values**

`bool`




<hr />


### SAC::setFibrinIndexUnits  

**Description**

```php
public setFibrinIndexUnits (string|int|array|null $value, int $position)
```

Set Fibrin Index Units (SAC.39) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 39  

**Return Values**

`bool`




<hr />


### SAC::setHemolysisIndex  

**Description**

```php
public setHemolysisIndex (string|int|array|null $value, int $position)
```

Set Hemolysis Index (SAC.32) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 32  

**Return Values**

`bool`




<hr />


### SAC::setHemolysisIndexUnits  

**Description**

```php
public setHemolysisIndexUnits (string|int|array|null $value, int $position)
```

Set Hemolysis Index Units (SAC.33) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 33  

**Return Values**

`bool`




<hr />


### SAC::setIcterusIndex  

**Description**

```php
public setIcterusIndex (string|int|array|null $value, int $position)
```

Set Icterus Index (SAC.36) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 36  

**Return Values**

`bool`




<hr />


### SAC::setIcterusIndexUnits  

**Description**

```php
public setIcterusIndexUnits (string|int|array|null $value, int $position)
```

Set Icterus Index Units (SAC.37) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 37  

**Return Values**

`bool`




<hr />


### SAC::setInitialSpecimenVolume  

**Description**

```php
public setInitialSpecimenVolume (string|int|array|null $value, int $position)
```

Set Initial Specimen Volume (SAC.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### SAC::setLepemiaIndex  

**Description**

```php
public setLepemiaIndex (string|int|array|null $value, int $position)
```

Set Lepemia Index (SAC.34) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 34  

**Return Values**

`bool`




<hr />


### SAC::setLepemiaIndexUnits  

**Description**

```php
public setLepemiaIndexUnits (string|int|array|null $value, int $position)
```

Set Lepemia Index Units (SAC.35) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 35  

**Return Values**

`bool`




<hr />


### SAC::setLocation  

**Description**

```php
public setLocation (string|int|array|null $value, int $position)
```

Set Location (SAC.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### SAC::setOtherEnvironmentalFactors  

**Description**

```php
public setOtherEnvironmentalFactors (string|int|array|null $value, int $position)
```

Set Other Environmental Factors (SAC.44) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 44  

**Return Values**

`bool`




<hr />


### SAC::setPositionInCarrier  

**Description**

```php
public setPositionInCarrier (string|int|array|null $value, int $position)
```

Set Position In Carrier (SAC.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### SAC::setPositionInTray  

**Description**

```php
public setPositionInTray (string|int|array|null $value, int $position)
```

Set Position In Tray (SAC.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### SAC::setPrimaryContainerIdentifier  

**Description**

```php
public setPrimaryContainerIdentifier (string|int|array|null $value, int $position)
```

Set Primary Container Identifier (SAC.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### SAC::setRegistrationDateTime  

**Description**

```php
public setRegistrationDateTime (string|int|array|null $value, int $position)
```

Set Registration Date Time (SAC.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### SAC::setSeparatorType  

**Description**

```php
public setSeparatorType (string|int|array|null $value, int $position)
```

Set Separator Type (SAC.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### SAC::setSpecialHandlingCode  

**Description**

```php
public setSpecialHandlingCode (string|int|array|null $value, int $position)
```

Set Special Handling Code (SAC.43) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 43  

**Return Values**

`bool`




<hr />


### SAC::setSpecimenComponent  

**Description**

```php
public setSpecimenComponent (string|int|array|null $value, int $position)
```

Set Specimen Component (SAC.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### SAC::setSpecimenSource  

**Description**

```php
public setSpecimenSource (string|int|array|null $value, int $position)
```

Set Specimen Source (SAC.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### SAC::setSystemInducedContaminants  

**Description**

```php
public setSystemInducedContaminants (string|int|array|null $value, int $position)
```

Set System Induced Contaminants (SAC.40) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 40  

**Return Values**

`bool`




<hr />


### SAC::setTemperature  

**Description**

```php
public setTemperature (string|int|array|null $value, int $position)
```

Set Temperature (SAC.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### SAC::setTrayIdentifier  

**Description**

```php
public setTrayIdentifier (string|int|array|null $value, int $position)
```

Set Tray Identifier (SAC.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### SAC::setTrayTypeSAC  

**Description**

```php
public setTrayTypeSAC (string|int|array|null $value, int $position)
```

Set Tray Type SAC (SAC.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### SAC::setTreatment  

**Description**

```php
public setTreatment (string|int|array|null $value, int $position)
```

Set Treatment (SAC.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### SAC::setVolumeUnits  

**Description**

```php
public setVolumeUnits (string|int|array|null $value, int $position)
```

Set Volume Units (SAC.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />

