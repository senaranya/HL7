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
|[getDateTimeOfMessage](#mshgetdatetimeofmessage)||
|[getMessageCode](#mshgetmessagecode)||
|[getMessageControlId](#mshgetmessagecontrolid)||
|[getMessageStructure](#mshgetmessagestructure)||
|[getMessageType](#mshgetmessagetype)|ORM / ORU etc.|
|[getProcessingId](#mshgetprocessingid)||
|[getReceivingApplication](#mshgetreceivingapplication)||
|[getReceivingFacility](#mshgetreceivingfacility)||
|[getSendingApplication](#mshgetsendingapplication)||
|[getSendingFacility](#mshgetsendingfacility)||
|[getTriggerEvent](#mshgettriggerevent)||
|[getVersionId](#mshgetversionid)|Get HL7 version, e.g. 2.1, 2.3, 2.5 etc.|
|[setAcceptAcknowledgementType](#mshsetacceptacknowledgementtype)||
|[setApplicationAcknowledgementType](#mshsetapplicationacknowledgementtype)||
|[setCharacterSet](#mshsetcharacterset)||
|[setContinuationPointer](#mshsetcontinuationpointer)||
|[setCountryCode](#mshsetcountrycode)||
|[setDateTimeOfMessage](#mshsetdatetimeofmessage)||
|[setMessageCode](#mshsetmessagecode)|Set the Message Type's Message Code (MSH.9.1)|
|[setMessageControlId](#mshsetmessagecontrolid)||
|[setMessageStructure](#mshsetmessagestructure)|Ref. https://hl7-definition.caristix.com/v2/HL7v2.5.1/Tables/0354|
|[setMessageType](#mshsetmessagetype)|Sets message type to MSH segment.|
|[setPrincipalLanguage](#mshsetprincipallanguage)||
|[setProcessingId](#mshsetprocessingid)||
|[setReceivingApplication](#mshsetreceivingapplication)||
|[setReceivingFacility](#mshsetreceivingfacility)||
|[setSecurity](#mshsetsecurity)||
|[setSendingApplication](#mshsetsendingapplication)||
|[setSendingFacility](#mshsetsendingfacility)||
|[setSequenceNumber](#mshsetsequencenumber)||
|[setTriggerEvent](#mshsettriggerevent)|Sets trigger event to MSH segment.|
|[setVersionId](#mshsetversionid)||

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
 getDateTimeOfMessage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getMessageCode  

**Description**

```php
 getMessageCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getMessageControlId  

**Description**

```php
 getMessageControlId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getMessageStructure  

**Description**

```php
 getMessageStructure (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getMessageType  

**Description**

```php
public getMessageType (int $position)
```

ORM / ORU etc. 

 

**Parameters**

* `(int) $position`

**Return Values**

`string`




<hr />


### MSH::getProcessingId  

**Description**

```php
 getProcessingId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getReceivingApplication  

**Description**

```php
 getReceivingApplication (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getReceivingFacility  

**Description**

```php
 getReceivingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getSendingApplication  

**Description**

```php
 getSendingApplication (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getSendingFacility  

**Description**

```php
 getSendingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getTriggerEvent  

**Description**

```php
 getTriggerEvent (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::getVersionId  

**Description**

```php
public getVersionId (int $position)
```

Get HL7 version, e.g. 2.1, 2.3, 2.5 etc. 

 

**Parameters**

* `(int) $position`

**Return Values**

`array|null|string`




<hr />


### MSH::setAcceptAcknowledgementType  

**Description**

```php
 setAcceptAcknowledgementType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setApplicationAcknowledgementType  

**Description**

```php
 setApplicationAcknowledgementType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setCharacterSet  

**Description**

```php
 setCharacterSet (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setContinuationPointer  

**Description**

```php
 setContinuationPointer (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setCountryCode  

**Description**

```php
 setCountryCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setDateTimeOfMessage  

**Description**

```php
 setDateTimeOfMessage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setMessageCode  

**Description**

```php
public setMessageCode ( $value, int $position)
```

Set the Message Type's Message Code (MSH.9.1) 

Ref. https://hl7-definition.caristix.com/v2/HL7v2.5.1/Fields/MSH.9  
https://hl7-definition.caristix.com/v2/HL7v2.5.1/Tables/0076 

**Parameters**

* `() $value`
* `(int) $position`

**Return Values**

`bool`




<hr />


### MSH::setMessageControlId  

**Description**

```php
 setMessageControlId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setMessageStructure  

**Description**

```php
public setMessageStructure ( $value, int $position)
```

Ref. https://hl7-definition.caristix.com/v2/HL7v2.5.1/Tables/0354 

 

**Parameters**

* `() $value`
* `(int) $position`

**Return Values**

`bool`




<hr />


### MSH::setMessageType  

**Description**

```php
public setMessageType (string $value, int $position)
```

Sets message type to MSH segment. 

If trigger event is already set, then it is preserved  
  
Example:  
  
If field value is ORU^R01 and you call  
  
```  
$msh->setMessageType('ORM');  
```  
  
Then the new field value will be ORM^R01.  
If it was empty then the new value will be just ORM. 

**Parameters**

* `(string) $value`
* `(int) $position`

**Return Values**

`bool`




<hr />


### MSH::setPrincipalLanguage  

**Description**

```php
 setPrincipalLanguage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setProcessingId  

**Description**

```php
 setProcessingId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setReceivingApplication  

**Description**

```php
 setReceivingApplication (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setReceivingFacility  

**Description**

```php
 setReceivingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setSecurity  

**Description**

```php
 setSecurity (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setSendingApplication  

**Description**

```php
 setSendingApplication (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setSendingFacility  

**Description**

```php
 setSendingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setSequenceNumber  

**Description**

```php
 setSequenceNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### MSH::setTriggerEvent  

**Description**

```php
public setTriggerEvent (string $value, int $position)
```

Sets trigger event to MSH segment. 

If message type is already set, then it is preserved  
  
Example:  
  
If field value is ORU^R01 and you call  
  
```  
$msh->setTriggerEvent('R30');  
```  
  
Then the new field value will be ORU^R30.  
If trigger event was not set then it will set the new value.  
  
Ref. https://hl7-definition.caristix.com/v2/HL7v2.5.1/Tables/0003 

**Parameters**

* `(string) $value`
* `(int) $position`

**Return Values**

`bool`




<hr />


### MSH::setVersionId  

**Description**

```php
 setVersionId (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

