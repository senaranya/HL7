# Aranyasen\HL7\Segments\GT1  

GT1 segment class
Reference: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/GT1



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#gt1__destruct)||
|[getAmbulatoryStatus](#gt1getambulatorystatus)||
|[getCitizenship](#gt1getcitizenship)||
|[getContactPersonsName](#gt1getcontactpersonsname)||
|[getContactPersonsPhone](#gt1getcontactpersonsphone)||
|[getContactReason](#gt1getcontactreason)||
|[getContactRelationship](#gt1getcontactrelationship)||
|[getEmploymentStopDate](#gt1getemploymentstopdate)||
|[getEthnicGroup](#gt1getethnicgroup)||
|[getGuarantorAddress](#gt1getguarantoraddress)||
|[getGuarantorAnnualIncome](#gt1getguarantorannualincome)||
|[getGuarantorBeginDate](#gt1getguarantorbegindate)||
|[getGuarantorBillingHoldFlag](#gt1getguarantorbillingholdflag)||
|[getGuarantorBirthPlace](#gt1getguarantorbirthplace)||
|[getGuarantorBusinessPhone](#gt1getguarantorbusinessphone)||
|[getGuarantorChargeAdjustmentCode](#gt1getguarantorchargeadjustmentcode)||
|[getGuarantorCreditRatingCode](#gt1getguarantorcreditratingcode)||
|[getGuarantorDateOfBirth](#gt1getguarantordateofbirth)||
|[getGuarantorDeathDateAndTime](#gt1getguarantordeathdateandtime)||
|[getGuarantorDeathFlag](#gt1getguarantordeathflag)||
|[getGuarantorEmployeeID](#gt1getguarantoremployeeid)||
|[getGuarantorEmployerAddress](#gt1getguarantoremployeraddress)||
|[getGuarantorEmployerID](#gt1getguarantoremployerid)||
|[getGuarantorEmployerName](#gt1getguarantoremployername)||
|[getGuarantorEmployerPhone](#gt1getguarantoremployerphone)||
|[getGuarantorEmployersOrganizationName](#gt1getguarantoremployersorganizationname)||
|[getGuarantorEmploymentStatus](#gt1getguarantoremploymentstatus)||
|[getGuarantorEndDate](#gt1getguarantorenddate)||
|[getGuarantorFinancialClass](#gt1getguarantorfinancialclass)||
|[getGuarantorHireEffectiveDate](#gt1getguarantorhireeffectivedate)||
|[getGuarantorHomePhone](#gt1getguarantorhomephone)||
|[getGuarantorHouseholdSize](#gt1getguarantorhouseholdsize)||
|[getGuarantorMaritalStatusCode](#gt1getguarantormaritalstatuscode)||
|[getGuarantorName](#gt1getguarantorname)||
|[getGuarantorNumber](#gt1getguarantornumber)||
|[getGuarantorOrganizationName](#gt1getguarantororganizationname)||
|[getGuarantorPriority](#gt1getguarantorpriority)||
|[getGuarantorRace](#gt1getguarantorrace)||
|[getGuarantorRelationship](#gt1getguarantorrelationship)||
|[getGuarantorSSN](#gt1getguarantorssn)||
|[getGuarantorSex](#gt1getguarantorsex)||
|[getGuarantorSpouseName](#gt1getguarantorspousename)||
|[getGuarantorType](#gt1getguarantortype)||
|[getHandicap](#gt1gethandicap)||
|[getID](#gt1getid)||
|[getJobClass](#gt1getjobclass)||
|[getJobStatus](#gt1getjobstatus)||
|[getJobTitle](#gt1getjobtitle)||
|[getLivingArrangement](#gt1getlivingarrangement)||
|[getLivingDependency](#gt1getlivingdependency)||
|[getMotherMaidenName](#gt1getmothermaidenname)||
|[getNationality](#gt1getnationality)||
|[getPrimaryLanguage](#gt1getprimarylanguage)||
|[getProtectionIndicator](#gt1getprotectionindicator)||
|[getPublicityCode](#gt1getpublicitycode)||
|[getReligion](#gt1getreligion)||
|[getStudentIndicator](#gt1getstudentindicator)||
|[getVipIndicator](#gt1getvipindicator)||
|[resetIndex](#gt1resetindex)|Reset index of this segment|
|[setAmbulatoryStatus](#gt1setambulatorystatus)||
|[setCitizenship](#gt1setcitizenship)||
|[setContactPersonsName](#gt1setcontactpersonsname)||
|[setContactPersonsPhone](#gt1setcontactpersonsphone)||
|[setContactReason](#gt1setcontactreason)||
|[setContactRelationship](#gt1setcontactrelationship)||
|[setEmploymentStopDate](#gt1setemploymentstopdate)||
|[setEthnicGroup](#gt1setethnicgroup)||
|[setGuarantorAddress](#gt1setguarantoraddress)||
|[setGuarantorAnnualIncome](#gt1setguarantorannualincome)||
|[setGuarantorBeginDate](#gt1setguarantorbegindate)||
|[setGuarantorBillingHoldFlag](#gt1setguarantorbillingholdflag)||
|[setGuarantorBirthPlace](#gt1setguarantorbirthplace)||
|[setGuarantorBusinessPhone](#gt1setguarantorbusinessphone)||
|[setGuarantorChargeAdjustmentCode](#gt1setguarantorchargeadjustmentcode)||
|[setGuarantorCreditRatingCode](#gt1setguarantorcreditratingcode)||
|[setGuarantorDateOfBirth](#gt1setguarantordateofbirth)||
|[setGuarantorDeathDateAndTime](#gt1setguarantordeathdateandtime)||
|[setGuarantorDeathFlag](#gt1setguarantordeathflag)||
|[setGuarantorEmployeeID](#gt1setguarantoremployeeid)||
|[setGuarantorEmployerAddress](#gt1setguarantoremployeraddress)||
|[setGuarantorEmployerID](#gt1setguarantoremployerid)||
|[setGuarantorEmployerName](#gt1setguarantoremployername)||
|[setGuarantorEmployerPhone](#gt1setguarantoremployerphone)||
|[setGuarantorEmployersOrganizationName](#gt1setguarantoremployersorganizationname)||
|[setGuarantorEmploymentStatus](#gt1setguarantoremploymentstatus)||
|[setGuarantorEndDate](#gt1setguarantorenddate)||
|[setGuarantorFinancialClass](#gt1setguarantorfinancialclass)||
|[setGuarantorHireEffectiveDate](#gt1setguarantorhireeffectivedate)||
|[setGuarantorHomePhone](#gt1setguarantorhomephone)||
|[setGuarantorHouseholdSize](#gt1setguarantorhouseholdsize)||
|[setGuarantorMaritalStatusCode](#gt1setguarantormaritalstatuscode)||
|[setGuarantorName](#gt1setguarantorname)||
|[setGuarantorNumber](#gt1setguarantornumber)||
|[setGuarantorOrganizationName](#gt1setguarantororganizationname)||
|[setGuarantorPriority](#gt1setguarantorpriority)||
|[setGuarantorRace](#gt1setguarantorrace)||
|[setGuarantorRelationship](#gt1setguarantorrelationship)||
|[setGuarantorSSN](#gt1setguarantorssn)||
|[setGuarantorSex](#gt1setguarantorsex)||
|[setGuarantorSpouseName](#gt1setguarantorspousename)||
|[setGuarantorType](#gt1setguarantortype)||
|[setHandicap](#gt1sethandicap)||
|[setID](#gt1setid)||
|[setJobClass](#gt1setjobclass)||
|[setJobStatus](#gt1setjobstatus)||
|[setJobTitle](#gt1setjobtitle)||
|[setLivingArrangement](#gt1setlivingarrangement)||
|[setLivingDependency](#gt1setlivingdependency)||
|[setMotherMaidenName](#gt1setmothermaidenname)||
|[setNationality](#gt1setnationality)||
|[setPrimaryLanguage](#gt1setprimarylanguage)||
|[setProtectionIndicator](#gt1setprotectionindicator)||
|[setPublicityCode](#gt1setpublicitycode)||
|[setReligion](#gt1setreligion)||
|[setStudentIndicator](#gt1setstudentindicator)||
|[setVipIndicator](#gt1setvipindicator)||

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



### GT1::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getAmbulatoryStatus  

**Description**

```php
 getAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getCitizenship  

**Description**

```php
 getCitizenship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getContactPersonsName  

**Description**

```php
 getContactPersonsName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getContactPersonsPhone  

**Description**

```php
 getContactPersonsPhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getContactReason  

**Description**

```php
 getContactReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getContactRelationship  

**Description**

```php
 getContactRelationship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getEmploymentStopDate  

**Description**

```php
 getEmploymentStopDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getEthnicGroup  

**Description**

```php
 getEthnicGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorAddress  

**Description**

```php
 getGuarantorAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorAnnualIncome  

**Description**

```php
 getGuarantorAnnualIncome (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorBeginDate  

**Description**

```php
 getGuarantorBeginDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorBillingHoldFlag  

**Description**

```php
 getGuarantorBillingHoldFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorBirthPlace  

**Description**

```php
 getGuarantorBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorBusinessPhone  

**Description**

```php
 getGuarantorBusinessPhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorChargeAdjustmentCode  

**Description**

```php
 getGuarantorChargeAdjustmentCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorCreditRatingCode  

**Description**

```php
 getGuarantorCreditRatingCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorDateOfBirth  

**Description**

```php
 getGuarantorDateOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorDeathDateAndTime  

**Description**

```php
 getGuarantorDeathDateAndTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorDeathFlag  

**Description**

```php
 getGuarantorDeathFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEmployeeID  

**Description**

```php
 getGuarantorEmployeeID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEmployerAddress  

**Description**

```php
 getGuarantorEmployerAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEmployerID  

**Description**

```php
 getGuarantorEmployerID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEmployerName  

**Description**

```php
 getGuarantorEmployerName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEmployerPhone  

**Description**

```php
 getGuarantorEmployerPhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEmployersOrganizationName  

**Description**

```php
 getGuarantorEmployersOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEmploymentStatus  

**Description**

```php
 getGuarantorEmploymentStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorEndDate  

**Description**

```php
 getGuarantorEndDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorFinancialClass  

**Description**

```php
 getGuarantorFinancialClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorHireEffectiveDate  

**Description**

```php
 getGuarantorHireEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorHomePhone  

**Description**

```php
 getGuarantorHomePhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorHouseholdSize  

**Description**

```php
 getGuarantorHouseholdSize (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorMaritalStatusCode  

**Description**

```php
 getGuarantorMaritalStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorName  

**Description**

```php
 getGuarantorName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorNumber  

**Description**

```php
 getGuarantorNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorOrganizationName  

**Description**

```php
 getGuarantorOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorPriority  

**Description**

```php
 getGuarantorPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorRace  

**Description**

```php
 getGuarantorRace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorRelationship  

**Description**

```php
 getGuarantorRelationship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorSSN  

**Description**

```php
 getGuarantorSSN (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorSex  

**Description**

```php
 getGuarantorSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorSpouseName  

**Description**

```php
 getGuarantorSpouseName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getGuarantorType  

**Description**

```php
 getGuarantorType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getHandicap  

**Description**

```php
 getHandicap (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getJobClass  

**Description**

```php
 getJobClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getJobStatus  

**Description**

```php
 getJobStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getJobTitle  

**Description**

```php
 getJobTitle (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getLivingArrangement  

**Description**

```php
 getLivingArrangement (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getLivingDependency  

**Description**

```php
 getLivingDependency (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getMotherMaidenName  

**Description**

```php
 getMotherMaidenName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getNationality  

**Description**

```php
 getNationality (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getPrimaryLanguage  

**Description**

```php
 getPrimaryLanguage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getProtectionIndicator  

**Description**

```php
 getProtectionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getPublicityCode  

**Description**

```php
 getPublicityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getReligion  

**Description**

```php
 getReligion (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getStudentIndicator  

**Description**

```php
 getStudentIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::getVipIndicator  

**Description**

```php
 getVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::resetIndex  

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


### GT1::setAmbulatoryStatus  

**Description**

```php
 setAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setCitizenship  

**Description**

```php
 setCitizenship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setContactPersonsName  

**Description**

```php
 setContactPersonsName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setContactPersonsPhone  

**Description**

```php
 setContactPersonsPhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setContactReason  

**Description**

```php
 setContactReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setContactRelationship  

**Description**

```php
 setContactRelationship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setEmploymentStopDate  

**Description**

```php
 setEmploymentStopDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setEthnicGroup  

**Description**

```php
 setEthnicGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorAddress  

**Description**

```php
 setGuarantorAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorAnnualIncome  

**Description**

```php
 setGuarantorAnnualIncome (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorBeginDate  

**Description**

```php
 setGuarantorBeginDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorBillingHoldFlag  

**Description**

```php
 setGuarantorBillingHoldFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorBirthPlace  

**Description**

```php
 setGuarantorBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorBusinessPhone  

**Description**

```php
 setGuarantorBusinessPhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorChargeAdjustmentCode  

**Description**

```php
 setGuarantorChargeAdjustmentCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorCreditRatingCode  

**Description**

```php
 setGuarantorCreditRatingCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorDateOfBirth  

**Description**

```php
 setGuarantorDateOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorDeathDateAndTime  

**Description**

```php
 setGuarantorDeathDateAndTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorDeathFlag  

**Description**

```php
 setGuarantorDeathFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEmployeeID  

**Description**

```php
 setGuarantorEmployeeID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEmployerAddress  

**Description**

```php
 setGuarantorEmployerAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEmployerID  

**Description**

```php
 setGuarantorEmployerID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEmployerName  

**Description**

```php
 setGuarantorEmployerName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEmployerPhone  

**Description**

```php
 setGuarantorEmployerPhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEmployersOrganizationName  

**Description**

```php
 setGuarantorEmployersOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEmploymentStatus  

**Description**

```php
 setGuarantorEmploymentStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorEndDate  

**Description**

```php
 setGuarantorEndDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorFinancialClass  

**Description**

```php
 setGuarantorFinancialClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorHireEffectiveDate  

**Description**

```php
 setGuarantorHireEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorHomePhone  

**Description**

```php
 setGuarantorHomePhone (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorHouseholdSize  

**Description**

```php
 setGuarantorHouseholdSize (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorMaritalStatusCode  

**Description**

```php
 setGuarantorMaritalStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorName  

**Description**

```php
 setGuarantorName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorNumber  

**Description**

```php
 setGuarantorNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorOrganizationName  

**Description**

```php
 setGuarantorOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorPriority  

**Description**

```php
 setGuarantorPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorRace  

**Description**

```php
 setGuarantorRace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorRelationship  

**Description**

```php
 setGuarantorRelationship (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorSSN  

**Description**

```php
 setGuarantorSSN (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorSex  

**Description**

```php
 setGuarantorSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorSpouseName  

**Description**

```php
 setGuarantorSpouseName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setGuarantorType  

**Description**

```php
 setGuarantorType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setHandicap  

**Description**

```php
 setHandicap (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setJobClass  

**Description**

```php
 setJobClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setJobStatus  

**Description**

```php
 setJobStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setJobTitle  

**Description**

```php
 setJobTitle (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setLivingArrangement  

**Description**

```php
 setLivingArrangement (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setLivingDependency  

**Description**

```php
 setLivingDependency (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setMotherMaidenName  

**Description**

```php
 setMotherMaidenName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setNationality  

**Description**

```php
 setNationality (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setPrimaryLanguage  

**Description**

```php
 setPrimaryLanguage (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setProtectionIndicator  

**Description**

```php
 setProtectionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setPublicityCode  

**Description**

```php
 setPublicityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setReligion  

**Description**

```php
 setReligion (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setStudentIndicator  

**Description**

```php
 setStudentIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### GT1::setVipIndicator  

**Description**

```php
 setVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

