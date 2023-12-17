# Aranyasen\HL7\Segments\OBX  

OBX segment class
Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/OBX



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#obx__destruct)||
|[getAbnormalFlags](#obxgetabnormalflags)|Get Abnormal Flags (OBX.8)|
|[getDataLastObsNormalValues](#obxgetdatalastobsnormalvalues)|Get Data LastObsNormalValues (OBX.12)|
|[getDateTimeOfAnalysis](#obxgetdatetimeofanalysis)|Get Date TimeOfAnalysis (OBX.19)|
|[getDateTimeOfTheObservation](#obxgetdatetimeoftheobservation)|Get Date TimeOfTheObservation (OBX.14)|
|[getEquipmentInstanceIdentifier](#obxgetequipmentinstanceidentifier)|Get Equipment InstanceIdentifier (OBX.18)|
|[getID](#obxgetid)|Get ID (OBX.1)|
|[getNatureOfAbnormalTest](#obxgetnatureofabnormaltest)|Get Nature OfAbnormalTest (OBX.10)|
|[getObservationIdentifier](#obxgetobservationidentifier)|Get Observation Identifier (OBX.3)|
|[getObservationMethod](#obxgetobservationmethod)|Get Observation Method (OBX.17)|
|[getObservationSubId](#obxgetobservationsubid)|Get Observation SubId (OBX.4)|
|[getObservationValue](#obxgetobservationvalue)|Get Observation Value (OBX.5)|
|[getObserveResultStatus](#obxgetobserveresultstatus)|Get Observe ResultStatus (OBX.11)|
|[getProbability](#obxgetprobability)|Get Probability (OBX.9)|
|[getProducersId](#obxgetproducersid)|Get Producers Id (OBX.15)|
|[getReferenceRange](#obxgetreferencerange)|Get Reference Range (OBX.7)|
|[getResponsibleObserver](#obxgetresponsibleobserver)|Get Responsible Observer (OBX.16)|
|[getUnits](#obxgetunits)|Get Units (OBX.6)|
|[getUserDefinedAccessChecks](#obxgetuserdefinedaccesschecks)|Get User DefinedAccessChecks (OBX.13)|
|[getValueType](#obxgetvaluetype)|Get Value Type (OBX.2)|
|[resetIndex](#obxresetindex)|Reset index of this segment|
|[setAbnormalFlags](#obxsetabnormalflags)|Set Abnormal Flags (OBX.8)|
|[setDataLastObsNormalValues](#obxsetdatalastobsnormalvalues)|Set Data Last Obs Normal Values (OBX.12)|
|[setDateTimeOfAnalysis](#obxsetdatetimeofanalysis)|Set Date Time Of Analysis (OBX.19)|
|[setDateTimeOfTheObservation](#obxsetdatetimeoftheobservation)|Set Date Time Of The Observation (OBX.14)|
|[setEquipmentInstanceIdentifier](#obxsetequipmentinstanceidentifier)|Set Equipment Instance Identifier (OBX.18)|
|[setID](#obxsetid)|Set ID (OBX.1)|
|[setNatureOfAbnormalTest](#obxsetnatureofabnormaltest)|Set Nature Of Abnormal Test (OBX.10)|
|[setObservationIdentifier](#obxsetobservationidentifier)|Set Observation Identifier (OBX.3)|
|[setObservationMethod](#obxsetobservationmethod)|Set Observation Method (OBX.17)|
|[setObservationSubId](#obxsetobservationsubid)|Set Observation Sub Id (OBX.4)|
|[setObservationValue](#obxsetobservationvalue)|Set Observation Value (OBX.5)|
|[setObserveResultStatus](#obxsetobserveresultstatus)|Set Observe Result Status (OBX.11)|
|[setProbability](#obxsetprobability)|Set Probability (OBX.9)|
|[setProducersId](#obxsetproducersid)|Set Producers Id (OBX.15)|
|[setReferenceRange](#obxsetreferencerange)|Set Reference Range (OBX.7)|
|[setResponsibleObserver](#obxsetresponsibleobserver)|Set Responsible Observer (OBX.16)|
|[setUnits](#obxsetunits)|Set Units (OBX.6)|
|[setUserDefinedAccessChecks](#obxsetuserdefinedaccesschecks)|Set User Defined Access Checks (OBX.13)|
|[setValueType](#obxsetvaluetype)|Set Value Type (OBX.2)|

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



### OBX::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBX::getAbnormalFlags  

**Description**

```php
public getAbnormalFlags (int $position)
```

Get Abnormal Flags (OBX.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getDataLastObsNormalValues  

**Description**

```php
public getDataLastObsNormalValues (int $position)
```

Get Data LastObsNormalValues (OBX.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getDateTimeOfAnalysis  

**Description**

```php
public getDateTimeOfAnalysis (int $position)
```

Get Date TimeOfAnalysis (OBX.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getDateTimeOfTheObservation  

**Description**

```php
public getDateTimeOfTheObservation (int $position)
```

Get Date TimeOfTheObservation (OBX.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getEquipmentInstanceIdentifier  

**Description**

```php
public getEquipmentInstanceIdentifier (int $position)
```

Get Equipment InstanceIdentifier (OBX.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getID  

**Description**

```php
public getID (int $position)
```

Get ID (OBX.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getNatureOfAbnormalTest  

**Description**

```php
public getNatureOfAbnormalTest (int $position)
```

Get Nature OfAbnormalTest (OBX.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getObservationIdentifier  

**Description**

```php
public getObservationIdentifier (int $position)
```

Get Observation Identifier (OBX.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getObservationMethod  

**Description**

```php
public getObservationMethod (int $position)
```

Get Observation Method (OBX.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getObservationSubId  

**Description**

```php
public getObservationSubId (int $position)
```

Get Observation SubId (OBX.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getObservationValue  

**Description**

```php
public getObservationValue (int $position)
```

Get Observation Value (OBX.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getObserveResultStatus  

**Description**

```php
public getObserveResultStatus (int $position)
```

Get Observe ResultStatus (OBX.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getProbability  

**Description**

```php
public getProbability (int $position)
```

Get Probability (OBX.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getProducersId  

**Description**

```php
public getProducersId (int $position)
```

Get Producers Id (OBX.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getReferenceRange  

**Description**

```php
public getReferenceRange (int $position)
```

Get Reference Range (OBX.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getResponsibleObserver  

**Description**

```php
public getResponsibleObserver (int $position)
```

Get Responsible Observer (OBX.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getUnits  

**Description**

```php
public getUnits (int $position)
```

Get Units (OBX.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getUserDefinedAccessChecks  

**Description**

```php
public getUserDefinedAccessChecks (int $position)
```

Get User DefinedAccessChecks (OBX.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### OBX::getValueType  

**Description**

```php
public getValueType (int $position)
```

Get Value Type (OBX.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### OBX::resetIndex  

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


### OBX::setAbnormalFlags  

**Description**

```php
public setAbnormalFlags (string|int|array|null $value, int $position)
```

Set Abnormal Flags (OBX.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### OBX::setDataLastObsNormalValues  

**Description**

```php
public setDataLastObsNormalValues (string|int|array|null $value, int $position)
```

Set Data Last Obs Normal Values (OBX.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### OBX::setDateTimeOfAnalysis  

**Description**

```php
public setDateTimeOfAnalysis (string|int|array|null $value, int $position)
```

Set Date Time Of Analysis (OBX.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### OBX::setDateTimeOfTheObservation  

**Description**

```php
public setDateTimeOfTheObservation (string|int|array|null $value, int $position)
```

Set Date Time Of The Observation (OBX.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### OBX::setEquipmentInstanceIdentifier  

**Description**

```php
public setEquipmentInstanceIdentifier (string|int|array|null $value, int $position)
```

Set Equipment Instance Identifier (OBX.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### OBX::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (OBX.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### OBX::setNatureOfAbnormalTest  

**Description**

```php
public setNatureOfAbnormalTest (string|int|array|null $value, int $position)
```

Set Nature Of Abnormal Test (OBX.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### OBX::setObservationIdentifier  

**Description**

```php
public setObservationIdentifier (string|int|array|null $value, int $position)
```

Set Observation Identifier (OBX.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### OBX::setObservationMethod  

**Description**

```php
public setObservationMethod (string|int|array|null $value, int $position)
```

Set Observation Method (OBX.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### OBX::setObservationSubId  

**Description**

```php
public setObservationSubId (string|int|array|null $value, int $position)
```

Set Observation Sub Id (OBX.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### OBX::setObservationValue  

**Description**

```php
public setObservationValue (string|int|array|null $value, int $position)
```

Set Observation Value (OBX.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### OBX::setObserveResultStatus  

**Description**

```php
public setObserveResultStatus (string|int|array|null $value, int $position)
```

Set Observe Result Status (OBX.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### OBX::setProbability  

**Description**

```php
public setProbability (string|int|array|null $value, int $position)
```

Set Probability (OBX.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### OBX::setProducersId  

**Description**

```php
public setProducersId (string|int|array|null $value, int $position)
```

Set Producers Id (OBX.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### OBX::setReferenceRange  

**Description**

```php
public setReferenceRange (string|int|array|null $value, int $position)
```

Set Reference Range (OBX.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### OBX::setResponsibleObserver  

**Description**

```php
public setResponsibleObserver (string|int|array|null $value, int $position)
```

Set Responsible Observer (OBX.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### OBX::setUnits  

**Description**

```php
public setUnits (string|int|array|null $value, int $position)
```

Set Units (OBX.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### OBX::setUserDefinedAccessChecks  

**Description**

```php
public setUserDefinedAccessChecks (string|int|array|null $value, int $position)
```

Set User Defined Access Checks (OBX.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### OBX::setValueType  

**Description**

```php
public setValueType (string|int|array|null $value, int $position)
```

Set Value Type (OBX.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />

