# Aranyasen\HL7\Segments\OBX  

OBX segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obx-segment



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAbnormalFlags](#obxgetabnormalflags)||
|[getDataLastObsNormalValues](#obxgetdatalastobsnormalvalues)||
|[getDateTimeOfTheObservation](#obxgetdatetimeoftheobservation)||
|[getID](#obxgetid)||
|[getNatureOfAbnormalTest](#obxgetnatureofabnormaltest)||
|[getObservationIdentifier](#obxgetobservationidentifier)||
|[getObservationMethod](#obxgetobservationmethod)||
|[getObservationSubId](#obxgetobservationsubid)||
|[getObservationValue](#obxgetobservationvalue)||
|[getObserveResultStatus](#obxgetobserveresultstatus)||
|[getProbability](#obxgetprobability)||
|[getProducersId](#obxgetproducersid)||
|[getReferenceRange](#obxgetreferencerange)||
|[getResponsibleObserver](#obxgetresponsibleobserver)||
|[getUnits](#obxgetunits)||
|[getUserDefinedAccessChecks](#obxgetuserdefinedaccesschecks)||
|[getValueType](#obxgetvaluetype)||
|[setAbnormalFlags](#obxsetabnormalflags)||
|[setDataLastObsNormalValues](#obxsetdatalastobsnormalvalues)||
|[setDateTimeOfTheObservation](#obxsetdatetimeoftheobservation)||
|[setID](#obxsetid)||
|[setNatureOfAbnormalTest](#obxsetnatureofabnormaltest)||
|[setObservationIdentifier](#obxsetobservationidentifier)||
|[setObservationMethod](#obxsetobservationmethod)||
|[setObservationSubId](#obxsetobservationsubid)||
|[setObservationValue](#obxsetobservationvalue)||
|[setObserveResultStatus](#obxsetobserveresultstatus)||
|[setProbability](#obxsetprobability)||
|[setProducersId](#obxsetproducersid)||
|[setReferenceRange](#obxsetreferencerange)||
|[setResponsibleObserver](#obxsetresponsibleobserver)||
|[setUnits](#obxsetunits)||
|[setUserDefinedAccessChecks](#obxsetuserdefinedaccesschecks)||
|[setValueType](#obxsetvaluetype)||

## Inherited methods

| Name | Description |
|------|-------------|
|__construct|Create a segment. A segment may be created with just a name or a name and an array of field
values. The segment name should be a standard HL7 segment (e.g. MSH / PID etc.) that is three characters long, and
upper case. If an array is given, all fields will be filled from that array. Note that for composed fields and
sub-components, the array may hold sub-arrays and sub-sub-arrays. Repeated fields can not be supported the same
way, since we can't distinguish between composed fields and repeated fields.|
|getField|Get the field at index. If the field is a composite field, it returns an array
```php
$field = $seg->getField(9); // Returns a string/null/array depending on what the 9th field is.|
|getFields|Get the fields in the specified range, or all if nothing specified. If only the 'from' value is provided, all
fields from this index till the end of the segment will be returned.|
|getName|Get the name of the segment. This is basically the value at index 0|
|setField|Set the field specified by index to value. Indices start at 1, to stay with the HL7 standard. Trying to set the
value at index 0 has no effect. The value may also be a reference to an array (that may itself contain arrays)
to support composite fields (and sub-components).|
|size|Get the number of fields for this segment, not including the name|



### OBX::getAbnormalFlags  

**Description**

```php
public getAbnormalFlags (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getDataLastObsNormalValues  

**Description**

```php
public getDataLastObsNormalValues (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getDateTimeOfTheObservation  

**Description**

```php
public getDateTimeOfTheObservation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getID  

**Description**

```php
public getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getNatureOfAbnormalTest  

**Description**

```php
public getNatureOfAbnormalTest (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getObservationIdentifier  

**Description**

```php
public getObservationIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getObservationMethod  

**Description**

```php
public getObservationMethod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getObservationSubId  

**Description**

```php
public getObservationSubId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getObservationValue  

**Description**

```php
public getObservationValue (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getObserveResultStatus  

**Description**

```php
public getObserveResultStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getProbability  

**Description**

```php
public getProbability (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getProducersId  

**Description**

```php
public getProducersId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getReferenceRange  

**Description**

```php
public getReferenceRange (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getResponsibleObserver  

**Description**

```php
public getResponsibleObserver (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getUnits  

**Description**

```php
public getUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getUserDefinedAccessChecks  

**Description**

```php
public getUserDefinedAccessChecks (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::getValueType  

**Description**

```php
public getValueType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setAbnormalFlags  

**Description**

```php
public setAbnormalFlags (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setDataLastObsNormalValues  

**Description**

```php
public setDataLastObsNormalValues (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setDateTimeOfTheObservation  

**Description**

```php
public setDateTimeOfTheObservation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setID  

**Description**

```php
public setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setNatureOfAbnormalTest  

**Description**

```php
public setNatureOfAbnormalTest (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setObservationIdentifier  

**Description**

```php
public setObservationIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setObservationMethod  

**Description**

```php
public setObservationMethod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setObservationSubId  

**Description**

```php
public setObservationSubId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setObservationValue  

**Description**

```php
public setObservationValue (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setObserveResultStatus  

**Description**

```php
public setObserveResultStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setProbability  

**Description**

```php
public setProbability (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setProducersId  

**Description**

```php
public setProducersId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setReferenceRange  

**Description**

```php
public setReferenceRange (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setResponsibleObserver  

**Description**

```php
public setResponsibleObserver (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setUnits  

**Description**

```php
public setUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setUserDefinedAccessChecks  

**Description**

```php
public setUserDefinedAccessChecks (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBX::setValueType  

**Description**

```php
public setValueType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**



