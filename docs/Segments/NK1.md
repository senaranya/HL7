# Aranyasen\HL7\Segments\NK1  

NK1 segment class: Next of Kin / Associated Parties
The NK1 segment contains information about the patients other related parties. Any associated parties may be
identified. Utilizing NK1-1 - set ID, multiple NK1 segments can be sent to patient accounts.

Ref: https://hl7-definition.caristix.com/v2/HL7v2.5/Segments/NK1  



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#nk1__destruct)||
|[getAddress](#nk1getaddress)|Get Address (NK1.4)|
|[getAdministrativeSex](#nk1getadministrativesex)|Get Administrative Sex (NK1.15)|
|[getAmbulatoryStatus](#nk1getambulatorystatus)|Get Ambulatory Status (NK1.18)|
|[getBusinessPhoneNumber](#nk1getbusinessphonenumber)|Get Business PhoneNumber (NK1.6)|
|[getCitizenship](#nk1getcitizenship)|Get Citizenship (NK1.19)|
|[getContactPersonSocialSecurityNumber](#nk1getcontactpersonsocialsecuritynumber)|Get Contact PersonSocialSecurityNumber (NK1.37)|
|[getContactPersonsAddress](#nk1getcontactpersonsaddress)|Get Contact PersonsAddress (NK1.32)|
|[getContactPersonsName](#nk1getcontactpersonsname)|Get Contact PersonsName (NK1.30)|
|[getContactPersonsTelephoneNumber](#nk1getcontactpersonstelephonenumber)|Get Contact PersonsTelephoneNumber (NK1.31)|
|[getContactReason](#nk1getcontactreason)|Get Contact Reason (NK1.29)|
|[getContactRole](#nk1getcontactrole)|Get Contact Role (NK1.7)|
|[getDateTimeOfBirth](#nk1getdatetimeofbirth)|Get Date TimeOfBirth (NK1.16)|
|[getEndDate](#nk1getenddate)|Get End Date (NK1.9)|
|[getEthnicGroup](#nk1getethnicgroup)|Get Ethnic Group (NK1.28)|
|[getHandicap](#nk1gethandicap)|Get Handicap (NK1.36)|
|[getID](#nk1getid)|Get ID (NK1.1)|
|[getJobStatus](#nk1getjobstatus)|Get Job Status (NK1.34)|
|[getLivingArrangement](#nk1getlivingarrangement)|Get Living Arrangement (NK1.21)|
|[getLivingDependency](#nk1getlivingdependency)|Get Living Dependency (NK1.17)|
|[getMaritalStatus](#nk1getmaritalstatus)|Get Marital Status (NK1.14)|
|[getMothersMaidenName](#nk1getmothersmaidenname)|Get Mothers MaidenName (NK1.26)|
|[getNKName](#nk1getnkname)|Get NKName (NK1.2)|
|[getNationality](#nk1getnationality)|Get Nationality (NK1.27)|
|[getNextOfKinBirthPlace](#nk1getnextofkinbirthplace)|Get Next OfKinBirthPlace (NK1.38)|
|[getNextOfKinOrAssociatedPartiesEmployeeNumber](#nk1getnextofkinorassociatedpartiesemployeenumber)|Get Next OfKinOrAssociatedPartiesEmployeeNumber (NK1.12)|
|[getNextOfKinOrAssociatedPartiesJobCodeOrClass](#nk1getnextofkinorassociatedpartiesjobcodeorclass)|Get Next OfKinOrAssociatedPartiesJobCodeOrClass (NK1.11)|
|[getNextOfKinOrAssociatedPartiesJobTitle](#nk1getnextofkinorassociatedpartiesjobtitle)|Get Next OfKinOrAssociatedPartiesJobTitle (NK1.10)|
|[getNextOfKinOrAssociatedPartysIdentifiers](#nk1getnextofkinorassociatedpartysidentifiers)|Get Next OfKinOrAssociatedPartysIdentifiers (NK1.33)|
|[getOrganizationName](#nk1getorganizationname)|Get Organization Name (NK1.13)|
|[getPhoneNumber](#nk1getphonenumber)|Get Phone Number (NK1.5)|
|[getPrimaryLanguage](#nk1getprimarylanguage)|Get Primary Language (NK1.20)|
|[getProtectionIndicator](#nk1getprotectionindicator)|Get Protection Indicator (NK1.23)|
|[getPublicityCode](#nk1getpublicitycode)|Get Publicity Code (NK1.22)|
|[getRace](#nk1getrace)|Get Race (NK1.35)|
|[getRelationship](#nk1getrelationship)|Get Relationship (NK1.3)|
|[getReligion](#nk1getreligion)|Get Religion (NK1.25)|
|[getStartDate](#nk1getstartdate)|Get Start Date (NK1.8)|
|[getStudentIndicator](#nk1getstudentindicator)|Get Student Indicator (NK1.24)|
|[getVipIndicator](#nk1getvipindicator)|Get Vip Indicator (NK1.39)|
|[resetIndex](#nk1resetindex)|Reset index of this segment|
|[setAddress](#nk1setaddress)|Set Address (NK1.4)|
|[setAdministrativeSex](#nk1setadministrativesex)|Set Administrative Sex (NK1.15)|
|[setAmbulatoryStatus](#nk1setambulatorystatus)|Set Ambulatory Status (NK1.18)|
|[setBusinessPhoneNumber](#nk1setbusinessphonenumber)|Set Business Phone Number (NK1.6)|
|[setCitizenship](#nk1setcitizenship)|Set Citizenship (NK1.19)|
|[setContactPersonSocialSecurityNumber](#nk1setcontactpersonsocialsecuritynumber)|Set Contact Person Social Security Number (NK1.37)|
|[setContactPersonsAddress](#nk1setcontactpersonsaddress)|Set Contact Persons Address (NK1.32)|
|[setContactPersonsName](#nk1setcontactpersonsname)|Set Contact Persons Name (NK1.30)|
|[setContactPersonsTelephoneNumber](#nk1setcontactpersonstelephonenumber)|Set Contact Persons Telephone Number (NK1.31)|
|[setContactReason](#nk1setcontactreason)|Set Contact Reason (NK1.29)|
|[setContactRole](#nk1setcontactrole)|Set Contact Role (NK1.7)|
|[setDateTimeOfBirth](#nk1setdatetimeofbirth)|Set Date Time Of Birth (NK1.16)|
|[setEndDate](#nk1setenddate)|Set End Date (NK1.9)|
|[setEthnicGroup](#nk1setethnicgroup)|Set Ethnic Group (NK1.28)|
|[setHandicap](#nk1sethandicap)|Set Handicap (NK1.36)|
|[setID](#nk1setid)|Set ID (NK1.1)|
|[setJobStatus](#nk1setjobstatus)|Set Job Status (NK1.34)|
|[setLivingArrangement](#nk1setlivingarrangement)|Set Living Arrangement (NK1.21)|
|[setLivingDependency](#nk1setlivingdependency)|Set Living Dependency (NK1.17)|
|[setMaritalStatus](#nk1setmaritalstatus)|Set Marital Status (NK1.14)|
|[setMothersMaidenName](#nk1setmothersmaidenname)|Set Mothers Maiden Name (NK1.26)|
|[setNKName](#nk1setnkname)|Set NKName (NK1.2)|
|[setNationality](#nk1setnationality)|Set Nationality (NK1.27)|
|[setNextOfKinBirthPlace](#nk1setnextofkinbirthplace)|Set Next Of Kin Birth Place (NK1.38)|
|[setNextOfKinOrAssociatedPartiesEmployeeNumber](#nk1setnextofkinorassociatedpartiesemployeenumber)|Set Next Of Kin Or Associated Parties Employee Number (NK1.12)|
|[setNextOfKinOrAssociatedPartiesJobCodeOrClass](#nk1setnextofkinorassociatedpartiesjobcodeorclass)|Set Next Of Kin Or Associated Parties Job Code Or Class (NK1.11)|
|[setNextOfKinOrAssociatedPartiesJobTitle](#nk1setnextofkinorassociatedpartiesjobtitle)|Set Next Of Kin Or Associated Parties Job Title (NK1.10)|
|[setNextOfKinOrAssociatedPartysIdentifiers](#nk1setnextofkinorassociatedpartysidentifiers)|Set Next Of Kin Or Associated Partys Identifiers (NK1.33)|
|[setOrganizationName](#nk1setorganizationname)|Set Organization Name (NK1.13)|
|[setPhoneNumber](#nk1setphonenumber)|Set Phone Number (NK1.5)|
|[setPrimaryLanguage](#nk1setprimarylanguage)|Set Primary Language (NK1.20)|
|[setProtectionIndicator](#nk1setprotectionindicator)|Set Protection Indicator (NK1.23)|
|[setPublicityCode](#nk1setpublicitycode)|Set Publicity Code (NK1.22)|
|[setRace](#nk1setrace)|Set Race (NK1.35)|
|[setRelationship](#nk1setrelationship)|Set Relationship (NK1.3)|
|[setReligion](#nk1setreligion)|Set Religion (NK1.25)|
|[setStartDate](#nk1setstartdate)|Set Start Date (NK1.8)|
|[setStudentIndicator](#nk1setstudentindicator)|Set Student Indicator (NK1.24)|
|[setVipIndicator](#nk1setvipindicator)|Set Vip Indicator (NK1.39)|

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



### NK1::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getAddress  

**Description**

```php
public getAddress (int $position)
```

Get Address (NK1.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getAdministrativeSex  

**Description**

```php
public getAdministrativeSex (int $position)
```

Get Administrative Sex (NK1.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getAmbulatoryStatus  

**Description**

```php
public getAmbulatoryStatus (int $position)
```

Get Ambulatory Status (NK1.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getBusinessPhoneNumber  

**Description**

```php
public getBusinessPhoneNumber (int $position)
```

Get Business PhoneNumber (NK1.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getCitizenship  

**Description**

```php
public getCitizenship (int $position)
```

Get Citizenship (NK1.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getContactPersonSocialSecurityNumber  

**Description**

```php
public getContactPersonSocialSecurityNumber (int $position)
```

Get Contact PersonSocialSecurityNumber (NK1.37) 

 

**Parameters**

* `(int) $position`
: Defaults to 37  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getContactPersonsAddress  

**Description**

```php
public getContactPersonsAddress (int $position)
```

Get Contact PersonsAddress (NK1.32) 

 

**Parameters**

* `(int) $position`
: Defaults to 32  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getContactPersonsName  

**Description**

```php
public getContactPersonsName (int $position)
```

Get Contact PersonsName (NK1.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getContactPersonsTelephoneNumber  

**Description**

```php
public getContactPersonsTelephoneNumber (int $position)
```

Get Contact PersonsTelephoneNumber (NK1.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getContactReason  

**Description**

```php
public getContactReason (int $position)
```

Get Contact Reason (NK1.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getContactRole  

**Description**

```php
public getContactRole (int $position)
```

Get Contact Role (NK1.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getDateTimeOfBirth  

**Description**

```php
public getDateTimeOfBirth (int $position)
```

Get Date TimeOfBirth (NK1.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getEndDate  

**Description**

```php
public getEndDate (int $position)
```

Get End Date (NK1.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getEthnicGroup  

**Description**

```php
public getEthnicGroup (int $position)
```

Get Ethnic Group (NK1.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getHandicap  

**Description**

```php
public getHandicap (int $position)
```

Get Handicap (NK1.36) 

 

**Parameters**

* `(int) $position`
: Defaults to 36  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getID  

**Description**

```php
public getID (int $position)
```

Get ID (NK1.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getJobStatus  

**Description**

```php
public getJobStatus (int $position)
```

Get Job Status (NK1.34) 

 

**Parameters**

* `(int) $position`
: Defaults to 34  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getLivingArrangement  

**Description**

```php
public getLivingArrangement (int $position)
```

Get Living Arrangement (NK1.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getLivingDependency  

**Description**

```php
public getLivingDependency (int $position)
```

Get Living Dependency (NK1.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getMaritalStatus  

**Description**

```php
public getMaritalStatus (int $position)
```

Get Marital Status (NK1.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getMothersMaidenName  

**Description**

```php
public getMothersMaidenName (int $position)
```

Get Mothers MaidenName (NK1.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getNKName  

**Description**

```php
public getNKName (int $position)
```

Get NKName (NK1.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getNationality  

**Description**

```php
public getNationality (int $position)
```

Get Nationality (NK1.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getNextOfKinBirthPlace  

**Description**

```php
public getNextOfKinBirthPlace (int $position)
```

Get Next OfKinBirthPlace (NK1.38) 

 

**Parameters**

* `(int) $position`
: Defaults to 38  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getNextOfKinOrAssociatedPartiesEmployeeNumber  

**Description**

```php
public getNextOfKinOrAssociatedPartiesEmployeeNumber (int $position)
```

Get Next OfKinOrAssociatedPartiesEmployeeNumber (NK1.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getNextOfKinOrAssociatedPartiesJobCodeOrClass  

**Description**

```php
public getNextOfKinOrAssociatedPartiesJobCodeOrClass (int $position)
```

Get Next OfKinOrAssociatedPartiesJobCodeOrClass (NK1.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getNextOfKinOrAssociatedPartiesJobTitle  

**Description**

```php
public getNextOfKinOrAssociatedPartiesJobTitle (int $position)
```

Get Next OfKinOrAssociatedPartiesJobTitle (NK1.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getNextOfKinOrAssociatedPartysIdentifiers  

**Description**

```php
public getNextOfKinOrAssociatedPartysIdentifiers (int $position)
```

Get Next OfKinOrAssociatedPartysIdentifiers (NK1.33) 

 

**Parameters**

* `(int) $position`
: Defaults to 33  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getOrganizationName  

**Description**

```php
public getOrganizationName (int $position)
```

Get Organization Name (NK1.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getPhoneNumber  

**Description**

```php
public getPhoneNumber (int $position)
```

Get Phone Number (NK1.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getPrimaryLanguage  

**Description**

```php
public getPrimaryLanguage (int $position)
```

Get Primary Language (NK1.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getProtectionIndicator  

**Description**

```php
public getProtectionIndicator (int $position)
```

Get Protection Indicator (NK1.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getPublicityCode  

**Description**

```php
public getPublicityCode (int $position)
```

Get Publicity Code (NK1.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getRace  

**Description**

```php
public getRace (int $position)
```

Get Race (NK1.35) 

 

**Parameters**

* `(int) $position`
: Defaults to 35  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getRelationship  

**Description**

```php
public getRelationship (int $position)
```

Get Relationship (NK1.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getReligion  

**Description**

```php
public getReligion (int $position)
```

Get Religion (NK1.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getStartDate  

**Description**

```php
public getStartDate (int $position)
```

Get Start Date (NK1.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getStudentIndicator  

**Description**

```php
public getStudentIndicator (int $position)
```

Get Student Indicator (NK1.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### NK1::getVipIndicator  

**Description**

```php
public getVipIndicator (int $position)
```

Get Vip Indicator (NK1.39) 

 

**Parameters**

* `(int) $position`
: Defaults to 39  

**Return Values**

`array|string|int|null`




<hr />


### NK1::resetIndex  

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


### NK1::setAddress  

**Description**

```php
public setAddress (string|int|array|null $value, int $position)
```

Set Address (NK1.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### NK1::setAdministrativeSex  

**Description**

```php
public setAdministrativeSex (string|int|array|null $value, int $position)
```

Set Administrative Sex (NK1.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### NK1::setAmbulatoryStatus  

**Description**

```php
public setAmbulatoryStatus (string|int|array|null $value, int $position)
```

Set Ambulatory Status (NK1.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### NK1::setBusinessPhoneNumber  

**Description**

```php
public setBusinessPhoneNumber (string|int|array|null $value, int $position)
```

Set Business Phone Number (NK1.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### NK1::setCitizenship  

**Description**

```php
public setCitizenship (string|int|array|null $value, int $position)
```

Set Citizenship (NK1.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### NK1::setContactPersonSocialSecurityNumber  

**Description**

```php
public setContactPersonSocialSecurityNumber (string|int|array|null $value, int $position)
```

Set Contact Person Social Security Number (NK1.37) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 37  

**Return Values**

`bool`




<hr />


### NK1::setContactPersonsAddress  

**Description**

```php
public setContactPersonsAddress (string|int|array|null $value, int $position)
```

Set Contact Persons Address (NK1.32) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 32  

**Return Values**

`bool`




<hr />


### NK1::setContactPersonsName  

**Description**

```php
public setContactPersonsName (string|int|array|null $value, int $position)
```

Set Contact Persons Name (NK1.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### NK1::setContactPersonsTelephoneNumber  

**Description**

```php
public setContactPersonsTelephoneNumber (string|int|array|null $value, int $position)
```

Set Contact Persons Telephone Number (NK1.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### NK1::setContactReason  

**Description**

```php
public setContactReason (string|int|array|null $value, int $position)
```

Set Contact Reason (NK1.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### NK1::setContactRole  

**Description**

```php
public setContactRole (string|int|array|null $value, int $position)
```

Set Contact Role (NK1.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### NK1::setDateTimeOfBirth  

**Description**

```php
public setDateTimeOfBirth (string|int|array|null $value, int $position)
```

Set Date Time Of Birth (NK1.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### NK1::setEndDate  

**Description**

```php
public setEndDate (string|int|array|null $value, int $position)
```

Set End Date (NK1.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### NK1::setEthnicGroup  

**Description**

```php
public setEthnicGroup (string|int|array|null $value, int $position)
```

Set Ethnic Group (NK1.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### NK1::setHandicap  

**Description**

```php
public setHandicap (string|int|array|null $value, int $position)
```

Set Handicap (NK1.36) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 36  

**Return Values**

`bool`




<hr />


### NK1::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (NK1.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### NK1::setJobStatus  

**Description**

```php
public setJobStatus (string|int|array|null $value, int $position)
```

Set Job Status (NK1.34) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 34  

**Return Values**

`bool`




<hr />


### NK1::setLivingArrangement  

**Description**

```php
public setLivingArrangement (string|int|array|null $value, int $position)
```

Set Living Arrangement (NK1.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### NK1::setLivingDependency  

**Description**

```php
public setLivingDependency (string|int|array|null $value, int $position)
```

Set Living Dependency (NK1.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### NK1::setMaritalStatus  

**Description**

```php
public setMaritalStatus (string|int|array|null $value, int $position)
```

Set Marital Status (NK1.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### NK1::setMothersMaidenName  

**Description**

```php
public setMothersMaidenName (string|int|array|null $value, int $position)
```

Set Mothers Maiden Name (NK1.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### NK1::setNKName  

**Description**

```php
public setNKName (string|int|array|null $value, int $position)
```

Set NKName (NK1.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### NK1::setNationality  

**Description**

```php
public setNationality (string|int|array|null $value, int $position)
```

Set Nationality (NK1.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### NK1::setNextOfKinBirthPlace  

**Description**

```php
public setNextOfKinBirthPlace (string|int|array|null $value, int $position)
```

Set Next Of Kin Birth Place (NK1.38) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 38  

**Return Values**

`bool`




<hr />


### NK1::setNextOfKinOrAssociatedPartiesEmployeeNumber  

**Description**

```php
public setNextOfKinOrAssociatedPartiesEmployeeNumber (string|int|array|null $value, int $position)
```

Set Next Of Kin Or Associated Parties Employee Number (NK1.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### NK1::setNextOfKinOrAssociatedPartiesJobCodeOrClass  

**Description**

```php
public setNextOfKinOrAssociatedPartiesJobCodeOrClass (string|int|array|null $value, int $position)
```

Set Next Of Kin Or Associated Parties Job Code Or Class (NK1.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### NK1::setNextOfKinOrAssociatedPartiesJobTitle  

**Description**

```php
public setNextOfKinOrAssociatedPartiesJobTitle (string|int|array|null $value, int $position)
```

Set Next Of Kin Or Associated Parties Job Title (NK1.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### NK1::setNextOfKinOrAssociatedPartysIdentifiers  

**Description**

```php
public setNextOfKinOrAssociatedPartysIdentifiers (string|int|array|null $value, int $position)
```

Set Next Of Kin Or Associated Partys Identifiers (NK1.33) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 33  

**Return Values**

`bool`




<hr />


### NK1::setOrganizationName  

**Description**

```php
public setOrganizationName (string|int|array|null $value, int $position)
```

Set Organization Name (NK1.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### NK1::setPhoneNumber  

**Description**

```php
public setPhoneNumber (string|int|array|null $value, int $position)
```

Set Phone Number (NK1.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### NK1::setPrimaryLanguage  

**Description**

```php
public setPrimaryLanguage (string|int|array|null $value, int $position)
```

Set Primary Language (NK1.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### NK1::setProtectionIndicator  

**Description**

```php
public setProtectionIndicator (string|int|array|null $value, int $position)
```

Set Protection Indicator (NK1.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### NK1::setPublicityCode  

**Description**

```php
public setPublicityCode (string|int|array|null $value, int $position)
```

Set Publicity Code (NK1.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### NK1::setRace  

**Description**

```php
public setRace (string|int|array|null $value, int $position)
```

Set Race (NK1.35) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 35  

**Return Values**

`bool`




<hr />


### NK1::setRelationship  

**Description**

```php
public setRelationship (string|int|array|null $value, int $position)
```

Set Relationship (NK1.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### NK1::setReligion  

**Description**

```php
public setReligion (string|int|array|null $value, int $position)
```

Set Religion (NK1.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### NK1::setStartDate  

**Description**

```php
public setStartDate (string|int|array|null $value, int $position)
```

Set Start Date (NK1.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### NK1::setStudentIndicator  

**Description**

```php
public setStudentIndicator (string|int|array|null $value, int $position)
```

Set Student Indicator (NK1.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### NK1::setVipIndicator  

**Description**

```php
public setVipIndicator (string|int|array|null $value, int $position)
```

Set Vip Indicator (NK1.39) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 39  

**Return Values**

`bool`




<hr />

