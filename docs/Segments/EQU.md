# Aranyasen\HL7\Segments\EQU  

EQU segment class
Ref: https://www.interfaceware.com/hl7-standard/hl7-segment-EQU.html



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAlertLevel](#equgetalertlevel)|Get Alert Level (EQU.4)|
|[getEquipmentInstanceIdentifier](#equgetequipmentinstanceidentifier)|Get Equipment InstanceIdentifier (EQU.1)|
|[getEquipmentState](#equgetequipmentstate)|Get Equipment State (EQU.3)|
|[getEventDateTime](#equgeteventdatetime)|Get Event DateTime (EQU.2)|
|[getLocalRemoteControlState](#equgetlocalremotecontrolstate)|Get Local RemoteControlState (EQU.4)|
|[resetIndex](#equresetindex)|Reset index of this segment|
|[setAlertLevel](#equsetalertlevel)|Set Alert Level (EQU.5)|
|[setEquipmentInstanceIdentifier](#equsetequipmentinstanceidentifier)||
|[setEquipmentState](#equsetequipmentstate)|Set Equipment State (EQU.3)|
|[setEventDateTime](#equseteventdatetime)|Set Event Date Time (EQU.2)|
|[setLocalRemoteControlState](#equsetlocalremotecontrolstate)|Set Local Remote Control State (EQU.4)|

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



### EQU::getAlertLevel  

**Description**

```php
public getAlertLevel (int $position)
```

Get Alert Level (EQU.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### EQU::getEquipmentInstanceIdentifier  

**Description**

```php
public getEquipmentInstanceIdentifier (int $position)
```

Get Equipment InstanceIdentifier (EQU.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### EQU::getEquipmentState  

**Description**

```php
public getEquipmentState (int $position)
```

Get Equipment State (EQU.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### EQU::getEventDateTime  

**Description**

```php
public getEventDateTime (int $position)
```

Get Event DateTime (EQU.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### EQU::getLocalRemoteControlState  

**Description**

```php
public getLocalRemoteControlState (int $position)
```

Get Local RemoteControlState (EQU.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### EQU::resetIndex  

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


### EQU::setAlertLevel  

**Description**

```php
public setAlertLevel (string|int|array|null $value, int $position)
```

Set Alert Level (EQU.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### EQU::setEquipmentInstanceIdentifier  

**Description**

```php
 setEquipmentInstanceIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### EQU::setEquipmentState  

**Description**

```php
public setEquipmentState (string|int|array|null $value, int $position)
```

Set Equipment State (EQU.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### EQU::setEventDateTime  

**Description**

```php
public setEventDateTime (string|int|array|null $value, int $position)
```

Set Event Date Time (EQU.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### EQU::setLocalRemoteControlState  

**Description**

```php
public setLocalRemoteControlState (string|int|array|null $value, int $position)
```

Set Local Remote Control State (EQU.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />

