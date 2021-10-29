# Aranyasen\HL7\Segments\RGS  

RGS segment class

RGS - Resource group segment
The RGS segment is used to identify relationships between resources identified for a scheduled event.
This segment can be used, on a site specified basis, to identify groups of resources that are used together
within a scheduled event, or to describe some other relationship between resources. To specify related groups
of resources within a message, begin each group with an RGS segment, and then follow that RGS with one or more
of the Appointment Information segments (AIG, AIL, AIS, or AIP).

If a message does not require any grouping of resources, then specify a single RGS in the message, and follow it
with all of the Appointment Information segments for the scheduled event. (At least one RGS segment is required in
each message – even if no grouping of resources is required – to allow parsers to properly understand the message.)

Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/RGS  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#rgs__destruct)||
|[getID](#rgsgetid)||
|[getResourceGroupID](#rgsgetresourcegroupid)||
|[getSegmentActionCode](#rgsgetsegmentactioncode)||
|[resetIndex](#rgsresetindex)|Reset index of this segment|
|[setID](#rgssetid)||
|[setResourceGroupID](#rgssetresourcegroupid)||
|[setSegmentActionCode](#rgssetsegmentactioncode)||

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



### RGS::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### RGS::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### RGS::getResourceGroupID  

**Description**

```php
 getResourceGroupID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### RGS::getSegmentActionCode  

**Description**

```php
 getSegmentActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### RGS::resetIndex  

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


### RGS::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### RGS::setResourceGroupID  

**Description**

```php
 setResourceGroupID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### RGS::setSegmentActionCode  

**Description**

```php
 setSegmentActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

