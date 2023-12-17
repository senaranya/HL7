# Aranyasen\HL7\Segments\SCH  

SCH segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-siu-message
http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/SCH



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAppointmentDuration](#schgetappointmentduration)|Get Appointment Duration (SCH.9)|
|[getAppointmentDurationUnits](#schgetappointmentdurationunits)|Get Appointment DurationUnits (SCH.10)|
|[getAppointmentReason](#schgetappointmentreason)|Get Appointment Reason (SCH.7)|
|[getAppointmentTimingQuantity](#schgetappointmenttimingquantity)|Get Appointment TimingQuantity (SCH.11)|
|[getAppointmentType](#schgetappointmenttype)|Get Appointment Type (SCH.8)|
|[getEnteredbyLocation](#schgetenteredbylocation)|Get Enteredby Location (SCH.22)|
|[getEnteredbyPerson](#schgetenteredbyperson)|Get Enteredby Person (SCH.20)|
|[getEnteredbyPhoneNumber](#schgetenteredbyphonenumber)|Get Enteredby PhoneNumber (SCH.21)|
|[getEventReason](#schgeteventreason)|Get Event Reason (SCH.6)|
|[getFillerAppointmentID](#schgetfillerappointmentid)|Get Filler AppointmentID (SCH.2)|
|[getFillerContactAddress](#schgetfillercontactaddress)|Get Filler ContactAddress (SCH.18)|
|[getFillerContactLocation](#schgetfillercontactlocation)|Get Filler ContactLocation (SCH.19)|
|[getFillerContactPerson](#schgetfillercontactperson)|Get Filler ContactPerson (SCH.16)|
|[getFillerContactPhoneNumber](#schgetfillercontactphonenumber)|Get Filler ContactPhoneNumber (SCH.17)|
|[getFillerStatusCode](#schgetfillerstatuscode)|Get Filler StatusCode (SCH.25)|
|[getOccurrenceNumber](#schgetoccurrencenumber)|Get Occurrence Number (SCH.3)|
|[getParentFillerAppointmentID](#schgetparentfillerappointmentid)|Get Parent FillerAppointmentID (SCH.24)|
|[getParentPlacerAppointmentID](#schgetparentplacerappointmentid)|Get Parent PlacerAppointmentID (SCH.23)|
|[getPlacerAppointmentID](#schgetplacerappointmentid)|Get Placer AppointmentID (SCH.1)|
|[getPlacerContactAddress](#schgetplacercontactaddress)|Get Placer ContactAddress (SCH.14)|
|[getPlacerContactLocation](#schgetplacercontactlocation)|Get Placer ContactLocation (SCH.15)|
|[getPlacerContactPerson](#schgetplacercontactperson)|Get Placer ContactPerson (SCH.12)|
|[getPlacerContactPhoneNumber](#schgetplacercontactphonenumber)|Get Placer ContactPhoneNumber (SCH.13)|
|[getPlacerGroupNumber](#schgetplacergroupnumber)|Get Placer GroupNumber (SCH.4)|
|[getScheduleID](#schgetscheduleid)|Get Schedule ID (SCH.5)|
|[setAppointmentDuration](#schsetappointmentduration)|Set Appointment Duration (SCH.9)|
|[setAppointmentDurationUnits](#schsetappointmentdurationunits)|Set Appointment Duration Units (SCH.10)|
|[setAppointmentReason](#schsetappointmentreason)|Set Appointment Reason (SCH.7)|
|[setAppointmentTimingQuantity](#schsetappointmenttimingquantity)|Set Appointment Timing Quantity (SCH.11)|
|[setAppointmentType](#schsetappointmenttype)|Set Appointment Type (SCH.8)|
|[setEnteredbyLocation](#schsetenteredbylocation)|Set Enteredby Location (SCH.22)|
|[setEnteredbyPerson](#schsetenteredbyperson)|Set Enteredby Person (SCH.20)|
|[setEnteredbyPhoneNumber](#schsetenteredbyphonenumber)|Set Enteredby Phone Number (SCH.21)|
|[setEventReason](#schseteventreason)|Set Event Reason (SCH.6)|
|[setFillerAppointmentID](#schsetfillerappointmentid)|Set Filler Appointment ID (SCH.2)|
|[setFillerContactAddress](#schsetfillercontactaddress)|Set Filler Contact Address (SCH.18)|
|[setFillerContactLocation](#schsetfillercontactlocation)|Set Filler Contact Location (SCH.19)|
|[setFillerContactPerson](#schsetfillercontactperson)|Set Filler Contact Person (SCH.16)|
|[setFillerContactPhoneNumber](#schsetfillercontactphonenumber)|Set Filler Contact Phone Number (SCH.17)|
|[setFillerStatusCode](#schsetfillerstatuscode)|Set Filler Status Code (SCH.25)|
|[setOccurrenceNumber](#schsetoccurrencenumber)|Set Occurrence Number (SCH.3)|
|[setParentFillerAppointmentID](#schsetparentfillerappointmentid)|Set Parent Filler Appointment ID (SCH.24)|
|[setParentPlacerAppointmentID](#schsetparentplacerappointmentid)|Set Parent Placer Appointment ID (SCH.23)|
|[setPlacerAppointmentID](#schsetplacerappointmentid)|Set Placer Appointment ID (SCH.1)|
|[setPlacerContactAddress](#schsetplacercontactaddress)|Set Placer Contact Address (SCH.14)|
|[setPlacerContactLocation](#schsetplacercontactlocation)|Set Placer Contact Location (SCH.15)|
|[setPlacerContactPerson](#schsetplacercontactperson)|Set Placer Contact Person (SCH.12)|
|[setPlacerContactPhoneNumber](#schsetplacercontactphonenumber)|Set Placer Contact Phone Number (SCH.13)|
|[setPlacerGroupNumber](#schsetplacergroupnumber)|Set Placer Group Number (SCH.4)|
|[setScheduleID](#schsetscheduleid)|Set Schedule ID (SCH.5)|

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



### SCH::getAppointmentDuration  

**Description**

```php
public getAppointmentDuration (int $position)
```

Get Appointment Duration (SCH.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getAppointmentDurationUnits  

**Description**

```php
public getAppointmentDurationUnits (int $position)
```

Get Appointment DurationUnits (SCH.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getAppointmentReason  

**Description**

```php
public getAppointmentReason (int $position)
```

Get Appointment Reason (SCH.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getAppointmentTimingQuantity  

**Description**

```php
public getAppointmentTimingQuantity (int $position)
```

Get Appointment TimingQuantity (SCH.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getAppointmentType  

**Description**

```php
public getAppointmentType (int $position)
```

Get Appointment Type (SCH.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getEnteredbyLocation  

**Description**

```php
public getEnteredbyLocation (int $position)
```

Get Enteredby Location (SCH.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getEnteredbyPerson  

**Description**

```php
public getEnteredbyPerson (int $position)
```

Get Enteredby Person (SCH.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getEnteredbyPhoneNumber  

**Description**

```php
public getEnteredbyPhoneNumber (int $position)
```

Get Enteredby PhoneNumber (SCH.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getEventReason  

**Description**

```php
public getEventReason (int $position)
```

Get Event Reason (SCH.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getFillerAppointmentID  

**Description**

```php
public getFillerAppointmentID (int $position)
```

Get Filler AppointmentID (SCH.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getFillerContactAddress  

**Description**

```php
public getFillerContactAddress (int $position)
```

Get Filler ContactAddress (SCH.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getFillerContactLocation  

**Description**

```php
public getFillerContactLocation (int $position)
```

Get Filler ContactLocation (SCH.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getFillerContactPerson  

**Description**

```php
public getFillerContactPerson (int $position)
```

Get Filler ContactPerson (SCH.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getFillerContactPhoneNumber  

**Description**

```php
public getFillerContactPhoneNumber (int $position)
```

Get Filler ContactPhoneNumber (SCH.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getFillerStatusCode  

**Description**

```php
public getFillerStatusCode (int $position)
```

Get Filler StatusCode (SCH.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getOccurrenceNumber  

**Description**

```php
public getOccurrenceNumber (int $position)
```

Get Occurrence Number (SCH.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getParentFillerAppointmentID  

**Description**

```php
public getParentFillerAppointmentID (int $position)
```

Get Parent FillerAppointmentID (SCH.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getParentPlacerAppointmentID  

**Description**

```php
public getParentPlacerAppointmentID (int $position)
```

Get Parent PlacerAppointmentID (SCH.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getPlacerAppointmentID  

**Description**

```php
public getPlacerAppointmentID (int $position)
```

Get Placer AppointmentID (SCH.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getPlacerContactAddress  

**Description**

```php
public getPlacerContactAddress (int $position)
```

Get Placer ContactAddress (SCH.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getPlacerContactLocation  

**Description**

```php
public getPlacerContactLocation (int $position)
```

Get Placer ContactLocation (SCH.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getPlacerContactPerson  

**Description**

```php
public getPlacerContactPerson (int $position)
```

Get Placer ContactPerson (SCH.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getPlacerContactPhoneNumber  

**Description**

```php
public getPlacerContactPhoneNumber (int $position)
```

Get Placer ContactPhoneNumber (SCH.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getPlacerGroupNumber  

**Description**

```php
public getPlacerGroupNumber (int $position)
```

Get Placer GroupNumber (SCH.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### SCH::getScheduleID  

**Description**

```php
public getScheduleID (int $position)
```

Get Schedule ID (SCH.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### SCH::setAppointmentDuration  

**Description**

```php
public setAppointmentDuration (string|int|array|null $value, int $position)
```

Set Appointment Duration (SCH.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### SCH::setAppointmentDurationUnits  

**Description**

```php
public setAppointmentDurationUnits (string|int|array|null $value, int $position)
```

Set Appointment Duration Units (SCH.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### SCH::setAppointmentReason  

**Description**

```php
public setAppointmentReason (string|int|array|null $value, int $position)
```

Set Appointment Reason (SCH.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### SCH::setAppointmentTimingQuantity  

**Description**

```php
public setAppointmentTimingQuantity (string|int|array|null $value, int $position)
```

Set Appointment Timing Quantity (SCH.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### SCH::setAppointmentType  

**Description**

```php
public setAppointmentType (string|int|array|null $value, int $position)
```

Set Appointment Type (SCH.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### SCH::setEnteredbyLocation  

**Description**

```php
public setEnteredbyLocation (string|int|array|null $value, int $position)
```

Set Enteredby Location (SCH.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### SCH::setEnteredbyPerson  

**Description**

```php
public setEnteredbyPerson (string|int|array|null $value, int $position)
```

Set Enteredby Person (SCH.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### SCH::setEnteredbyPhoneNumber  

**Description**

```php
public setEnteredbyPhoneNumber (string|int|array|null $value, int $position)
```

Set Enteredby Phone Number (SCH.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### SCH::setEventReason  

**Description**

```php
public setEventReason (string|int|array|null $value, int $position)
```

Set Event Reason (SCH.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### SCH::setFillerAppointmentID  

**Description**

```php
public setFillerAppointmentID (string|int|array|null $value, int $position)
```

Set Filler Appointment ID (SCH.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### SCH::setFillerContactAddress  

**Description**

```php
public setFillerContactAddress (string|int|array|null $value, int $position)
```

Set Filler Contact Address (SCH.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### SCH::setFillerContactLocation  

**Description**

```php
public setFillerContactLocation (string|int|array|null $value, int $position)
```

Set Filler Contact Location (SCH.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### SCH::setFillerContactPerson  

**Description**

```php
public setFillerContactPerson (string|int|array|null $value, int $position)
```

Set Filler Contact Person (SCH.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### SCH::setFillerContactPhoneNumber  

**Description**

```php
public setFillerContactPhoneNumber (string|int|array|null $value, int $position)
```

Set Filler Contact Phone Number (SCH.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### SCH::setFillerStatusCode  

**Description**

```php
public setFillerStatusCode (string|int|array|null $value, int $position)
```

Set Filler Status Code (SCH.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### SCH::setOccurrenceNumber  

**Description**

```php
public setOccurrenceNumber (string|int|array|null $value, int $position)
```

Set Occurrence Number (SCH.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### SCH::setParentFillerAppointmentID  

**Description**

```php
public setParentFillerAppointmentID (string|int|array|null $value, int $position)
```

Set Parent Filler Appointment ID (SCH.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### SCH::setParentPlacerAppointmentID  

**Description**

```php
public setParentPlacerAppointmentID (string|int|array|null $value, int $position)
```

Set Parent Placer Appointment ID (SCH.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### SCH::setPlacerAppointmentID  

**Description**

```php
public setPlacerAppointmentID (string|int|array|null $value, int $position)
```

Set Placer Appointment ID (SCH.1) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### SCH::setPlacerContactAddress  

**Description**

```php
public setPlacerContactAddress (string|int|array|null $value, int $position)
```

Set Placer Contact Address (SCH.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### SCH::setPlacerContactLocation  

**Description**

```php
public setPlacerContactLocation (string|int|array|null $value, int $position)
```

Set Placer Contact Location (SCH.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### SCH::setPlacerContactPerson  

**Description**

```php
public setPlacerContactPerson (string|int|array|null $value, int $position)
```

Set Placer Contact Person (SCH.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### SCH::setPlacerContactPhoneNumber  

**Description**

```php
public setPlacerContactPhoneNumber (string|int|array|null $value, int $position)
```

Set Placer Contact Phone Number (SCH.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### SCH::setPlacerGroupNumber  

**Description**

```php
public setPlacerGroupNumber (string|int|array|null $value, int $position)
```

Set Placer Group Number (SCH.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### SCH::setScheduleID  

**Description**

```php
public setScheduleID (string|int|array|null $value, int $position)
```

Set Schedule ID (SCH.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />

