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
|[getAddress](#nk1getaddress)||
|[getAdministrativeSex](#nk1getadministrativesex)||
|[getAmbulatoryStatus](#nk1getambulatorystatus)||
|[getBusinessPhoneNumber](#nk1getbusinessphonenumber)||
|[getCitizenship](#nk1getcitizenship)||
|[getContactPersonSocialSecurityNumber](#nk1getcontactpersonsocialsecuritynumber)||
|[getContactPersonsAddress](#nk1getcontactpersonsaddress)||
|[getContactPersonsName](#nk1getcontactpersonsname)||
|[getContactPersonsTelephoneNumber](#nk1getcontactpersonstelephonenumber)||
|[getContactReason](#nk1getcontactreason)||
|[getContactRole](#nk1getcontactrole)||
|[getDateTimeOfBirth](#nk1getdatetimeofbirth)||
|[getEndDate](#nk1getenddate)||
|[getEthnicGroup](#nk1getethnicgroup)||
|[getHandicap](#nk1gethandicap)||
|[getID](#nk1getid)||
|[getJobStatus](#nk1getjobstatus)||
|[getLivingArrangement](#nk1getlivingarrangement)||
|[getLivingDependency](#nk1getlivingdependency)||
|[getMaritalStatus](#nk1getmaritalstatus)||
|[getMothersMaidenName](#nk1getmothersmaidenname)||
|[getNKName](#nk1getnkname)||
|[getNationality](#nk1getnationality)||
|[getNextOfKinBirthPlace](#nk1getnextofkinbirthplace)||
|[getNextOfKinOrAssociatedPartiesEmployeeNumber](#nk1getnextofkinorassociatedpartiesemployeenumber)||
|[getNextOfKinOrAssociatedPartiesJobCodeOrClass](#nk1getnextofkinorassociatedpartiesjobcodeorclass)||
|[getNextOfKinOrAssociatedPartiesJobTitle](#nk1getnextofkinorassociatedpartiesjobtitle)||
|[getNextOfKinOrAssociatedPartysIdentifiers](#nk1getnextofkinorassociatedpartysidentifiers)||
|[getOrganizationName](#nk1getorganizationname)||
|[getPhoneNumber](#nk1getphonenumber)||
|[getPrimaryLanguage](#nk1getprimarylanguage)||
|[getProtectionIndicator](#nk1getprotectionindicator)||
|[getPublicityCode](#nk1getpublicitycode)||
|[getRace](#nk1getrace)||
|[getRelationship](#nk1getrelationship)||
|[getReligion](#nk1getreligion)||
|[getStartDate](#nk1getstartdate)||
|[getStudentIndicator](#nk1getstudentindicator)||
|[getVipIndicator](#nk1getvipindicator)||
|[resetIndex](#nk1resetindex)|Reset index of this segment|
|[setAddress](#nk1setaddress)||
|[setAdministrativeSex](#nk1setadministrativesex)||
|[setAmbulatoryStatus](#nk1setambulatorystatus)||
|[setBusinessPhoneNumber](#nk1setbusinessphonenumber)||
|[setCitizenship](#nk1setcitizenship)||
|[setContactPersonSocialSecurityNumber](#nk1setcontactpersonsocialsecuritynumber)||
|[setContactPersonsAddress](#nk1setcontactpersonsaddress)||
|[setContactPersonsName](#nk1setcontactpersonsname)||
|[setContactPersonsTelephoneNumber](#nk1setcontactpersonstelephonenumber)||
|[setContactReason](#nk1setcontactreason)||
|[setContactRole](#nk1setcontactrole)||
|[setDateTimeOfBirth](#nk1setdatetimeofbirth)||
|[setEndDate](#nk1setenddate)||
|[setEthnicGroup](#nk1setethnicgroup)||
|[setHandicap](#nk1sethandicap)||
|[setID](#nk1setid)||
|[setJobStatus](#nk1setjobstatus)||
|[setLivingArrangement](#nk1setlivingarrangement)||
|[setLivingDependency](#nk1setlivingdependency)||
|[setMaritalStatus](#nk1setmaritalstatus)||
|[setMothersMaidenName](#nk1setmothersmaidenname)||
|[setNKName](#nk1setnkname)||
|[setNationality](#nk1setnationality)||
|[setNextOfKinBirthPlace](#nk1setnextofkinbirthplace)||
|[setNextOfKinOrAssociatedPartiesEmployeeNumber](#nk1setnextofkinorassociatedpartiesemployeenumber)||
|[setNextOfKinOrAssociatedPartiesJobCodeOrClass](#nk1setnextofkinorassociatedpartiesjobcodeorclass)||
|[setNextOfKinOrAssociatedPartiesJobTitle](#nk1setnextofkinorassociatedpartiesjobtitle)||
|[setNextOfKinOrAssociatedPartysIdentifiers](#nk1setnextofkinorassociatedpartysidentifiers)||
|[setOrganizationName](#nk1setorganizationname)||
|[setPhoneNumber](#nk1setphonenumber)||
|[setPrimaryLanguage](#nk1setprimarylanguage)||
|[setProtectionIndicator](#nk1setprotectionindicator)||
|[setPublicityCode](#nk1setpublicitycode)||
|[setRace](#nk1setrace)||
|[setRelationship](#nk1setrelationship)||
|[setReligion](#nk1setreligion)||
|[setStartDate](#nk1setstartdate)||
|[setStudentIndicator](#nk1setstudentindicator)||
|[setVipIndicator](#nk1setvipindicator)||

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
 getAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getAdministrativeSex  

**Description**

```php
 getAdministrativeSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getAmbulatoryStatus  

**Description**

```php
 getAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getBusinessPhoneNumber  

**Description**

```php
 getBusinessPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getCitizenship  

**Description**

```php
 getCitizenship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getContactPersonSocialSecurityNumber  

**Description**

```php
 getContactPersonSocialSecurityNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getContactPersonsAddress  

**Description**

```php
 getContactPersonsAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getContactPersonsName  

**Description**

```php
 getContactPersonsName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getContactPersonsTelephoneNumber  

**Description**

```php
 getContactPersonsTelephoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getContactReason  

**Description**

```php
 getContactReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getContactRole  

**Description**

```php
 getContactRole (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getDateTimeOfBirth  

**Description**

```php
 getDateTimeOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getEndDate  

**Description**

```php
 getEndDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getEthnicGroup  

**Description**

```php
 getEthnicGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getHandicap  

**Description**

```php
 getHandicap (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getJobStatus  

**Description**

```php
 getJobStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getLivingArrangement  

**Description**

```php
 getLivingArrangement (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getLivingDependency  

**Description**

```php
 getLivingDependency (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getMaritalStatus  

**Description**

```php
 getMaritalStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getMothersMaidenName  

**Description**

```php
 getMothersMaidenName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getNKName  

**Description**

```php
 getNKName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getNationality  

**Description**

```php
 getNationality (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getNextOfKinBirthPlace  

**Description**

```php
 getNextOfKinBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getNextOfKinOrAssociatedPartiesEmployeeNumber  

**Description**

```php
 getNextOfKinOrAssociatedPartiesEmployeeNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getNextOfKinOrAssociatedPartiesJobCodeOrClass  

**Description**

```php
 getNextOfKinOrAssociatedPartiesJobCodeOrClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getNextOfKinOrAssociatedPartiesJobTitle  

**Description**

```php
 getNextOfKinOrAssociatedPartiesJobTitle (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getNextOfKinOrAssociatedPartysIdentifiers  

**Description**

```php
 getNextOfKinOrAssociatedPartysIdentifiers (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getOrganizationName  

**Description**

```php
 getOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getPhoneNumber  

**Description**

```php
 getPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getPrimaryLanguage  

**Description**

```php
 getPrimaryLanguage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getProtectionIndicator  

**Description**

```php
 getProtectionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getPublicityCode  

**Description**

```php
 getPublicityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getRace  

**Description**

```php
 getRace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getRelationship  

**Description**

```php
 getRelationship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getReligion  

**Description**

```php
 getReligion (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getStartDate  

**Description**

```php
 getStartDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getStudentIndicator  

**Description**

```php
 getStudentIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::getVipIndicator  

**Description**

```php
 getVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


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
 setAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setAdministrativeSex  

**Description**

```php
 setAdministrativeSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setAmbulatoryStatus  

**Description**

```php
 setAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setBusinessPhoneNumber  

**Description**

```php
 setBusinessPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setCitizenship  

**Description**

```php
 setCitizenship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setContactPersonSocialSecurityNumber  

**Description**

```php
 setContactPersonSocialSecurityNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setContactPersonsAddress  

**Description**

```php
 setContactPersonsAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setContactPersonsName  

**Description**

```php
 setContactPersonsName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setContactPersonsTelephoneNumber  

**Description**

```php
 setContactPersonsTelephoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setContactReason  

**Description**

```php
 setContactReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setContactRole  

**Description**

```php
 setContactRole (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setDateTimeOfBirth  

**Description**

```php
 setDateTimeOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setEndDate  

**Description**

```php
 setEndDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setEthnicGroup  

**Description**

```php
 setEthnicGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setHandicap  

**Description**

```php
 setHandicap (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setJobStatus  

**Description**

```php
 setJobStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setLivingArrangement  

**Description**

```php
 setLivingArrangement (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setLivingDependency  

**Description**

```php
 setLivingDependency (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setMaritalStatus  

**Description**

```php
 setMaritalStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setMothersMaidenName  

**Description**

```php
 setMothersMaidenName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setNKName  

**Description**

```php
 setNKName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setNationality  

**Description**

```php
 setNationality (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setNextOfKinBirthPlace  

**Description**

```php
 setNextOfKinBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setNextOfKinOrAssociatedPartiesEmployeeNumber  

**Description**

```php
 setNextOfKinOrAssociatedPartiesEmployeeNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setNextOfKinOrAssociatedPartiesJobCodeOrClass  

**Description**

```php
 setNextOfKinOrAssociatedPartiesJobCodeOrClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setNextOfKinOrAssociatedPartiesJobTitle  

**Description**

```php
 setNextOfKinOrAssociatedPartiesJobTitle (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setNextOfKinOrAssociatedPartysIdentifiers  

**Description**

```php
 setNextOfKinOrAssociatedPartysIdentifiers (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setOrganizationName  

**Description**

```php
 setOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setPhoneNumber  

**Description**

```php
 setPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setPrimaryLanguage  

**Description**

```php
 setPrimaryLanguage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setProtectionIndicator  

**Description**

```php
 setProtectionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setPublicityCode  

**Description**

```php
 setPublicityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setRace  

**Description**

```php
 setRace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setRelationship  

**Description**

```php
 setRelationship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setReligion  

**Description**

```php
 setReligion (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setStartDate  

**Description**

```php
 setStartDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setStudentIndicator  

**Description**

```php
 setStudentIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NK1::setVipIndicator  

**Description**

```php
 setVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

