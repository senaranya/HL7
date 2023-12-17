# Aranyasen\HL7\Segments\AIL  

AIL segment class

AIL: Appointment Information - Location Resource

The AIL segment contains information about location resources (meeting rooms, operating rooms, examination rooms, or
other locations) that can be scheduled. Resources included in a transaction using this segment are assumed to be
controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not identified
on a schedule request using this segment. Location resources are identified with this specific segment because of the
specific encoding of locations used by the HL7 specification.

Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=AIL  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#ail__destruct)||
|[getAllowSubstitutionCode](#ailgetallowsubstitutioncode)|Get Allow Substitution Code (AIL.11)|
|[getDuration](#ailgetduration)|Get Duration (AIL.9)|
|[getDurationUnits](#ailgetdurationunits)|Get Duration Units (AIL.10)|
|[getFillerStatusCode](#ailgetfillerstatuscode)|Get Filler Status Code (AIL.12)|
|[getID](#ailgetid)|Get ID (AIL.1)|
|[getLocationGroup](#ailgetlocationgroup)|Get Location Group (AIL.5)|
|[getLocationResourceID](#ailgetlocationresourceid)|Get Location Resource ID (AIL.3)|
|[getLocationTypeAIL](#ailgetlocationtypeail)|Get Location Type AIL (AIL.4)|
|[getSegmentActionCode](#ailgetsegmentactioncode)|Get Segment Action Code (AIL.2)|
|[getStartDateTime](#ailgetstartdatetime)|Get Start Date Time (AIL.6)|
|[getStartDateTimeOffset](#ailgetstartdatetimeoffset)|Get Start Date Time Offset (AIL.7)|
|[getStartDateTimeOffsetUnits](#ailgetstartdatetimeoffsetunits)|Get Start Date Time Offset Units (AIL.8)|
|[resetIndex](#ailresetindex)|Reset index of this segment|
|[setAllowSubstitutionCode](#ailsetallowsubstitutioncode)|Set Allow Substitution Code (AIL.11)|
|[setDuration](#ailsetduration)|Set Duration (AIL.9)|
|[setDurationUnits](#ailsetdurationunits)|Set Duration Units (AIL.10)|
|[setFillerStatusCode](#ailsetfillerstatuscode)|Set Filler Status Code (AIL.12)|
|[setID](#ailsetid)|Set ID (AIL.1)|
|[setLocationGroup](#ailsetlocationgroup)|Set Location Group (AIL.5)|
|[setLocationResourceID](#ailsetlocationresourceid)|Set Location Resource ID (AIL.3)|
|[setLocationTypeAIL](#ailsetlocationtypeail)|Set Location Type AIL (AIL.4)|
|[setSegmentActionCode](#ailsetsegmentactioncode)|Set Segment Action Code (AIL.2)|
|[setStartDateTime](#ailsetstartdatetime)|Set Start Date Time (AIL.6)|
|[setStartDateTimeOffset](#ailsetstartdatetimeoffset)|Set Start Date Time Offset (AIL.7)|
|[setStartDateTimeOffsetUnits](#ailsetstartdatetimeoffsetunits)|Set Start Date Time Offset Units (AIL.8)|

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



### AIL::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getAllowSubstitutionCode  

**Description**

```php
public getAllowSubstitutionCode (int $position)
```

Get Allow Substitution Code (AIL.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getDuration  

**Description**

```php
public getDuration (int $position)
```

Get Duration (AIL.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getDurationUnits  

**Description**

```php
public getDurationUnits (int $position)
```

Get Duration Units (AIL.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getFillerStatusCode  

**Description**

```php
public getFillerStatusCode (int $position)
```

Get Filler Status Code (AIL.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getID  

**Description**

```php
public getID (int $position)
```

Get ID (AIL.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getLocationGroup  

**Description**

```php
public getLocationGroup (int $position)
```

Get Location Group (AIL.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getLocationResourceID  

**Description**

```php
public getLocationResourceID (int $position)
```

Get Location Resource ID (AIL.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getLocationTypeAIL  

**Description**

```php
public getLocationTypeAIL (int $position)
```

Get Location Type AIL (AIL.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getSegmentActionCode  

**Description**

```php
public getSegmentActionCode (int $position)
```

Get Segment Action Code (AIL.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getStartDateTime  

**Description**

```php
public getStartDateTime (int $position)
```

Get Start Date Time (AIL.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getStartDateTimeOffset  

**Description**

```php
public getStartDateTimeOffset (int $position)
```

Get Start Date Time Offset (AIL.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### AIL::getStartDateTimeOffsetUnits  

**Description**

```php
public getStartDateTimeOffsetUnits (int $position)
```

Get Start Date Time Offset Units (AIL.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### AIL::resetIndex  

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


### AIL::setAllowSubstitutionCode  

**Description**

```php
public setAllowSubstitutionCode (string|int|array|null $value, int $position)
```

Set Allow Substitution Code (AIL.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### AIL::setDuration  

**Description**

```php
public setDuration (string|int|array|null $value, int $position)
```

Set Duration (AIL.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### AIL::setDurationUnits  

**Description**

```php
public setDurationUnits (string|int|array|null $value, int $position)
```

Set Duration Units (AIL.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### AIL::setFillerStatusCode  

**Description**

```php
public setFillerStatusCode (string|int|array|null $value, int $position)
```

Set Filler Status Code (AIL.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### AIL::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (AIL.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### AIL::setLocationGroup  

**Description**

```php
public setLocationGroup (string|int|array|null $value, int $position)
```

Set Location Group (AIL.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### AIL::setLocationResourceID  

**Description**

```php
public setLocationResourceID (string|int|array|null $value, int $position)
```

Set Location Resource ID (AIL.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### AIL::setLocationTypeAIL  

**Description**

```php
public setLocationTypeAIL (string|int|array|null $value, int $position)
```

Set Location Type AIL (AIL.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### AIL::setSegmentActionCode  

**Description**

```php
public setSegmentActionCode (string|int|array|null $value, int $position)
```

Set Segment Action Code (AIL.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### AIL::setStartDateTime  

**Description**

```php
public setStartDateTime (string|int|array|null $value, int $position)
```

Set Start Date Time (AIL.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### AIL::setStartDateTimeOffset  

**Description**

```php
public setStartDateTimeOffset (string|int|array|null $value, int $position)
```

Set Start Date Time Offset (AIL.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### AIL::setStartDateTimeOffsetUnits  

**Description**

```php
public setStartDateTimeOffsetUnits (string|int|array|null $value, int $position)
```

Set Start Date Time Offset Units (AIL.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />

