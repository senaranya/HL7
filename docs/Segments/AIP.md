# Aranyasen\HL7\Segments\AIP  

AIP segment class

AIP: Appointment Information - Personnel Resource
The AIP segment contains information about the personnel types that can be scheduled. Personnel included in a
transaction using this segment are assumed to be controlled by a schedule on a schedule filler application.
Personnel not controlled by a schedule are not identified on a schedule request using this segment. The kinds of
personnel described on this segment include any healthcare provider in the institution controlled by a schedule (for
example: technicians, physicians, nurses, surgeons, anesthesiologists, or CRNAs).


Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=AIP  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#aip__destruct)||
|[getAllowSubstitutionCode](#aipgetallowsubstitutioncode)|Get Allow SubstitutionCode (AIP.11)|
|[getDuration](#aipgetduration)|Get Duration (AIP.9)|
|[getDurationUnits](#aipgetdurationunits)|Get Duration Units (AIP.10)|
|[getFillerStatusCode](#aipgetfillerstatuscode)|Get Filler StatusCode (AIP.12)|
|[getID](#aipgetid)|Get ID (AIP.1)|
|[getPersonnelResourceID](#aipgetpersonnelresourceid)|Get Personnel ResourceID (AIP.3)|
|[getResourceGroup](#aipgetresourcegroup)|Get Resource Group (AIP.5)|
|[getResourceType](#aipgetresourcetype)|Get Resource Type (AIP.4)|
|[getSegmentActionCode](#aipgetsegmentactioncode)|Get Segment ActionCode (AIP.2)|
|[getStartDateTime](#aipgetstartdatetime)|Get Start DateTime (AIP.6)|
|[getStartDateTimeOffset](#aipgetstartdatetimeoffset)|Get Start DateTimeOffset (AIP.7)|
|[getStartDateTimeOffsetUnits](#aipgetstartdatetimeoffsetunits)|Get Start DateTimeOffsetUnits (AIP.8)|
|[resetIndex](#aipresetindex)|Reset index of this segment|
|[setAllowSubstitutionCode](#aipsetallowsubstitutioncode)|Set Allow Substitution Code (AIP.11)|
|[setDuration](#aipsetduration)|Set Duration (AIP.9)|
|[setDurationUnits](#aipsetdurationunits)|Set Duration Units (AIP.10)|
|[setFillerStatusCode](#aipsetfillerstatuscode)|Set Filler Status Code (AIP.12)|
|[setID](#aipsetid)|Set ID (AIP.1)|
|[setPersonnelResourceID](#aipsetpersonnelresourceid)|Set Personnel Resource ID (AIP.3)|
|[setResourceGroup](#aipsetresourcegroup)|Set Resource Group (AIP.5)|
|[setResourceType](#aipsetresourcetype)|Set Resource Type (AIP.4)|
|[setSegmentActionCode](#aipsetsegmentactioncode)|Set Segment Action Code (AIP.2)|
|[setStartDateTime](#aipsetstartdatetime)|Set Start Date Time (AIP.6)|
|[setStartDateTimeOffset](#aipsetstartdatetimeoffset)|Set Start Date Time Offset (AIP.7)|
|[setStartDateTimeOffsetUnits](#aipsetstartdatetimeoffsetunits)|Set Start Date Time Offset Units (AIP.8)|

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
public getAllowSubstitutionCode (int $position)
```

Get Allow SubstitutionCode (AIP.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getDuration  

**Description**

```php
public getDuration (int $position)
```

Get Duration (AIP.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getDurationUnits  

**Description**

```php
public getDurationUnits (int $position)
```

Get Duration Units (AIP.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getFillerStatusCode  

**Description**

```php
public getFillerStatusCode (int $position)
```

Get Filler StatusCode (AIP.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getID  

**Description**

```php
public getID (int $position)
```

Get ID (AIP.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getPersonnelResourceID  

**Description**

```php
public getPersonnelResourceID (int $position)
```

Get Personnel ResourceID (AIP.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getResourceGroup  

**Description**

```php
public getResourceGroup (int $position)
```

Get Resource Group (AIP.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getResourceType  

**Description**

```php
public getResourceType (int $position)
```

Get Resource Type (AIP.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getSegmentActionCode  

**Description**

```php
public getSegmentActionCode (int $position)
```

Get Segment ActionCode (AIP.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getStartDateTime  

**Description**

```php
public getStartDateTime (int $position)
```

Get Start DateTime (AIP.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getStartDateTimeOffset  

**Description**

```php
public getStartDateTimeOffset (int $position)
```

Get Start DateTimeOffset (AIP.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### AIP::getStartDateTimeOffsetUnits  

**Description**

```php
public getStartDateTimeOffsetUnits (int $position)
```

Get Start DateTimeOffsetUnits (AIP.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### AIP::resetIndex  

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


### AIP::setAllowSubstitutionCode  

**Description**

```php
public setAllowSubstitutionCode (string|int|array|null $value, int $position)
```

Set Allow Substitution Code (AIP.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### AIP::setDuration  

**Description**

```php
public setDuration (string|int|array|null $value, int $position)
```

Set Duration (AIP.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### AIP::setDurationUnits  

**Description**

```php
public setDurationUnits (string|int|array|null $value, int $position)
```

Set Duration Units (AIP.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### AIP::setFillerStatusCode  

**Description**

```php
public setFillerStatusCode (string|int|array|null $value, int $position)
```

Set Filler Status Code (AIP.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### AIP::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (AIP.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### AIP::setPersonnelResourceID  

**Description**

```php
public setPersonnelResourceID (string|int|array|null $value, int $position)
```

Set Personnel Resource ID (AIP.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### AIP::setResourceGroup  

**Description**

```php
public setResourceGroup (string|int|array|null $value, int $position)
```

Set Resource Group (AIP.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### AIP::setResourceType  

**Description**

```php
public setResourceType (string|int|array|null $value, int $position)
```

Set Resource Type (AIP.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### AIP::setSegmentActionCode  

**Description**

```php
public setSegmentActionCode (string|int|array|null $value, int $position)
```

Set Segment Action Code (AIP.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### AIP::setStartDateTime  

**Description**

```php
public setStartDateTime (string|int|array|null $value, int $position)
```

Set Start Date Time (AIP.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### AIP::setStartDateTimeOffset  

**Description**

```php
public setStartDateTimeOffset (string|int|array|null $value, int $position)
```

Set Start Date Time Offset (AIP.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### AIP::setStartDateTimeOffsetUnits  

**Description**

```php
public setStartDateTimeOffsetUnits (string|int|array|null $value, int $position)
```

Set Start Date Time Offset Units (AIP.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />

