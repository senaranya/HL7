# Aranyasen\HL7\Segments\RGS  

RGS segment class
Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=RGS



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#rgs__destruct)||
|[getID](#rgsgetid)|Get ID (RGS.1)|
|[getResourceGroupID](#rgsgetresourcegroupid)|Get Resource Group ID (RGS.3)|
|[getSegmentActionCode](#rgsgetsegmentactioncode)|Get Segment Action Code (RGS.2)|
|[resetIndex](#rgsresetindex)|Reset index of this segment|
|[setID](#rgssetid)|Set ID (RGS.1)|
|[setResourceGroupID](#rgssetresourcegroupid)|Set Resource Group ID (RGS.3)|
|[setSegmentActionCode](#rgssetsegmentactioncode)|Set Segment Action Code (RGS.2)|

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
public getID (int $position)
```

Get ID (RGS.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### RGS::getResourceGroupID  

**Description**

```php
public getResourceGroupID (int $position)
```

Get Resource Group ID (RGS.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### RGS::getSegmentActionCode  

**Description**

```php
public getSegmentActionCode (int $position)
```

Get Segment Action Code (RGS.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### RGS::resetIndex  

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


### RGS::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (RGS.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### RGS::setResourceGroupID  

**Description**

```php
public setResourceGroupID (string|int|array|null $value, int $position)
```

Set Resource Group ID (RGS.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### RGS::setSegmentActionCode  

**Description**

```php
public setSegmentActionCode (string|int|array|null $value, int $position)
```

Set Segment Action Code (RGS.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />

