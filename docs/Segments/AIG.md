# Aranyasen\HL7\Segments\AIG  

AIG segment class

AIG: Appointment information - general resource segment
The AIG segment contains information about various kinds of resources (other than those with specifically defined
segments in this chapter) that can be scheduled. Resources included in a transaction using this segment are assumed
to be controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not
identified on a schedule request using this segment. Resources described by this segment are general kinds of
resources, such as equipment, that are identified with a simple identification code.

Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.3.1&segment=AIG  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#aig__destruct)||
|[getAllowSubstitutionCode](#aiggetallowsubstitutioncode)|Get Allow SubstitutionCode (AIG.13)|
|[getDuration](#aiggetduration)|Get Duration (AIG.11)|
|[getDurationUnits](#aiggetdurationunits)|Get Duration Units (AIG.12)|
|[getFillerStatusCode](#aiggetfillerstatuscode)|Get Filler StatusCode (AIG.14)|
|[getID](#aiggetid)|Get ID (AIG.1)|
|[getResourceGroup](#aiggetresourcegroup)|Get Resource Group (AIG.5)|
|[getResourceID](#aiggetresourceid)|Get Resource ID (AIG.3)|
|[getResourceQuantity](#aiggetresourcequantity)|Get Resource Quantity (AIG.6)|
|[getResourceQuantityUnits](#aiggetresourcequantityunits)|Get Resource QuantityUnits (AIG.7)|
|[getResourceType](#aiggetresourcetype)|Get Resource Type (AIG.4)|
|[getSegmentActionCode](#aiggetsegmentactioncode)|Get Segment ActionCode (AIG.2)|
|[getStartDateTime](#aiggetstartdatetime)|Get Start DateTime (AIG.8)|
|[getStartDateTimeOffset](#aiggetstartdatetimeoffset)|Get Start DateTimeOffset (AIG.9)|
|[getStartDateTimeOffsetUnits](#aiggetstartdatetimeoffsetunits)|Get Start DateTimeOffsetUnits (AIG.10)|
|[resetIndex](#aigresetindex)|Reset index of this segment|
|[setAllowSubstitutionCode](#aigsetallowsubstitutioncode)|Set Allow Substitution Code (AIG.13)|
|[setDuration](#aigsetduration)|Set Duration (AIG.11)|
|[setDurationUnits](#aigsetdurationunits)|Set Duration Units (AIG.12)|
|[setFillerStatusCode](#aigsetfillerstatuscode)|Set Filler Status Code (AIG.14)|
|[setID](#aigsetid)|Set ID (AIG.1)|
|[setResourceGroup](#aigsetresourcegroup)|Set Resource Group (AIG.5)|
|[setResourceID](#aigsetresourceid)|Set Resource ID (AIG.3)|
|[setResourceQuantity](#aigsetresourcequantity)|Set Resource Quantity (AIG.6)|
|[setResourceQuantityUnits](#aigsetresourcequantityunits)|Set Resource Quantity Units (AIG.7)|
|[setResourceType](#aigsetresourcetype)|Set Resource Type (AIG.4)|
|[setSegmentActionCode](#aigsetsegmentactioncode)|Set Segment Action Code (AIG.2)|
|[setStartDateTime](#aigsetstartdatetime)|Set Start Date Time (AIG.8)|
|[setStartDateTimeOffset](#aigsetstartdatetimeoffset)|Set Start Date Time Offset (AIG.9)|
|[setStartDateTimeOffsetUnits](#aigsetstartdatetimeoffsetunits)|Set Start Date Time Offset Units (AIG.10)|

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



### AIG::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getAllowSubstitutionCode  

**Description**

```php
public getAllowSubstitutionCode (int $position)
```

Get Allow SubstitutionCode (AIG.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getDuration  

**Description**

```php
public getDuration (int $position)
```

Get Duration (AIG.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getDurationUnits  

**Description**

```php
public getDurationUnits (int $position)
```

Get Duration Units (AIG.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getFillerStatusCode  

**Description**

```php
public getFillerStatusCode (int $position)
```

Get Filler StatusCode (AIG.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getID  

**Description**

```php
public getID (int $position)
```

Get ID (AIG.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getResourceGroup  

**Description**

```php
public getResourceGroup (int $position)
```

Get Resource Group (AIG.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getResourceID  

**Description**

```php
public getResourceID (int $position)
```

Get Resource ID (AIG.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getResourceQuantity  

**Description**

```php
public getResourceQuantity (int $position)
```

Get Resource Quantity (AIG.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getResourceQuantityUnits  

**Description**

```php
public getResourceQuantityUnits (int $position)
```

Get Resource QuantityUnits (AIG.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getResourceType  

**Description**

```php
public getResourceType (int $position)
```

Get Resource Type (AIG.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getSegmentActionCode  

**Description**

```php
public getSegmentActionCode (int $position)
```

Get Segment ActionCode (AIG.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getStartDateTime  

**Description**

```php
public getStartDateTime (int $position)
```

Get Start DateTime (AIG.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getStartDateTimeOffset  

**Description**

```php
public getStartDateTimeOffset (int $position)
```

Get Start DateTimeOffset (AIG.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### AIG::getStartDateTimeOffsetUnits  

**Description**

```php
public getStartDateTimeOffsetUnits (int $position)
```

Get Start DateTimeOffsetUnits (AIG.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### AIG::resetIndex  

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


### AIG::setAllowSubstitutionCode  

**Description**

```php
public setAllowSubstitutionCode (string|int|array|null $value, int $position)
```

Set Allow Substitution Code (AIG.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### AIG::setDuration  

**Description**

```php
public setDuration (string|int|array|null $value, int $position)
```

Set Duration (AIG.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### AIG::setDurationUnits  

**Description**

```php
public setDurationUnits (string|int|array|null $value, int $position)
```

Set Duration Units (AIG.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### AIG::setFillerStatusCode  

**Description**

```php
public setFillerStatusCode (string|int|array|null $value, int $position)
```

Set Filler Status Code (AIG.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### AIG::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (AIG.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### AIG::setResourceGroup  

**Description**

```php
public setResourceGroup (string|int|array|null $value, int $position)
```

Set Resource Group (AIG.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### AIG::setResourceID  

**Description**

```php
public setResourceID (string|int|array|null $value, int $position)
```

Set Resource ID (AIG.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### AIG::setResourceQuantity  

**Description**

```php
public setResourceQuantity (string|int|array|null $value, int $position)
```

Set Resource Quantity (AIG.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### AIG::setResourceQuantityUnits  

**Description**

```php
public setResourceQuantityUnits (string|int|array|null $value, int $position)
```

Set Resource Quantity Units (AIG.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### AIG::setResourceType  

**Description**

```php
public setResourceType (string|int|array|null $value, int $position)
```

Set Resource Type (AIG.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### AIG::setSegmentActionCode  

**Description**

```php
public setSegmentActionCode (string|int|array|null $value, int $position)
```

Set Segment Action Code (AIG.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### AIG::setStartDateTime  

**Description**

```php
public setStartDateTime (string|int|array|null $value, int $position)
```

Set Start Date Time (AIG.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### AIG::setStartDateTimeOffset  

**Description**

```php
public setStartDateTimeOffset (string|int|array|null $value, int $position)
```

Set Start Date Time Offset (AIG.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### AIG::setStartDateTimeOffsetUnits  

**Description**

```php
public setStartDateTimeOffsetUnits (string|int|array|null $value, int $position)
```

Set Start Date Time Offset Units (AIG.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />

