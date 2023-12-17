# Aranyasen\HL7\Segments\MSA  

MSA: Message acknowledgement segment
Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3/segment/MSA



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAcknowledgementCode](#msagetacknowledgementcode)|Get Acknowledgement Code (MSA.1)|
|[getDelayedAcknowledgementType](#msagetdelayedacknowledgementtype)|Get Delayed AcknowledgementType (MSA.5)|
|[getErrorCondition](#msageterrorcondition)|Get Error Condition (MSA.6)|
|[getExpectedSequenceNumber](#msagetexpectedsequencenumber)|Get Expected SequenceNumber (MSA.4)|
|[getMessageControlID](#msagetmessagecontrolid)|Get Message ControlID (MSA.2)|
|[getTextMessage](#msagettextmessage)|Get Text Message (MSA.3)|
|[setAcknowledgementCode](#msasetacknowledgementcode)|Set Acknowledgement Code (MSA.1)|
|[setDelayedAcknowledgementType](#msasetdelayedacknowledgementtype)|Set Delayed Acknowledgement Type (MSA.5)|
|[setErrorCondition](#msaseterrorcondition)|Set Error Condition (MSA.6)|
|[setExpectedSequenceNumber](#msasetexpectedsequencenumber)|Set Expected Sequence Number (MSA.4)|
|[setMessageControlID](#msasetmessagecontrolid)|Set Message Control ID (MSA.2)|
|[setTextMessage](#msasettextmessage)|Set Text Message (MSA.3)|

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



### MSA::getAcknowledgementCode  

**Description**

```php
public getAcknowledgementCode (int $position)
```

Get Acknowledgement Code (MSA.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### MSA::getDelayedAcknowledgementType  

**Description**

```php
public getDelayedAcknowledgementType (int $position)
```

Get Delayed AcknowledgementType (MSA.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### MSA::getErrorCondition  

**Description**

```php
public getErrorCondition (int $position)
```

Get Error Condition (MSA.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### MSA::getExpectedSequenceNumber  

**Description**

```php
public getExpectedSequenceNumber (int $position)
```

Get Expected SequenceNumber (MSA.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### MSA::getMessageControlID  

**Description**

```php
public getMessageControlID (int $position)
```

Get Message ControlID (MSA.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### MSA::getTextMessage  

**Description**

```php
public getTextMessage (int $position)
```

Get Text Message (MSA.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### MSA::setAcknowledgementCode  

**Description**

```php
public setAcknowledgementCode (string|int|array|null $value, int $position)
```

Set Acknowledgement Code (MSA.1) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### MSA::setDelayedAcknowledgementType  

**Description**

```php
public setDelayedAcknowledgementType (string|int|array|null $value, int $position)
```

Set Delayed Acknowledgement Type (MSA.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### MSA::setErrorCondition  

**Description**

```php
public setErrorCondition (string|int|array|null $value, int $position)
```

Set Error Condition (MSA.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### MSA::setExpectedSequenceNumber  

**Description**

```php
public setExpectedSequenceNumber (string|int|array|null $value, int $position)
```

Set Expected Sequence Number (MSA.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### MSA::setMessageControlID  

**Description**

```php
public setMessageControlID (string|int|array|null $value, int $position)
```

Set Message Control ID (MSA.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### MSA::setTextMessage  

**Description**

```php
public setTextMessage (string|int|array|null $value, int $position)
```

Set Text Message (MSA.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />

