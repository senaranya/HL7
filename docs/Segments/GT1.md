# Aranyasen\HL7\Segments\GT1  

GT1 segment class
Reference: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/GT1



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#gt1__destruct)||
|[getAmbulatoryStatus](#gt1getambulatorystatus)|Get Ambulatory Status (GT1.34)|
|[getCitizenship](#gt1getcitizenship)|Get Citizenship (GT1.35)|
|[getContactPersonsName](#gt1getcontactpersonsname)|Get Contact PersonsName (GT1.45)|
|[getContactPersonsPhone](#gt1getcontactpersonsphone)|Get Contact PersonsPhone (GT1.46)|
|[getContactReason](#gt1getcontactreason)|Get Contact Reason (GT1.47)|
|[getContactRelationship](#gt1getcontactrelationship)|Get Contact Relationship (GT1.48)|
|[getEmploymentStopDate](#gt1getemploymentstopdate)|Get Employment StopDate (GT1.32)|
|[getEthnicGroup](#gt1getethnicgroup)|Get Ethnic Group (GT1.44)|
|[getGuarantorAddress](#gt1getguarantoraddress)|Get Guarantor Address (GT1.5)|
|[getGuarantorAnnualIncome](#gt1getguarantorannualincome)|Get Guarantor AnnualIncome (GT1.27)|
|[getGuarantorBeginDate](#gt1getguarantorbegindate)|Get Guarantor BeginDate (GT1.13)|
|[getGuarantorBillingHoldFlag](#gt1getguarantorbillingholdflag)|Get Guarantor BillingHoldFlag (GT1.22)|
|[getGuarantorBirthPlace](#gt1getguarantorbirthplace)|Get Guarantor BirthPlace (GT1.56)|
|[getGuarantorBusinessPhone](#gt1getguarantorbusinessphone)|Get Guarantor BusinessPhone (GT1.7)|
|[getGuarantorChargeAdjustmentCode](#gt1getguarantorchargeadjustmentcode)|Get Guarantor ChargeAdjustmentCode (GT1.26)|
|[getGuarantorCreditRatingCode](#gt1getguarantorcreditratingcode)|Get Guarantor CreditRatingCode (GT1.23)|
|[getGuarantorDateOfBirth](#gt1getguarantordateofbirth)|Get Guarantor DateOfBirth (GT1.8)|
|[getGuarantorDeathDateAndTime](#gt1getguarantordeathdateandtime)|Get Guarantor DeathDateAndTime (GT1.24)|
|[getGuarantorDeathFlag](#gt1getguarantordeathflag)|Get Guarantor DeathFlag (GT1.25)|
|[getGuarantorEmployeeID](#gt1getguarantoremployeeid)|Get Guarantor EmployeeID (GT1.19)|
|[getGuarantorEmployerAddress](#gt1getguarantoremployeraddress)|Get Guarantor EmployerAddress (GT1.17)|
|[getGuarantorEmployerID](#gt1getguarantoremployerid)|Get Guarantor EmployerID (GT1.29)|
|[getGuarantorEmployerName](#gt1getguarantoremployername)|Get Guarantor EmployerName (GT1.16)|
|[getGuarantorEmployerPhone](#gt1getguarantoremployerphone)|Get Guarantor EmployerPhone (GT1.18)|
|[getGuarantorEmployersOrganizationName](#gt1getguarantoremployersorganizationname)|Get Guarantor EmployersOrganizationName (GT1.51)|
|[getGuarantorEmploymentStatus](#gt1getguarantoremploymentstatus)|Get Guarantor EmploymentStatus (GT1.20)|
|[getGuarantorEndDate](#gt1getguarantorenddate)|Get Guarantor EndDate (GT1.14)|
|[getGuarantorFinancialClass](#gt1getguarantorfinancialclass)|Get Guarantor FinancialClass (GT1.54)|
|[getGuarantorHireEffectiveDate](#gt1getguarantorhireeffectivedate)|Get Guarantor HireEffectiveDate (GT1.31)|
|[getGuarantorHomePhone](#gt1getguarantorhomephone)|Get Guarantor HomePhone (GT1.6)|
|[getGuarantorHouseholdSize](#gt1getguarantorhouseholdsize)|Get Guarantor HouseholdSize (GT1.28)|
|[getGuarantorMaritalStatusCode](#gt1getguarantormaritalstatuscode)|Get Guarantor MaritalStatusCode (GT1.30)|
|[getGuarantorName](#gt1getguarantorname)|Get Guarantor Name (GT1.3)|
|[getGuarantorNumber](#gt1getguarantornumber)|Get Guarantor Number (GT1.2)|
|[getGuarantorOrganizationName](#gt1getguarantororganizationname)|Get Guarantor OrganizationName (GT1.21)|
|[getGuarantorPriority](#gt1getguarantorpriority)|Get Guarantor Priority (GT1.15)|
|[getGuarantorRace](#gt1getguarantorrace)|Get Guarantor Race (GT1.55)|
|[getGuarantorRelationship](#gt1getguarantorrelationship)|Get Guarantor Relationship (GT1.11)|
|[getGuarantorSSN](#gt1getguarantorssn)|Get Guarantor SSN (GT1.12)|
|[getGuarantorSex](#gt1getguarantorsex)|Get Guarantor Sex (GT1.9)|
|[getGuarantorSpouseName](#gt1getguarantorspousename)|Get Guarantor SpouseName (GT1.4)|
|[getGuarantorType](#gt1getguarantortype)|Get Guarantor Type (GT1.10)|
|[getHandicap](#gt1gethandicap)|Get Handicap (GT1.52)|
|[getID](#gt1getid)|Get ID (GT1.1)|
|[getJobClass](#gt1getjobclass)|Get Job Class (GT1.50)|
|[getJobStatus](#gt1getjobstatus)|Get Job Status (GT1.53)|
|[getJobTitle](#gt1getjobtitle)|Get Job Title (GT1.49)|
|[getLivingArrangement](#gt1getlivingarrangement)|Get Living Arrangement (GT1.37)|
|[getLivingDependency](#gt1getlivingdependency)|Get Living Dependency (GT1.33)|
|[getMotherMaidenName](#gt1getmothermaidenname)|Get Mother MaidenName (GT1.42)|
|[getNationality](#gt1getnationality)|Get Nationality (GT1.43)|
|[getPrimaryLanguage](#gt1getprimarylanguage)|Get Primary Language (GT1.36)|
|[getProtectionIndicator](#gt1getprotectionindicator)|Get Protection Indicator (GT1.39)|
|[getPublicityCode](#gt1getpublicitycode)|Get Publicity Code (GT1.38)|
|[getReligion](#gt1getreligion)|Get Religion (GT1.41)|
|[getStudentIndicator](#gt1getstudentindicator)|Get Student Indicator (GT1.40)|
|[getVipIndicator](#gt1getvipindicator)|Get Vip Indicator (GT1.57)|
|[resetIndex](#gt1resetindex)|Reset index of this segment|
|[setAmbulatoryStatus](#gt1setambulatorystatus)|Set Ambulatory Status (GT1.34)|
|[setCitizenship](#gt1setcitizenship)|Set Citizenship (GT1.35)|
|[setContactPersonsName](#gt1setcontactpersonsname)|Set Contact Persons Name (GT1.45)|
|[setContactPersonsPhone](#gt1setcontactpersonsphone)|Set Contact Persons Phone (GT1.46)|
|[setContactReason](#gt1setcontactreason)|Set Contact Reason (GT1.47)|
|[setContactRelationship](#gt1setcontactrelationship)|Set Contact Relationship (GT1.48)|
|[setEmploymentStopDate](#gt1setemploymentstopdate)|Set Employment Stop Date (GT1.32)|
|[setEthnicGroup](#gt1setethnicgroup)|Set Ethnic Group (GT1.44)|
|[setGuarantorAddress](#gt1setguarantoraddress)|Set Guarantor Address (GT1.5)|
|[setGuarantorAnnualIncome](#gt1setguarantorannualincome)|Set Guarantor Annual Income (GT1.27)|
|[setGuarantorBeginDate](#gt1setguarantorbegindate)|Set Guarantor Begin Date (GT1.13)|
|[setGuarantorBillingHoldFlag](#gt1setguarantorbillingholdflag)|Set Guarantor Billing Hold Flag (GT1.22)|
|[setGuarantorBirthPlace](#gt1setguarantorbirthplace)|Set Guarantor Birth Place (GT1.56)|
|[setGuarantorBusinessPhone](#gt1setguarantorbusinessphone)|Set Guarantor Business Phone (GT1.7)|
|[setGuarantorChargeAdjustmentCode](#gt1setguarantorchargeadjustmentcode)|Set Guarantor Charge Adjustment Code (GT1.26)|
|[setGuarantorCreditRatingCode](#gt1setguarantorcreditratingcode)|Set Guarantor Credit Rating Code (GT1.23)|
|[setGuarantorDateOfBirth](#gt1setguarantordateofbirth)|Set Guarantor Date Of Birth (GT1.8)|
|[setGuarantorDeathDateAndTime](#gt1setguarantordeathdateandtime)|Set Guarantor Death Date And Time (GT1.24)|
|[setGuarantorDeathFlag](#gt1setguarantordeathflag)|Set Guarantor Death Flag (GT1.25)|
|[setGuarantorEmployeeID](#gt1setguarantoremployeeid)|Set Guarantor Employee ID (GT1.19)|
|[setGuarantorEmployerAddress](#gt1setguarantoremployeraddress)|Set Guarantor Employer Address (GT1.17)|
|[setGuarantorEmployerID](#gt1setguarantoremployerid)|Set Guarantor Employer ID (GT1.29)|
|[setGuarantorEmployerName](#gt1setguarantoremployername)|Set Guarantor Employer Name (GT1.16)|
|[setGuarantorEmployerPhone](#gt1setguarantoremployerphone)|Set Guarantor Employer Phone (GT1.18)|
|[setGuarantorEmployersOrganizationName](#gt1setguarantoremployersorganizationname)|Set Guarantor Employers Organization Name (GT1.51)|
|[setGuarantorEmploymentStatus](#gt1setguarantoremploymentstatus)|Set Guarantor Employment Status (GT1.20)|
|[setGuarantorEndDate](#gt1setguarantorenddate)|Set Guarantor End Date (GT1.14)|
|[setGuarantorFinancialClass](#gt1setguarantorfinancialclass)|Set Guarantor Financial Class (GT1.54)|
|[setGuarantorHireEffectiveDate](#gt1setguarantorhireeffectivedate)|Set Guarantor Hire Effective Date (GT1.31)|
|[setGuarantorHomePhone](#gt1setguarantorhomephone)|Set Guarantor Home Phone (GT1.6)|
|[setGuarantorHouseholdSize](#gt1setguarantorhouseholdsize)|Set Guarantor Household Size (GT1.28)|
|[setGuarantorMaritalStatusCode](#gt1setguarantormaritalstatuscode)|Set Guarantor Marital Status Code (GT1.30)|
|[setGuarantorName](#gt1setguarantorname)|Set Guarantor Name (GT1.3)|
|[setGuarantorNumber](#gt1setguarantornumber)|Set Guarantor Number (GT1.2)|
|[setGuarantorOrganizationName](#gt1setguarantororganizationname)|Set Guarantor Organization Name (GT1.21)|
|[setGuarantorPriority](#gt1setguarantorpriority)|Set Guarantor Priority (GT1.15)|
|[setGuarantorRace](#gt1setguarantorrace)|Set Guarantor Race (GT1.55)|
|[setGuarantorRelationship](#gt1setguarantorrelationship)|Set Guarantor Relationship (GT1.11)|
|[setGuarantorSSN](#gt1setguarantorssn)|Set Guarantor SSN (GT1.12)|
|[setGuarantorSex](#gt1setguarantorsex)||
|[setGuarantorSpouseName](#gt1setguarantorspousename)|Set Guarantor Spouse Name (GT1.4)|
|[setGuarantorType](#gt1setguarantortype)|Set Guarantor Type (GT1.10)|
|[setHandicap](#gt1sethandicap)|Set Handicap (GT1.52)|
|[setID](#gt1setid)|Set ID (GT1.1)|
|[setJobClass](#gt1setjobclass)|Set Job Class (GT1.50)|
|[setJobStatus](#gt1setjobstatus)|Set Job Status (GT1.53)|
|[setJobTitle](#gt1setjobtitle)|Set Job Title (GT1.49)|
|[setLivingArrangement](#gt1setlivingarrangement)|Set Living Arrangement (GT1.37)|
|[setLivingDependency](#gt1setlivingdependency)|Set Living Dependency (GT1.33)|
|[setMotherMaidenName](#gt1setmothermaidenname)|Set Mother Maiden Name (GT1.42)|
|[setNationality](#gt1setnationality)|Set Nationality (GT1.43)|
|[setPrimaryLanguage](#gt1setprimarylanguage)|Set Primary Language (GT1.36)|
|[setProtectionIndicator](#gt1setprotectionindicator)|Set Protection Indicator (GT1.39)|
|[setPublicityCode](#gt1setpublicitycode)|Set Publicity Code (GT1.38)|
|[setReligion](#gt1setreligion)|Set Religion (GT1.41)|
|[setStudentIndicator](#gt1setstudentindicator)|Set Student Indicator (GT1.40)|
|[setVipIndicator](#gt1setvipindicator)|Set Vip Indicator (GT1.57)|

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
public getAmbulatoryStatus (int $position)
```

Get Ambulatory Status (GT1.34) 

 

**Parameters**

* `(int) $position`
: Defaults to 34  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getCitizenship  

**Description**

```php
public getCitizenship (int $position)
```

Get Citizenship (GT1.35) 

 

**Parameters**

* `(int) $position`
: Defaults to 35  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getContactPersonsName  

**Description**

```php
public getContactPersonsName (int $position)
```

Get Contact PersonsName (GT1.45) 

 

**Parameters**

* `(int) $position`
: Defaults to 45  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getContactPersonsPhone  

**Description**

```php
public getContactPersonsPhone (int $position)
```

Get Contact PersonsPhone (GT1.46) 

 

**Parameters**

* `(int) $position`
: Defaults to 46  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getContactReason  

**Description**

```php
public getContactReason (int $position)
```

Get Contact Reason (GT1.47) 

 

**Parameters**

* `(int) $position`
: Defaults to 47  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getContactRelationship  

**Description**

```php
public getContactRelationship (int $position)
```

Get Contact Relationship (GT1.48) 

 

**Parameters**

* `(int) $position`
: Defaults to 48  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getEmploymentStopDate  

**Description**

```php
public getEmploymentStopDate (int $position)
```

Get Employment StopDate (GT1.32) 

 

**Parameters**

* `(int) $position`
: Defaults to 32  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getEthnicGroup  

**Description**

```php
public getEthnicGroup (int $position)
```

Get Ethnic Group (GT1.44) 

 

**Parameters**

* `(int) $position`
: Defaults to 44  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorAddress  

**Description**

```php
public getGuarantorAddress (int $position)
```

Get Guarantor Address (GT1.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorAnnualIncome  

**Description**

```php
public getGuarantorAnnualIncome (int $position)
```

Get Guarantor AnnualIncome (GT1.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorBeginDate  

**Description**

```php
public getGuarantorBeginDate (int $position)
```

Get Guarantor BeginDate (GT1.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorBillingHoldFlag  

**Description**

```php
public getGuarantorBillingHoldFlag (int $position)
```

Get Guarantor BillingHoldFlag (GT1.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorBirthPlace  

**Description**

```php
public getGuarantorBirthPlace (int $position)
```

Get Guarantor BirthPlace (GT1.56) 

 

**Parameters**

* `(int) $position`
: Defaults to 56  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorBusinessPhone  

**Description**

```php
public getGuarantorBusinessPhone (int $position)
```

Get Guarantor BusinessPhone (GT1.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorChargeAdjustmentCode  

**Description**

```php
public getGuarantorChargeAdjustmentCode (int $position)
```

Get Guarantor ChargeAdjustmentCode (GT1.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorCreditRatingCode  

**Description**

```php
public getGuarantorCreditRatingCode (int $position)
```

Get Guarantor CreditRatingCode (GT1.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorDateOfBirth  

**Description**

```php
public getGuarantorDateOfBirth (int $position)
```

Get Guarantor DateOfBirth (GT1.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorDeathDateAndTime  

**Description**

```php
public getGuarantorDeathDateAndTime (int $position)
```

Get Guarantor DeathDateAndTime (GT1.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorDeathFlag  

**Description**

```php
public getGuarantorDeathFlag (int $position)
```

Get Guarantor DeathFlag (GT1.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEmployeeID  

**Description**

```php
public getGuarantorEmployeeID (int $position)
```

Get Guarantor EmployeeID (GT1.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEmployerAddress  

**Description**

```php
public getGuarantorEmployerAddress (int $position)
```

Get Guarantor EmployerAddress (GT1.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEmployerID  

**Description**

```php
public getGuarantorEmployerID (int $position)
```

Get Guarantor EmployerID (GT1.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEmployerName  

**Description**

```php
public getGuarantorEmployerName (int $position)
```

Get Guarantor EmployerName (GT1.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEmployerPhone  

**Description**

```php
public getGuarantorEmployerPhone (int $position)
```

Get Guarantor EmployerPhone (GT1.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEmployersOrganizationName  

**Description**

```php
public getGuarantorEmployersOrganizationName (int $position)
```

Get Guarantor EmployersOrganizationName (GT1.51) 

 

**Parameters**

* `(int) $position`
: Defaults to 51  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEmploymentStatus  

**Description**

```php
public getGuarantorEmploymentStatus (int $position)
```

Get Guarantor EmploymentStatus (GT1.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorEndDate  

**Description**

```php
public getGuarantorEndDate (int $position)
```

Get Guarantor EndDate (GT1.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorFinancialClass  

**Description**

```php
public getGuarantorFinancialClass (int $position)
```

Get Guarantor FinancialClass (GT1.54) 

 

**Parameters**

* `(int) $position`
: Defaults to 54  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorHireEffectiveDate  

**Description**

```php
public getGuarantorHireEffectiveDate (int $position)
```

Get Guarantor HireEffectiveDate (GT1.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorHomePhone  

**Description**

```php
public getGuarantorHomePhone (int $position)
```

Get Guarantor HomePhone (GT1.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorHouseholdSize  

**Description**

```php
public getGuarantorHouseholdSize (int $position)
```

Get Guarantor HouseholdSize (GT1.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorMaritalStatusCode  

**Description**

```php
public getGuarantorMaritalStatusCode (int $position)
```

Get Guarantor MaritalStatusCode (GT1.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorName  

**Description**

```php
public getGuarantorName (int $position)
```

Get Guarantor Name (GT1.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorNumber  

**Description**

```php
public getGuarantorNumber (int $position)
```

Get Guarantor Number (GT1.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorOrganizationName  

**Description**

```php
public getGuarantorOrganizationName (int $position)
```

Get Guarantor OrganizationName (GT1.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorPriority  

**Description**

```php
public getGuarantorPriority (int $position)
```

Get Guarantor Priority (GT1.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorRace  

**Description**

```php
public getGuarantorRace (int $position)
```

Get Guarantor Race (GT1.55) 

 

**Parameters**

* `(int) $position`
: Defaults to 55  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorRelationship  

**Description**

```php
public getGuarantorRelationship (int $position)
```

Get Guarantor Relationship (GT1.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorSSN  

**Description**

```php
public getGuarantorSSN (int $position)
```

Get Guarantor SSN (GT1.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorSex  

**Description**

```php
public getGuarantorSex (int $position)
```

Get Guarantor Sex (GT1.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorSpouseName  

**Description**

```php
public getGuarantorSpouseName (int $position)
```

Get Guarantor SpouseName (GT1.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getGuarantorType  

**Description**

```php
public getGuarantorType (int $position)
```

Get Guarantor Type (GT1.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getHandicap  

**Description**

```php
public getHandicap (int $position)
```

Get Handicap (GT1.52) 

 

**Parameters**

* `(int) $position`
: Defaults to 52  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getID  

**Description**

```php
public getID (int $position)
```

Get ID (GT1.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getJobClass  

**Description**

```php
public getJobClass (int $position)
```

Get Job Class (GT1.50) 

 

**Parameters**

* `(int) $position`
: Defaults to 50  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getJobStatus  

**Description**

```php
public getJobStatus (int $position)
```

Get Job Status (GT1.53) 

 

**Parameters**

* `(int) $position`
: Defaults to 53  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getJobTitle  

**Description**

```php
public getJobTitle (int $position)
```

Get Job Title (GT1.49) 

 

**Parameters**

* `(int) $position`
: Defaults to 49  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getLivingArrangement  

**Description**

```php
public getLivingArrangement (int $position)
```

Get Living Arrangement (GT1.37) 

 

**Parameters**

* `(int) $position`
: Defaults to 37  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getLivingDependency  

**Description**

```php
public getLivingDependency (int $position)
```

Get Living Dependency (GT1.33) 

 

**Parameters**

* `(int) $position`
: Defaults to 33  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getMotherMaidenName  

**Description**

```php
public getMotherMaidenName (int $position)
```

Get Mother MaidenName (GT1.42) 

 

**Parameters**

* `(int) $position`
: Defaults to 42  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getNationality  

**Description**

```php
public getNationality (int $position)
```

Get Nationality (GT1.43) 

 

**Parameters**

* `(int) $position`
: Defaults to 43  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getPrimaryLanguage  

**Description**

```php
public getPrimaryLanguage (int $position)
```

Get Primary Language (GT1.36) 

 

**Parameters**

* `(int) $position`
: Defaults to 36  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getProtectionIndicator  

**Description**

```php
public getProtectionIndicator (int $position)
```

Get Protection Indicator (GT1.39) 

 

**Parameters**

* `(int) $position`
: Defaults to 39  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getPublicityCode  

**Description**

```php
public getPublicityCode (int $position)
```

Get Publicity Code (GT1.38) 

 

**Parameters**

* `(int) $position`
: Defaults to 38  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getReligion  

**Description**

```php
public getReligion (int $position)
```

Get Religion (GT1.41) 

 

**Parameters**

* `(int) $position`
: Defaults to 41  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getStudentIndicator  

**Description**

```php
public getStudentIndicator (int $position)
```

Get Student Indicator (GT1.40) 

 

**Parameters**

* `(int) $position`
: Defaults to 40  

**Return Values**

`array|string|int|null`




<hr />


### GT1::getVipIndicator  

**Description**

```php
public getVipIndicator (int $position)
```

Get Vip Indicator (GT1.57) 

 

**Parameters**

* `(int) $position`
: Defaults to 57  

**Return Values**

`array|string|int|null`




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
public setAmbulatoryStatus (string|int|array|null $value, int $position)
```

Set Ambulatory Status (GT1.34) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 34  

**Return Values**

`bool`




<hr />


### GT1::setCitizenship  

**Description**

```php
public setCitizenship (string|int|array|null $value, int $position)
```

Set Citizenship (GT1.35) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 35  

**Return Values**

`bool`




<hr />


### GT1::setContactPersonsName  

**Description**

```php
public setContactPersonsName (string|int|array|null $value, int $position)
```

Set Contact Persons Name (GT1.45) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 45  

**Return Values**

`bool`




<hr />


### GT1::setContactPersonsPhone  

**Description**

```php
public setContactPersonsPhone (string|int|array|null $value, int $position)
```

Set Contact Persons Phone (GT1.46) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 46  

**Return Values**

`bool`




<hr />


### GT1::setContactReason  

**Description**

```php
public setContactReason (string|int|array|null $value, int $position)
```

Set Contact Reason (GT1.47) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 47  

**Return Values**

`bool`




<hr />


### GT1::setContactRelationship  

**Description**

```php
public setContactRelationship (string|int|array|null $value, int $position)
```

Set Contact Relationship (GT1.48) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 48  

**Return Values**

`bool`




<hr />


### GT1::setEmploymentStopDate  

**Description**

```php
public setEmploymentStopDate (string|int|array|null $value, int $position)
```

Set Employment Stop Date (GT1.32) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 32  

**Return Values**

`bool`




<hr />


### GT1::setEthnicGroup  

**Description**

```php
public setEthnicGroup (string|int|array|null $value, int $position)
```

Set Ethnic Group (GT1.44) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 44  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorAddress  

**Description**

```php
public setGuarantorAddress (string|int|array|null $value, int $position)
```

Set Guarantor Address (GT1.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorAnnualIncome  

**Description**

```php
public setGuarantorAnnualIncome (string|int|array|null $value, int $position)
```

Set Guarantor Annual Income (GT1.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorBeginDate  

**Description**

```php
public setGuarantorBeginDate (string|int|array|null $value, int $position)
```

Set Guarantor Begin Date (GT1.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorBillingHoldFlag  

**Description**

```php
public setGuarantorBillingHoldFlag (string|int|array|null $value, int $position)
```

Set Guarantor Billing Hold Flag (GT1.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorBirthPlace  

**Description**

```php
public setGuarantorBirthPlace (string|int|array|null $value, int $position)
```

Set Guarantor Birth Place (GT1.56) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 56  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorBusinessPhone  

**Description**

```php
public setGuarantorBusinessPhone (string|int|array|null $value, int $position)
```

Set Guarantor Business Phone (GT1.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorChargeAdjustmentCode  

**Description**

```php
public setGuarantorChargeAdjustmentCode (string|int|array|null $value, int $position)
```

Set Guarantor Charge Adjustment Code (GT1.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorCreditRatingCode  

**Description**

```php
public setGuarantorCreditRatingCode (string|int|array|null $value, int $position)
```

Set Guarantor Credit Rating Code (GT1.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorDateOfBirth  

**Description**

```php
public setGuarantorDateOfBirth (string|int|array|null $value, int $position)
```

Set Guarantor Date Of Birth (GT1.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorDeathDateAndTime  

**Description**

```php
public setGuarantorDeathDateAndTime (string|int|array|null $value, int $position)
```

Set Guarantor Death Date And Time (GT1.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorDeathFlag  

**Description**

```php
public setGuarantorDeathFlag (string|int|array|null $value, int $position)
```

Set Guarantor Death Flag (GT1.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEmployeeID  

**Description**

```php
public setGuarantorEmployeeID (string|int|array|null $value, int $position)
```

Set Guarantor Employee ID (GT1.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEmployerAddress  

**Description**

```php
public setGuarantorEmployerAddress (string|int|array|null $value, int $position)
```

Set Guarantor Employer Address (GT1.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEmployerID  

**Description**

```php
public setGuarantorEmployerID (string|int|array|null $value, int $position)
```

Set Guarantor Employer ID (GT1.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEmployerName  

**Description**

```php
public setGuarantorEmployerName (string|int|array|null $value, int $position)
```

Set Guarantor Employer Name (GT1.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEmployerPhone  

**Description**

```php
public setGuarantorEmployerPhone (string|int|array|null $value, int $position)
```

Set Guarantor Employer Phone (GT1.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEmployersOrganizationName  

**Description**

```php
public setGuarantorEmployersOrganizationName (string|int|array|null $value, int $position)
```

Set Guarantor Employers Organization Name (GT1.51) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 51  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEmploymentStatus  

**Description**

```php
public setGuarantorEmploymentStatus (string|int|array|null $value, int $position)
```

Set Guarantor Employment Status (GT1.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorEndDate  

**Description**

```php
public setGuarantorEndDate (string|int|array|null $value, int $position)
```

Set Guarantor End Date (GT1.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorFinancialClass  

**Description**

```php
public setGuarantorFinancialClass (string|int|array|null $value, int $position)
```

Set Guarantor Financial Class (GT1.54) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 54  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorHireEffectiveDate  

**Description**

```php
public setGuarantorHireEffectiveDate (string|int|array|null $value, int $position)
```

Set Guarantor Hire Effective Date (GT1.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorHomePhone  

**Description**

```php
public setGuarantorHomePhone (string|int|array|null $value, int $position)
```

Set Guarantor Home Phone (GT1.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorHouseholdSize  

**Description**

```php
public setGuarantorHouseholdSize (string|int|array|null $value, int $position)
```

Set Guarantor Household Size (GT1.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorMaritalStatusCode  

**Description**

```php
public setGuarantorMaritalStatusCode (string|int|array|null $value, int $position)
```

Set Guarantor Marital Status Code (GT1.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorName  

**Description**

```php
public setGuarantorName (string|int|array|null $value, int $position)
```

Set Guarantor Name (GT1.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorNumber  

**Description**

```php
public setGuarantorNumber (string|int|array|null $value, int $position)
```

Set Guarantor Number (GT1.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorOrganizationName  

**Description**

```php
public setGuarantorOrganizationName (string|int|array|null $value, int $position)
```

Set Guarantor Organization Name (GT1.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorPriority  

**Description**

```php
public setGuarantorPriority (string|int|array|null $value, int $position)
```

Set Guarantor Priority (GT1.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorRace  

**Description**

```php
public setGuarantorRace (string|int|array|null $value, int $position)
```

Set Guarantor Race (GT1.55) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 55  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorRelationship  

**Description**

```php
public setGuarantorRelationship (string|int|array|null $value, int $position)
```

Set Guarantor Relationship (GT1.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorSSN  

**Description**

```php
public setGuarantorSSN (string|int|array|null $value, int $position)
```

Set Guarantor SSN (GT1.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




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
public setGuarantorSpouseName (string|int|array|null $value, int $position)
```

Set Guarantor Spouse Name (GT1.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### GT1::setGuarantorType  

**Description**

```php
public setGuarantorType (string|int|array|null $value, int $position)
```

Set Guarantor Type (GT1.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### GT1::setHandicap  

**Description**

```php
public setHandicap (string|int|array|null $value, int $position)
```

Set Handicap (GT1.52) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 52  

**Return Values**

`bool`




<hr />


### GT1::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (GT1.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### GT1::setJobClass  

**Description**

```php
public setJobClass (string|int|array|null $value, int $position)
```

Set Job Class (GT1.50) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 50  

**Return Values**

`bool`




<hr />


### GT1::setJobStatus  

**Description**

```php
public setJobStatus (string|int|array|null $value, int $position)
```

Set Job Status (GT1.53) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 53  

**Return Values**

`bool`




<hr />


### GT1::setJobTitle  

**Description**

```php
public setJobTitle (string|int|array|null $value, int $position)
```

Set Job Title (GT1.49) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 49  

**Return Values**

`bool`




<hr />


### GT1::setLivingArrangement  

**Description**

```php
public setLivingArrangement (string|int|array|null $value, int $position)
```

Set Living Arrangement (GT1.37) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 37  

**Return Values**

`bool`




<hr />


### GT1::setLivingDependency  

**Description**

```php
public setLivingDependency (string|int|array|null $value, int $position)
```

Set Living Dependency (GT1.33) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 33  

**Return Values**

`bool`




<hr />


### GT1::setMotherMaidenName  

**Description**

```php
public setMotherMaidenName (string|int|array|null $value, int $position)
```

Set Mother Maiden Name (GT1.42) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 42  

**Return Values**

`bool`




<hr />


### GT1::setNationality  

**Description**

```php
public setNationality (string|int|array|null $value, int $position)
```

Set Nationality (GT1.43) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 43  

**Return Values**

`bool`




<hr />


### GT1::setPrimaryLanguage  

**Description**

```php
public setPrimaryLanguage (string|int|array|null $value, int $position)
```

Set Primary Language (GT1.36) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 36  

**Return Values**

`bool`




<hr />


### GT1::setProtectionIndicator  

**Description**

```php
public setProtectionIndicator (string|int|array|null $value, int $position)
```

Set Protection Indicator (GT1.39) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 39  

**Return Values**

`bool`




<hr />


### GT1::setPublicityCode  

**Description**

```php
public setPublicityCode (string|int|array|null $value, int $position)
```

Set Publicity Code (GT1.38) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 38  

**Return Values**

`bool`




<hr />


### GT1::setReligion  

**Description**

```php
public setReligion (string|int|array|null $value, int $position)
```

Set Religion (GT1.41) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 41  

**Return Values**

`bool`




<hr />


### GT1::setStudentIndicator  

**Description**

```php
public setStudentIndicator (string|int|array|null $value, int $position)
```

Set Student Indicator (GT1.40) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 40  

**Return Values**

`bool`




<hr />


### GT1::setVipIndicator  

**Description**

```php
public setVipIndicator (string|int|array|null $value, int $position)
```

Set Vip Indicator (GT1.57) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 57  

**Return Values**

`bool`




<hr />

