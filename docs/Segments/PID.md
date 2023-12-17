# Aranyasen\HL7\Segments\PID  

PID segment class
Reference: https://corepointhealth.com/resource-center/hl7-resources/hl7-pid-segment



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#pid__destruct)||
|[getAlternatePatientID](#pidgetalternatepatientid)|Get Alternate Patient ID (PID.4)|
|[getBirthOrder](#pidgetbirthorder)|Get Birth Order (PID.25)|
|[getBirthPlace](#pidgetbirthplace)|Get Birth Place (PID.23)|
|[getCitizenship](#pidgetcitizenship)|Get Citizenship (PID.26)|
|[getCountryCode](#pidgetcountrycode)|Get Country Code (PID.12)|
|[getDateTimeOfBirth](#pidgetdatetimeofbirth)|Get Date Time Of Birth (PID.7)|
|[getDriversLicenseNumber](#pidgetdriverslicensenumber)|Get Drivers License Number (PID.20)|
|[getEthnicGroup](#pidgetethnicgroup)|Get Ethnic Group (PID.22)|
|[getID](#pidgetid)|Get ID (PID.1)|
|[getMaritalStatus](#pidgetmaritalstatus)|Get Marital Status (PID.16)|
|[getMothersIdentifier](#pidgetmothersidentifier)|Get Mothers Identifier (PID.21)|
|[getMothersMaidenName](#pidgetmothersmaidenname)|Get Mothers Maiden Name (PID.6)|
|[getMultipleBirthIndicator](#pidgetmultiplebirthindicator)|Get Multiple Birth Indicator (PID.24)|
|[getNationality](#pidgetnationality)|Get Nationality (PID.28)|
|[getPatientAccountNumber](#pidgetpatientaccountnumber)|Get Patient Account Number (PID.18)|
|[getPatientAddress](#pidgetpatientaddress)|Get Patient Address (PID.11)|
|[getPatientAlias](#pidgetpatientalias)|Get Patient Alias (PID.9)|
|[getPatientDeathDateAndTime](#pidgetpatientdeathdateandtime)|Get Patient Death Date And Time (PID.29)|
|[getPatientDeathIndicator](#pidgetpatientdeathindicator)|Get Patient Death Indicator (PID.30)|
|[getPatientID](#pidgetpatientid)|Get Patient ID (PID.2)|
|[getPatientIdentifierList](#pidgetpatientidentifierlist)|Get Patient Identifier List (PID.3)|
|[getPatientName](#pidgetpatientname)|Get Patient Name (PID.5)|
|[getPhoneNumberBusiness](#pidgetphonenumberbusiness)|Get Phone Number Business (PID.14)|
|[getPhoneNumberHome](#pidgetphonenumberhome)|Get Phone Number Home (PID.13)|
|[getPrimaryLanguage](#pidgetprimarylanguage)|Get Primary Language (PID.15)|
|[getRace](#pidgetrace)|Get Race (PID.10)|
|[getReligion](#pidgetreligion)|Get Religion (PID.17)|
|[getSSNNumber](#pidgetssnnumber)|Get SSNNumber (PID.19)|
|[getSex](#pidgetsex)|Get Sex (PID.8)|
|[getVeteransMilitaryStatus](#pidgetveteransmilitarystatus)|Get Veterans Military Status (PID.27)|
|[resetIndex](#pidresetindex)|Reset index of this segment|
|[setAlternatePatientID](#pidsetalternatepatientid)|Set Alternate Patient ID (PID.4)|
|[setBirthOrder](#pidsetbirthorder)|Set Birth Order (PID.25)|
|[setBirthPlace](#pidsetbirthplace)|Set Birth Place (PID.23)|
|[setCitizenship](#pidsetcitizenship)|Set Citizenship (PID.26)|
|[setCountryCode](#pidsetcountrycode)|Set Country Code (PID.12)|
|[setDateTimeOfBirth](#pidsetdatetimeofbirth)|Set Date Time Of Birth (PID.7)|
|[setDriversLicenseNumber](#pidsetdriverslicensenumber)|Set Drivers License Number (PID.20)|
|[setEthnicGroup](#pidsetethnicgroup)|Set Ethnic Group (PID.22)|
|[setID](#pidsetid)|Set ID (PID.1)|
|[setMaritalStatus](#pidsetmaritalstatus)|Set Marital Status (PID.16)|
|[setMothersIdentifier](#pidsetmothersidentifier)|Set Mothers Identifier (PID.21)|
|[setMothersMaidenName](#pidsetmothersmaidenname)|Set Mothers Maiden Name (PID.6)|
|[setMultipleBirthIndicator](#pidsetmultiplebirthindicator)|Set Multiple Birth Indicator (PID.24)|
|[setNationality](#pidsetnationality)|Set Nationality (PID.28)|
|[setPatientAccountNumber](#pidsetpatientaccountnumber)|Set Patient Account Number (PID.18)|
|[setPatientAddress](#pidsetpatientaddress)|Set Patient Address (PID.11)|
|[setPatientAlias](#pidsetpatientalias)|Set Patient Alias (PID.9)|
|[setPatientDeathDateAndTime](#pidsetpatientdeathdateandtime)|Set Patient Death Date And Time (PID.29)|
|[setPatientDeathIndicator](#pidsetpatientdeathindicator)|Set Patient Death Indicator (PID.30)|
|[setPatientID](#pidsetpatientid)|Set Patient ID (PID.2)|
|[setPatientIdentifierList](#pidsetpatientidentifierlist)|Set Patient Identifier List (PID.3)|
|[setPatientName](#pidsetpatientname)|Set Patient Name (PID.5)|
|[setPhoneNumberBusiness](#pidsetphonenumberbusiness)|Set Phone Number Business (PID.14)|
|[setPhoneNumberHome](#pidsetphonenumberhome)|Set Phone Number Home (PID.13)|
|[setPrimaryLanguage](#pidsetprimarylanguage)|Set Primary Language (PID.15)|
|[setRace](#pidsetrace)|Set Race (PID.10)|
|[setReligion](#pidsetreligion)|Set Religion (PID.17)|
|[setSSNNumber](#pidsetssnnumber)|Set SSNNumber (PID.19)|
|[setSex](#pidsetsex)||
|[setVeteransMilitaryStatus](#pidsetveteransmilitarystatus)|Set Veterans Military Status (PID.27)|

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



### PID::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PID::getAlternatePatientID  

**Description**

```php
public getAlternatePatientID (int $position)
```

Get Alternate Patient ID (PID.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### PID::getBirthOrder  

**Description**

```php
public getBirthOrder (int $position)
```

Get Birth Order (PID.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### PID::getBirthPlace  

**Description**

```php
public getBirthPlace (int $position)
```

Get Birth Place (PID.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### PID::getCitizenship  

**Description**

```php
public getCitizenship (int $position)
```

Get Citizenship (PID.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### PID::getCountryCode  

**Description**

```php
public getCountryCode (int $position)
```

Get Country Code (PID.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### PID::getDateTimeOfBirth  

**Description**

```php
public getDateTimeOfBirth (int $position)
```

Get Date Time Of Birth (PID.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### PID::getDriversLicenseNumber  

**Description**

```php
public getDriversLicenseNumber (int $position)
```

Get Drivers License Number (PID.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### PID::getEthnicGroup  

**Description**

```php
public getEthnicGroup (int $position)
```

Get Ethnic Group (PID.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### PID::getID  

**Description**

```php
public getID (int $position)
```

Get ID (PID.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### PID::getMaritalStatus  

**Description**

```php
public getMaritalStatus (int $position)
```

Get Marital Status (PID.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### PID::getMothersIdentifier  

**Description**

```php
public getMothersIdentifier (int $position)
```

Get Mothers Identifier (PID.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### PID::getMothersMaidenName  

**Description**

```php
public getMothersMaidenName (int $position)
```

Get Mothers Maiden Name (PID.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### PID::getMultipleBirthIndicator  

**Description**

```php
public getMultipleBirthIndicator (int $position)
```

Get Multiple Birth Indicator (PID.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### PID::getNationality  

**Description**

```php
public getNationality (int $position)
```

Get Nationality (PID.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientAccountNumber  

**Description**

```php
public getPatientAccountNumber (int $position)
```

Get Patient Account Number (PID.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientAddress  

**Description**

```php
public getPatientAddress (int $position)
```

Get Patient Address (PID.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientAlias  

**Description**

```php
public getPatientAlias (int $position)
```

Get Patient Alias (PID.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientDeathDateAndTime  

**Description**

```php
public getPatientDeathDateAndTime (int $position)
```

Get Patient Death Date And Time (PID.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientDeathIndicator  

**Description**

```php
public getPatientDeathIndicator (int $position)
```

Get Patient Death Indicator (PID.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientID  

**Description**

```php
public getPatientID (int $position)
```

Get Patient ID (PID.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientIdentifierList  

**Description**

```php
public getPatientIdentifierList (int $position)
```

Get Patient Identifier List (PID.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPatientName  

**Description**

```php
public getPatientName (int $position)
```

Get Patient Name (PID.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPhoneNumberBusiness  

**Description**

```php
public getPhoneNumberBusiness (int $position)
```

Get Phone Number Business (PID.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPhoneNumberHome  

**Description**

```php
public getPhoneNumberHome (int $position)
```

Get Phone Number Home (PID.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### PID::getPrimaryLanguage  

**Description**

```php
public getPrimaryLanguage (int $position)
```

Get Primary Language (PID.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### PID::getRace  

**Description**

```php
public getRace (int $position)
```

Get Race (PID.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### PID::getReligion  

**Description**

```php
public getReligion (int $position)
```

Get Religion (PID.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### PID::getSSNNumber  

**Description**

```php
public getSSNNumber (int $position)
```

Get SSNNumber (PID.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### PID::getSex  

**Description**

```php
public getSex (int $position)
```

Get Sex (PID.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### PID::getVeteransMilitaryStatus  

**Description**

```php
public getVeteransMilitaryStatus (int $position)
```

Get Veterans Military Status (PID.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### PID::resetIndex  

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


### PID::setAlternatePatientID  

**Description**

```php
public setAlternatePatientID (string|int|array|null $value, int $position)
```

Set Alternate Patient ID (PID.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### PID::setBirthOrder  

**Description**

```php
public setBirthOrder (string|int|array|null $value, int $position)
```

Set Birth Order (PID.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### PID::setBirthPlace  

**Description**

```php
public setBirthPlace (string|int|array|null $value, int $position)
```

Set Birth Place (PID.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### PID::setCitizenship  

**Description**

```php
public setCitizenship (string|int|array|null $value, int $position)
```

Set Citizenship (PID.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### PID::setCountryCode  

**Description**

```php
public setCountryCode (string|int|array|null $value, int $position)
```

Set Country Code (PID.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### PID::setDateTimeOfBirth  

**Description**

```php
public setDateTimeOfBirth (string|int|array|null $value, int $position)
```

Set Date Time Of Birth (PID.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### PID::setDriversLicenseNumber  

**Description**

```php
public setDriversLicenseNumber (string|int|array|null $value, int $position)
```

Set Drivers License Number (PID.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### PID::setEthnicGroup  

**Description**

```php
public setEthnicGroup (string|int|array|null $value, int $position)
```

Set Ethnic Group (PID.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### PID::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (PID.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### PID::setMaritalStatus  

**Description**

```php
public setMaritalStatus (string|int|array|null $value, int $position)
```

Set Marital Status (PID.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### PID::setMothersIdentifier  

**Description**

```php
public setMothersIdentifier (string|int|array|null $value, int $position)
```

Set Mothers Identifier (PID.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### PID::setMothersMaidenName  

**Description**

```php
public setMothersMaidenName (string|int|array|null $value, int $position)
```

Set Mothers Maiden Name (PID.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### PID::setMultipleBirthIndicator  

**Description**

```php
public setMultipleBirthIndicator (string|int|array|null $value, int $position)
```

Set Multiple Birth Indicator (PID.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### PID::setNationality  

**Description**

```php
public setNationality (string|int|array|null $value, int $position)
```

Set Nationality (PID.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### PID::setPatientAccountNumber  

**Description**

```php
public setPatientAccountNumber (string|int|array|null $value, int $position)
```

Set Patient Account Number (PID.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### PID::setPatientAddress  

**Description**

```php
public setPatientAddress (string|int|array|null $value, int $position)
```

Set Patient Address (PID.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### PID::setPatientAlias  

**Description**

```php
public setPatientAlias (string|int|array|null $value, int $position)
```

Set Patient Alias (PID.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### PID::setPatientDeathDateAndTime  

**Description**

```php
public setPatientDeathDateAndTime (string|int|array|null $value, int $position)
```

Set Patient Death Date And Time (PID.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### PID::setPatientDeathIndicator  

**Description**

```php
public setPatientDeathIndicator (string|int|array|null $value, int $position)
```

Set Patient Death Indicator (PID.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### PID::setPatientID  

**Description**

```php
public setPatientID (string|int|array|null $value, int $position)
```

Set Patient ID (PID.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### PID::setPatientIdentifierList  

**Description**

```php
public setPatientIdentifierList (string|int|array|null $value, int $position)
```

Set Patient Identifier List (PID.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### PID::setPatientName  

**Description**

```php
public setPatientName (string|int|array|null $value, int $position)
```

Set Patient Name (PID.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### PID::setPhoneNumberBusiness  

**Description**

```php
public setPhoneNumberBusiness (string|int|array|null $value, int $position)
```

Set Phone Number Business (PID.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### PID::setPhoneNumberHome  

**Description**

```php
public setPhoneNumberHome (string|int|array|null $value, int $position)
```

Set Phone Number Home (PID.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### PID::setPrimaryLanguage  

**Description**

```php
public setPrimaryLanguage (string|int|array|null $value, int $position)
```

Set Primary Language (PID.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### PID::setRace  

**Description**

```php
public setRace (string|int|array|null $value, int $position)
```

Set Race (PID.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### PID::setReligion  

**Description**

```php
public setReligion (string|int|array|null $value, int $position)
```

Set Religion (PID.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### PID::setSSNNumber  

**Description**

```php
public setSSNNumber (string|int|array|null $value, int $position)
```

Set SSNNumber (PID.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### PID::setSex  

**Description**

```php
 setSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PID::setVeteransMilitaryStatus  

**Description**

```php
public setVeteransMilitaryStatus (string|int|array|null $value, int $position)
```

Set Veterans Military Status (PID.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />

