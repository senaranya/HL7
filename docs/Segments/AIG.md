# Aranyasen\HL7\Segments\AIG  

AIG segment class

AIG: Appointment information - general resource segment
The AIG segment contains information about various kinds of resources (other than those with specifically defined
segments in this chapter) that can be scheduled. Resources included in a transaction using this segment are assumed
to be controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not
identified on a schedule request using this segment. Resources described by this segment are general kinds of
resources, such as equipment, that are identified with a simple identification code.

Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/AIG  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#aig__destruct)||
|[getAllowSubstitutionCode](#aiggetallowsubstitutioncode)||
|[getDuration](#aiggetduration)||
|[getDurationUnits](#aiggetdurationunits)||
|[getFillerStatusCode](#aiggetfillerstatuscode)||
|[getID](#aiggetid)||
|[getResourceGroup](#aiggetresourcegroup)||
|[getResourceID](#aiggetresourceid)||
|[getResourceQuantity](#aiggetresourcequantity)||
|[getResourceQuantityUnits](#aiggetresourcequantityunits)||
|[getResourceType](#aiggetresourcetype)||
|[getSegmentActionCode](#aiggetsegmentactioncode)||
|[getStartDateTime](#aiggetstartdatetime)||
|[getStartDateTimeOffset](#aiggetstartdatetimeoffset)||
|[getStartDateTimeOffsetUnits](#aiggetstartdatetimeoffsetunits)||
|[resetIndex](#aigresetindex)|Reset index of this segment|
|[setAllowSubstitutionCode](#aigsetallowsubstitutioncode)||
|[setDuration](#aigsetduration)||
|[setDurationUnits](#aigsetdurationunits)||
|[setFillerStatusCode](#aigsetfillerstatuscode)||
|[setID](#aigsetid)||
|[setResourceGroup](#aigsetresourcegroup)||
|[setResourceID](#aigsetresourceid)||
|[setResourceQuantity](#aigsetresourcequantity)||
|[setResourceQuantityUnits](#aigsetresourcequantityunits)||
|[setResourceType](#aigsetresourcetype)||
|[setSegmentActionCode](#aigsetsegmentactioncode)|Set the Action Code (A,U,D).|
|[setStartDateTime](#aigsetstartdatetime)||
|[setStartDateTimeOffset](#aigsetstartdatetimeoffset)||
|[setStartDateTimeOffsetUnits](#aigsetstartdatetimeoffsetunits)||

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
 getAllowSubstitutionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getDuration  

**Description**

```php
 getDuration (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getDurationUnits  

**Description**

```php
 getDurationUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getFillerStatusCode  

**Description**

```php
 getFillerStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getResourceGroup  

**Description**

```php
 getResourceGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getResourceID  

**Description**

```php
 getResourceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getResourceQuantity  

**Description**

```php
 getResourceQuantity (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getResourceQuantityUnits  

**Description**

```php
 getResourceQuantityUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getResourceType  

**Description**

```php
 getResourceType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getSegmentActionCode  

**Description**

```php
 getSegmentActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getStartDateTime  

**Description**

```php
 getStartDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getStartDateTimeOffset  

**Description**

```php
 getStartDateTimeOffset (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::getStartDateTimeOffsetUnits  

**Description**

```php
 getStartDateTimeOffsetUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::resetIndex  

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


### AIG::setAllowSubstitutionCode  

**Description**

```php
 setAllowSubstitutionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setDuration  

**Description**

```php
 setDuration (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setDurationUnits  

**Description**

```php
 setDurationUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setFillerStatusCode  

**Description**

```php
 setFillerStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setResourceGroup  

**Description**

```php
 setResourceGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setResourceID  

**Description**

```php
 setResourceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setResourceQuantity  

**Description**

```php
 setResourceQuantity (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setResourceQuantityUnits  

**Description**

```php
 setResourceQuantityUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setResourceType  

**Description**

```php
 setResourceType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setSegmentActionCode  

**Description**

```php
public setSegmentActionCode (string $value, int $position)
```

Set the Action Code (A,U,D). 

 

**Parameters**

* `(string) $value`
: Can be A (Add / Insert), U (Update), D (Delete).  
Ref. https://hl7-definition.caristix.com/v2/HL7v2.3.1/Tables/0206  
* `(int) $position`

**Return Values**

`bool`




<hr />


### AIG::setStartDateTime  

**Description**

```php
 setStartDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setStartDateTimeOffset  

**Description**

```php
 setStartDateTimeOffset (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIG::setStartDateTimeOffsetUnits  

**Description**

```php
 setStartDateTimeOffsetUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

