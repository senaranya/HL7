# Aranyasen\HL7\Segments\AIL  

AIL segment class

AIL: Appointment Information - Location Resource

The AIL segment contains information about location resources (meeting rooms, operating rooms, examination rooms, or
other locations) that can be scheduled. Resources included in a transaction using this segment are assumed to be
controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not identified
on a schedule request using this segment. Location resources are identified with this specific segment because of the
specific encoding of locations used by the HL7 specification.

Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/AIL  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#ail__destruct)||
|[getAllowSubstitutionCode](#ailgetallowsubstitutioncode)||
|[getDuration](#ailgetduration)||
|[getDurationUnits](#ailgetdurationunits)||
|[getFillerStatusCode](#ailgetfillerstatuscode)||
|[getID](#ailgetid)||
|[getLocationGroup](#ailgetlocationgroup)||
|[getLocationResourceID](#ailgetlocationresourceid)||
|[getLocationTypeAIL](#ailgetlocationtypeail)||
|[getSegmentActionCode](#ailgetsegmentactioncode)||
|[getStartDateTime](#ailgetstartdatetime)||
|[getStartDateTimeOffset](#ailgetstartdatetimeoffset)||
|[getStartDateTimeOffsetUnits](#ailgetstartdatetimeoffsetunits)||
|[resetIndex](#ailresetindex)|Reset index of this segment|
|[setAllowSubstitutionCode](#ailsetallowsubstitutioncode)||
|[setDuration](#ailsetduration)||
|[setDurationUnits](#ailsetdurationunits)||
|[setFillerStatusCode](#ailsetfillerstatuscode)||
|[setID](#ailsetid)||
|[setLocationGroup](#ailsetlocationgroup)||
|[setLocationResourceID](#ailsetlocationresourceid)||
|[setLocationTypeAIL](#ailsetlocationtypeail)||
|[setSegmentActionCode](#ailsetsegmentactioncode)||
|[setStartDateTime](#ailsetstartdatetime)||
|[setStartDateTimeOffset](#ailsetstartdatetimeoffset)||
|[setStartDateTimeOffsetUnits](#ailsetstartdatetimeoffsetunits)||

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
 getAllowSubstitutionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getDuration  

**Description**

```php
 getDuration (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getDurationUnits  

**Description**

```php
 getDurationUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getFillerStatusCode  

**Description**

```php
 getFillerStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getLocationGroup  

**Description**

```php
 getLocationGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getLocationResourceID  

**Description**

```php
 getLocationResourceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getLocationTypeAIL  

**Description**

```php
 getLocationTypeAIL (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getSegmentActionCode  

**Description**

```php
 getSegmentActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getStartDateTime  

**Description**

```php
 getStartDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getStartDateTimeOffset  

**Description**

```php
 getStartDateTimeOffset (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::getStartDateTimeOffsetUnits  

**Description**

```php
 getStartDateTimeOffsetUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::resetIndex  

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


### AIL::setAllowSubstitutionCode  

**Description**

```php
 setAllowSubstitutionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setDuration  

**Description**

```php
 setDuration (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setDurationUnits  

**Description**

```php
 setDurationUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setFillerStatusCode  

**Description**

```php
 setFillerStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setLocationGroup  

**Description**

```php
 setLocationGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setLocationResourceID  

**Description**

```php
 setLocationResourceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setLocationTypeAIL  

**Description**

```php
 setLocationTypeAIL (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setSegmentActionCode  

**Description**

```php
 setSegmentActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setStartDateTime  

**Description**

```php
 setStartDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setStartDateTimeOffset  

**Description**

```php
 setStartDateTimeOffset (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### AIL::setStartDateTimeOffsetUnits  

**Description**

```php
 setStartDateTimeOffsetUnits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

