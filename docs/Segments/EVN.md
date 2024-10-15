# Aranyasen\HL7\Segments\EVN  

EVN segment class
Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/EVN
     https://corepointhealth.com/resource-center/hl7-resources/hl7-evn-event-type-segment



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getDateTimePlannedEvent](#evngetdatetimeplannedevent)|Get Date Time Planned Event (EVN.3)|
|[getEventOccurred](#evngeteventoccurred)|Get Event Occurred (EVN.6)|
|[getEventReasonCode](#evngeteventreasoncode)|Get Event Reason Code (EVN.4)|
|[getEventTypeCode](#evngeteventtypecode)|Get Event Type Code (EVN.1)|
|[getOperatorID](#evngetoperatorid)|Get Operator ID (EVN.5)|
|[getRecordedDateTime](#evngetrecordeddatetime)|Get Recorded Date Time (EVN.2)|
|[setDateTimePlannedEvent](#evnsetdatetimeplannedevent)|Set Date Time Planned Event (EVN.3)|
|[setEventOccurred](#evnseteventoccurred)|Set Event Occurred (EVN.6)|
|[setEventReasonCode](#evnseteventreasoncode)|Set Event Reason Code (EVN.4)|
|[setEventTypeCode](#evnseteventtypecode)|Set Event Type Code (EVN.1)|
|[setOperatorID](#evnsetoperatorid)|Set Operator ID (EVN.5)|
|[setRecordedDateTime](#evnsetrecordeddatetime)|Set Recorded Date Time (EVN.2)|

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



### EVN::getDateTimePlannedEvent  

**Description**

```php
public getDateTimePlannedEvent (int $position)
```

Get Date Time Planned Event (EVN.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### EVN::getEventOccurred  

**Description**

```php
public getEventOccurred (int $position)
```

Get Event Occurred (EVN.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### EVN::getEventReasonCode  

**Description**

```php
public getEventReasonCode (int $position)
```

Get Event Reason Code (EVN.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### EVN::getEventTypeCode  

**Description**

```php
public getEventTypeCode (int $position)
```

Get Event Type Code (EVN.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### EVN::getOperatorID  

**Description**

```php
public getOperatorID (int $position)
```

Get Operator ID (EVN.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### EVN::getRecordedDateTime  

**Description**

```php
public getRecordedDateTime (int $position)
```

Get Recorded Date Time (EVN.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### EVN::setDateTimePlannedEvent  

**Description**

```php
public setDateTimePlannedEvent (string|int|array|null $value, int $position)
```

Set Date Time Planned Event (EVN.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### EVN::setEventOccurred  

**Description**

```php
public setEventOccurred (string|int|array|null $value, int $position)
```

Set Event Occurred (EVN.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### EVN::setEventReasonCode  

**Description**

```php
public setEventReasonCode (string|int|array|null $value, int $position)
```

Set Event Reason Code (EVN.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### EVN::setEventTypeCode  

**Description**

```php
public setEventTypeCode (string|int|array|null $value, int $position)
```

Set Event Type Code (EVN.1) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### EVN::setOperatorID  

**Description**

```php
public setOperatorID (string|int|array|null $value, int $position)
```

Set Operator ID (EVN.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### EVN::setRecordedDateTime  

**Description**

```php
public setRecordedDateTime (string|int|array|null $value, int $position)
```

Set Recorded Date Time (EVN.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />

