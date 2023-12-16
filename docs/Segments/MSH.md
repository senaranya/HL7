# Aranyasen\HL7\Segments\MSH  

MSH (message header) segment class

Usage:
```php
$seg = new MSH();

$seg->setField(9, "ADT^A24");
echo $seg->getField(1);
```

The MSH is an implementation of the Segment class. The MSH segment is a bit different from other segments, in that
the first field is the field separator after the segment name. Other fields thus start counting from 2! The setting
for the field separator for a whole message can be changed by the setField method on index 1 of the MSH for that
message.  The MSH segment also contains the default settings for field 2, COMPONENT_SEPARATOR, REPETITION_SEPARATOR,
ESCAPE_CHARACTER and SUBCOMPONENT_SEPARATOR. These fields default to ^, ~, \ and & respectively.

Reference: https://corepointhealth.com/resource-center/hl7-resources/hl7-msh-message-header  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getDateTimeOfMessage](#mshgetdatetimeofmessage)|Get Date TimeOfMessage (OBR.7)|
|[getMessageControlId](#mshgetmessagecontrolid)|Get Message ControlId (OBR.10)|
|[getMessageType](#mshgetmessagetype)|Get Message Type (OBR.9)|
|[getProcessingId](#mshgetprocessingid)|Get Processing Id (OBR.11)|
|[getReceivingApplication](#mshgetreceivingapplication)|Get Receiving Application (OBR.5)|
|[getReceivingFacility](#mshgetreceivingfacility)|Get Receiving Facility (OBR.6)|
|[getSendingApplication](#mshgetsendingapplication)|Get Sending Application (OBR.3)|
|[getSendingFacility](#mshgetsendingfacility)|Get Sending Facility (OBR.4)|
|[getTriggerEvent](#mshgettriggerevent)|Get Trigger Event (OBR.9)|
|[getVersionId](#mshgetversionid)|Get Version Id (OBR.12)|
|[setAcceptAcknowledgementType](#mshsetacceptacknowledgementtype)|Set Accept AcknowledgementType (OBR.15)|
|[setApplicationAcknowledgementType](#mshsetapplicationacknowledgementtype)|Set Application AcknowledgementType (OBR.16)|
|[setCharacterSet](#mshsetcharacterset)|Set Character Set (OBR.18)|
|[setContinuationPointer](#mshsetcontinuationpointer)|Set Continuation Pointer (OBR.14)|
|[setCountryCode](#mshsetcountrycode)|Set Country Code (OBR.17)|
|[setDateTimeOfMessage](#mshsetdatetimeofmessage)|Set Date TimeOfMessage (OBR.7)|
|[setMessageControlId](#mshsetmessagecontrolid)|Set Message ControlId (OBR.10)|
|[setMessageType](#mshsetmessagetype)|Sets message type to MSH segment. (OBR.9)|
|[setPrincipalLanguage](#mshsetprincipallanguage)|Set Principal Language (OBR.19)|
|[setProcessingId](#mshsetprocessingid)|Set Processing Id (OBR.11)|
|[setReceivingApplication](#mshsetreceivingapplication)|Set Receiving Application (OBR.5)|
|[setReceivingFacility](#mshsetreceivingfacility)|Set Receiving Facility (OBR.6)|
|[setSecurity](#mshsetsecurity)|Set Security (OBR.8)|
|[setSendingApplication](#mshsetsendingapplication)|Set Sending Application (OBR.3)|
|[setSendingFacility](#mshsetsendingfacility)|Set Sending Facility (OBR.4)|
|[setSequenceNumber](#mshsetsequencenumber)|Set Sequence Number (OBR.13)|
|[setTriggerEvent](#mshsettriggerevent)|Sets trigger event to MSH segment. (OBR.9)|
|[setVersionId](#mshsetversionid)|Set Version Id (OBR.12)|

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



### MSH::getDateTimeOfMessage  

**Description**

```php
public getDateTimeOfMessage (int $position)
```

Get Date TimeOfMessage (OBR.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getMessageControlId  

**Description**

```php
public getMessageControlId (int $position)
```

Get Message ControlId (OBR.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getMessageType  

**Description**

```php
public getMessageType (int $position)
```

Get Message Type (OBR.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getProcessingId  

**Description**

```php
public getProcessingId (int $position)
```

Get Processing Id (OBR.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getReceivingApplication  

**Description**

```php
public getReceivingApplication (int $position)
```

Get Receiving Application (OBR.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getReceivingFacility  

**Description**

```php
public getReceivingFacility (int $position)
```

Get Receiving Facility (OBR.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getSendingApplication  

**Description**

```php
public getSendingApplication (int $position)
```

Get Sending Application (OBR.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getSendingFacility  

**Description**

```php
public getSendingFacility (int $position)
```

Get Sending Facility (OBR.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getTriggerEvent  

**Description**

```php
public getTriggerEvent (int $position)
```

Get Trigger Event (OBR.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### MSH::getVersionId  

**Description**

```php
public getVersionId (int $position)
```

Get Version Id (OBR.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### MSH::setAcceptAcknowledgementType  

**Description**

```php
public setAcceptAcknowledgementType (string|int|array|null $value, int $position)
```

Set Accept AcknowledgementType (OBR.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### MSH::setApplicationAcknowledgementType  

**Description**

```php
public setApplicationAcknowledgementType (string|int|array|null $value, int $position)
```

Set Application AcknowledgementType (OBR.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### MSH::setCharacterSet  

**Description**

```php
public setCharacterSet (string|int|array|null $value, int $position)
```

Set Character Set (OBR.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### MSH::setContinuationPointer  

**Description**

```php
public setContinuationPointer (string|int|array|null $value, int $position)
```

Set Continuation Pointer (OBR.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### MSH::setCountryCode  

**Description**

```php
public setCountryCode (string|int|array|null $value, int $position)
```

Set Country Code (OBR.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### MSH::setDateTimeOfMessage  

**Description**

```php
public setDateTimeOfMessage (string|int|array|null $value, int $position)
```

Set Date TimeOfMessage (OBR.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### MSH::setMessageControlId  

**Description**

```php
public setMessageControlId (string|int|array|null $value, int $position)
```

Set Message ControlId (OBR.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### MSH::setMessageType  

**Description**

```php
public setMessageType (string|int|array|null $value, int $position)
```

Sets message type to MSH segment. (OBR.9) 

If trigger event is already set, then it is preserved  
  
Example:  
  
If field value is ORU^R01 and you call  
  
```  
$msh->setMessageType('ORM');  
```  
  
Then the new field value will be ORM^R01.  
If it was empty then the new value will be just ORM. 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### MSH::setPrincipalLanguage  

**Description**

```php
public setPrincipalLanguage (string|int|array|null $value, int $position)
```

Set Principal Language (OBR.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### MSH::setProcessingId  

**Description**

```php
public setProcessingId (string|int|array|null $value, int $position)
```

Set Processing Id (OBR.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### MSH::setReceivingApplication  

**Description**

```php
public setReceivingApplication (string|int|array|null $value, int $position)
```

Set Receiving Application (OBR.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### MSH::setReceivingFacility  

**Description**

```php
public setReceivingFacility (string|int|array|null $value, int $position)
```

Set Receiving Facility (OBR.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### MSH::setSecurity  

**Description**

```php
public setSecurity (string|int|array|null $value, int $position)
```

Set Security (OBR.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### MSH::setSendingApplication  

**Description**

```php
public setSendingApplication (string|int|array|null $value, int $position)
```

Set Sending Application (OBR.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### MSH::setSendingFacility  

**Description**

```php
public setSendingFacility (string|int|array|null $value, int $position)
```

Set Sending Facility (OBR.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### MSH::setSequenceNumber  

**Description**

```php
public setSequenceNumber (string|int|array|null $value, int $position)
```

Set Sequence Number (OBR.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### MSH::setTriggerEvent  

**Description**

```php
public setTriggerEvent (string|int|array|null $value, int $position)
```

Sets trigger event to MSH segment. (OBR.9) 

If meessage type is already set, then it is preserved  
  
Example:  
  
If field value is ORU^R01 and you call  
  
```  
$msh->setTriggerEvent('R30');  
```  
  
Then the new field value will be ORU^R30.  
If trigger event was not set then it will set the new value. 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### MSH::setVersionId  

**Description**

```php
public setVersionId (string|int|array|null $value, int $position)
```

Set Version Id (OBR.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />

