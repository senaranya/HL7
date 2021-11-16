# Aranyasen\HL7\Segments\AIP  

AIP segment class

AIP: Appointment Information - Personnel Resource
The AIP segment contains information about the personnel types that can be scheduled. Personnel included in a
transaction using this segment are assumed to be controlled by a schedule on a schedule filler application.
Personnel not controlled by a schedule are not identified on a schedule request using this segment. The kinds of
personnel described on this segment include any healthcare provider in the institution controlled by a schedule (for
example: technicians, physicians, nurses, surgeons, anesthesiologists, or CRNAs).

Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/AIP  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#aip__destruct)||
|[getAllowSubstitutionCode](#aipgetallowsubstitutioncode)||
|[getDuration](#aipgetduration)||
|[getDurationUnits](#aipgetdurationunits)||
|[getFillerStatusCode](#aipgetfillerstatuscode)||
|[getID](#aipgetid)||
|[getPersonnelResourceID](#aipgetpersonnelresourceid)||
|[getResourceGroup](#aipgetresourcegroup)||
|[getResourceType](#aipgetresourcetype)||
|[getSegmentActionCode](#aipgetsegmentactioncode)||
|[getStartDateTime](#aipgetstartdatetime)||
|[getStartDateTimeOffset](#aipgetstartdatetimeoffset)||
|[getStartDateTimeOffsetUnits](#aipgetstartdatetimeoffsetunits)||
|[resetIndex](#aipresetindex)|Reset index of this segment|
|[setAllowSubstitutionCode](#aipsetallowsubstitutioncode)||
|[setDuration](#aipsetduration)||
|[setDurationUnits](#aipsetdurationunits)||
|[setFillerStatusCode](#aipsetfillerstatuscode)||
|[setID](#aipsetid)||
|[setPersonnelResourceID](#aipsetpersonnelresourceid)||
|[setResourceGroup](#aipsetresourcegroup)||
|[setResourceType](#aipsetresourcetype)||
|[setSegmentActionCode](#aipsetsegmentactioncode)||
|[setStartDateTime](#aipsetstartdatetime)||
|[setStartDateTimeOffset](#aipsetstartdatetimeoffset)||
|[setStartDateTimeOffsetUnits](#aipsetstartdatetimeoffsetunits)||

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



### AIP::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getAllowSubstitutionCode  

**Description**

```php
 getAllowSubstitutionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getDuration  

**Description**

```php
 getDuration (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getDurationUnits  

**Description**

```php
 getDurationUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getFillerStatusCode  

**Description**

```php
 getFillerStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getPersonnelResourceID  

**Description**

```php
 getPersonnelResourceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getResourceGroup  

**Description**

```php
 getResourceGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getResourceType  

**Description**

```php
 getResourceType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getSegmentActionCode  

**Description**

```php
 getSegmentActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getStartDateTime  

**Description**

```php
 getStartDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getStartDateTimeOffset  

**Description**

```php
 getStartDateTimeOffset (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::getStartDateTimeOffsetUnits  

**Description**

```php
 getStartDateTimeOffsetUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::resetIndex  

**Description**

```php
public static resetIndex (int $index)
```

Reset index of this segment 

 

**Parameters**

* `(int) $index`

**Return Values**

`void`


<hr />


### AIP::setAllowSubstitutionCode  

**Description**

```php
 setAllowSubstitutionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setDuration  

**Description**

```php
 setDuration (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setDurationUnits  

**Description**

```php
 setDurationUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setFillerStatusCode  

**Description**

```php
 setFillerStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setPersonnelResourceID  

**Description**

```php
 setPersonnelResourceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setResourceGroup  

**Description**

```php
 setResourceGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setResourceType  

**Description**

```php
 setResourceType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setSegmentActionCode  

**Description**

```php
 setSegmentActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setStartDateTime  

**Description**

```php
 setStartDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setStartDateTimeOffset  

**Description**

```php
 setStartDateTimeOffset (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIP::setStartDateTimeOffsetUnits  

**Description**

```php
 setStartDateTimeOffsetUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

