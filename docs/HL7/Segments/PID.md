# Aranyasen\HL7\Segments\PID  

PID segment class



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAlternatePatientID](#pidgetalternatepatientid)||
|[getBirthOrder](#pidgetbirthorder)||
|[getBirthPlace](#pidgetbirthplace)||
|[getCitizenship](#pidgetcitizenship)||
|[getCountryCode](#pidgetcountrycode)||
|[getDateTimeOfBirth](#pidgetdatetimeofbirth)||
|[getDriversLicenseNumber](#pidgetdriverslicensenumber)||
|[getEthnicGroup](#pidgetethnicgroup)||
|[getID](#pidgetid)||
|[getMaritalStatus](#pidgetmaritalstatus)||
|[getMothersIdentifier](#pidgetmothersidentifier)||
|[getMothersMaidenName](#pidgetmothersmaidenname)||
|[getMultipleBirthIndicator](#pidgetmultiplebirthindicator)||
|[getNationality](#pidgetnationality)||
|[getPatientAccountNumber](#pidgetpatientaccountnumber)||
|[getPatientAddress](#pidgetpatientaddress)||
|[getPatientAlias](#pidgetpatientalias)||
|[getPatientDeathDateAndTime](#pidgetpatientdeathdateandtime)||
|[getPatientDeathIndicator](#pidgetpatientdeathindicator)||
|[getPatientID](#pidgetpatientid)||
|[getPatientIdentifierList](#pidgetpatientidentifierlist)|Patient ID (Internal ID)|
|[getPatientName](#pidgetpatientname)||
|[getPhoneNumberBusiness](#pidgetphonenumberbusiness)||
|[getPhoneNumberHome](#pidgetphonenumberhome)||
|[getPrimaryLanguage](#pidgetprimarylanguage)||
|[getRace](#pidgetrace)||
|[getReligion](#pidgetreligion)||
|[getSSNNumber](#pidgetssnnumber)||
|[getSex](#pidgetsex)||
|[getVeteransMilitaryStatus](#pidgetveteransmilitarystatus)||
|[setAlternatePatientID](#pidsetalternatepatientid)||
|[setBirthOrder](#pidsetbirthorder)||
|[setBirthPlace](#pidsetbirthplace)||
|[setCitizenship](#pidsetcitizenship)||
|[setCountryCode](#pidsetcountrycode)||
|[setDateTimeOfBirth](#pidsetdatetimeofbirth)||
|[setDriversLicenseNumber](#pidsetdriverslicensenumber)||
|[setEthnicGroup](#pidsetethnicgroup)||
|[setID](#pidsetid)||
|[setMaritalStatus](#pidsetmaritalstatus)||
|[setMothersIdentifier](#pidsetmothersidentifier)||
|[setMothersMaidenName](#pidsetmothersmaidenname)||
|[setMultipleBirthIndicator](#pidsetmultiplebirthindicator)||
|[setNationality](#pidsetnationality)||
|[setPatientAccountNumber](#pidsetpatientaccountnumber)||
|[setPatientAddress](#pidsetpatientaddress)||
|[setPatientAlias](#pidsetpatientalias)||
|[setPatientDeathDateAndTime](#pidsetpatientdeathdateandtime)||
|[setPatientDeathIndicator](#pidsetpatientdeathindicator)||
|[setPatientID](#pidsetpatientid)||
|[setPatientIdentifierList](#pidsetpatientidentifierlist)|Patient ID (Internal ID)|
|[setPatientName](#pidsetpatientname)||
|[setPhoneNumberBusiness](#pidsetphonenumberbusiness)||
|[setPhoneNumberHome](#pidsetphonenumberhome)||
|[setPrimaryLanguage](#pidsetprimarylanguage)||
|[setRace](#pidsetrace)||
|[setReligion](#pidsetreligion)||
|[setSSNNumber](#pidsetssnnumber)||
|[setSex](#pidsetsex)||
|[setVeteransMilitaryStatus](#pidsetveteransmilitarystatus)||

## Inherited methods

| Name | Description |
|------|-------------|
|__construct|Create a segment. A segment may be created with just a name or a name and an array of field
values. The segment name should be a standard HL7 segment (e.g. MSH / PID etc.) that is three characters long, and
upper case. If an array is given, all fields will be filled from that array. Note that for composed fields and
sub-components, the array may hold sub-arrays and sub-sub-arrays. Repeated fields can not be supported the same
way, since we can't distinguish between composed fields and repeated fields.|
|getField|Get the field at index. If the field is a composite field, it returns an array
```php
$field = $seg->getField(9); // Returns a string/null/array depending on what the 9th field is.|
|getFields|Get the fields in the specified range, or all if nothing specified. If only the 'from' value is provided, all
fields from this index till the end of the segment will be returned.|
|getName|Get the name of the segment. This is basically the value at index 0|
|setField|Set the field specified by index to value. Indices start at 1, to stay with the HL7 standard. Trying to set the
value at index 0 has no effect. The value may also be a reference to an array (that may itself contain arrays)
to support composite fields (and sub-components).|
|size|Get the number of fields for this segment, not including the name|



### PID::getAlternatePatientID  

**Description**

```php
public getAlternatePatientID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getBirthOrder  

**Description**

```php
public getBirthOrder (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getBirthPlace  

**Description**

```php
public getBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getCitizenship  

**Description**

```php
public getCitizenship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getCountryCode  

**Description**

```php
public getCountryCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getDateTimeOfBirth  

**Description**

```php
public getDateTimeOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getDriversLicenseNumber  

**Description**

```php
public getDriversLicenseNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getEthnicGroup  

**Description**

```php
public getEthnicGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getID  

**Description**

```php
public getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getMaritalStatus  

**Description**

```php
public getMaritalStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getMothersIdentifier  

**Description**

```php
public getMothersIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getMothersMaidenName  

**Description**

```php
public getMothersMaidenName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getMultipleBirthIndicator  

**Description**

```php
public getMultipleBirthIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getNationality  

**Description**

```php
public getNationality (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPatientAccountNumber  

**Description**

```php
public getPatientAccountNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPatientAddress  

**Description**

```php
public getPatientAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPatientAlias  

**Description**

```php
public getPatientAlias (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPatientDeathDateAndTime  

**Description**

```php
public getPatientDeathDateAndTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPatientDeathIndicator  

**Description**

```php
public getPatientDeathIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPatientID  

**Description**

```php
public getPatientID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPatientIdentifierList  

**Description**

```php
public getPatientIdentifierList (int $position)
```

Patient ID (Internal ID) 

 

**Parameters**

* `(int) $position`

**Return Values**

`array|null|string`





### PID::getPatientName  

**Description**

```php
public getPatientName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPhoneNumberBusiness  

**Description**

```php
public getPhoneNumberBusiness (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPhoneNumberHome  

**Description**

```php
public getPhoneNumberHome (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getPrimaryLanguage  

**Description**

```php
public getPrimaryLanguage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getRace  

**Description**

```php
public getRace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getReligion  

**Description**

```php
public getReligion (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getSSNNumber  

**Description**

```php
public getSSNNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getSex  

**Description**

```php
public getSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::getVeteransMilitaryStatus  

**Description**

```php
public getVeteransMilitaryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setAlternatePatientID  

**Description**

```php
public setAlternatePatientID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setBirthOrder  

**Description**

```php
public setBirthOrder (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setBirthPlace  

**Description**

```php
public setBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setCitizenship  

**Description**

```php
public setCitizenship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setCountryCode  

**Description**

```php
public setCountryCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setDateTimeOfBirth  

**Description**

```php
public setDateTimeOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setDriversLicenseNumber  

**Description**

```php
public setDriversLicenseNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setEthnicGroup  

**Description**

```php
public setEthnicGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setID  

**Description**

```php
public setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setMaritalStatus  

**Description**

```php
public setMaritalStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setMothersIdentifier  

**Description**

```php
public setMothersIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setMothersMaidenName  

**Description**

```php
public setMothersMaidenName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setMultipleBirthIndicator  

**Description**

```php
public setMultipleBirthIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setNationality  

**Description**

```php
public setNationality (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPatientAccountNumber  

**Description**

```php
public setPatientAccountNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPatientAddress  

**Description**

```php
public setPatientAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPatientAlias  

**Description**

```php
public setPatientAlias (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPatientDeathDateAndTime  

**Description**

```php
public setPatientDeathDateAndTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPatientDeathIndicator  

**Description**

```php
public setPatientDeathIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPatientID  

**Description**

```php
public setPatientID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPatientIdentifierList  

**Description**

```php
public setPatientIdentifierList (string $value, int $position)
```

Patient ID (Internal ID) 

 

**Parameters**

* `(string) $value`
* `(int) $position`

**Return Values**

`bool`





### PID::setPatientName  

**Description**

```php
public setPatientName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPhoneNumberBusiness  

**Description**

```php
public setPhoneNumberBusiness (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPhoneNumberHome  

**Description**

```php
public setPhoneNumberHome (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setPrimaryLanguage  

**Description**

```php
public setPrimaryLanguage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setRace  

**Description**

```php
public setRace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setReligion  

**Description**

```php
public setReligion (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setSSNNumber  

**Description**

```php
public setSSNNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setSex  

**Description**

```php
public setSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### PID::setVeteransMilitaryStatus  

**Description**

```php
public setVeteransMilitaryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**



