# Aranyasen\HL7\Segments\IN1  

IN1 segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-in1-insurance-segment



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#in1__destruct)||
|[getAssignmentOfBenefits](#in1getassignmentofbenefits)|Get Assignment Of Benefits (IN1.20)|
|[getAuthorizationInformation](#in1getauthorizationinformation)|Get Authorization Information (IN1.14)|
|[getBillingStatus](#in1getbillingstatus)|Get Billing Status (IN1.32)|
|[getCompanyPlanCode](#in1getcompanyplancode)|Get Company Plan Code (IN1.35)|
|[getCoordOfBenPriority](#in1getcoordofbenpriority)|Get Coord Of Ben Priority (IN1.22)|
|[getCoordinationOfBenefits](#in1getcoordinationofbenefits)|Get Coordination Of Benefits (IN1.21)|
|[getCoverageType](#in1getcoveragetype)|Get Coverage Type (IN1.47)|
|[getDelayBeforeLRDay](#in1getdelaybeforelrday)|Get Delay Before LRDay (IN1.34)|
|[getGroupName](#in1getgroupname)|Get Group Name (IN1.9)|
|[getGroupNumber](#in1getgroupnumber)|Get Group Number (IN1.8)|
|[getHandicap](#in1gethandicap)|Get Handicap (IN1.48)|
|[getID](#in1getid)|Get ID (IN1.1)|
|[getInsuranceCoContactPerson](#in1getinsurancecocontactperson)|Get Insurance Co Contact Person (IN1.6)|
|[getInsuranceCoPhoneNumber](#in1getinsurancecophonenumber)|Get Insurance Co Phone Number (IN1.7)|
|[getInsuranceCompanyAddress](#in1getinsurancecompanyaddress)|Get Insurance Company Address (IN1.5)|
|[getInsuranceCompanyID](#in1getinsurancecompanyid)|Get Insurance Company ID (IN1.3)|
|[getInsuranceCompanyName](#in1getinsurancecompanyname)|Get Insurance Company Name (IN1.4)|
|[getInsurancePlanID](#in1getinsuranceplanid)|Get Insurance Plan ID (IN1.2)|
|[getInsuredsAddress](#in1getinsuredsaddress)|Get Insureds Address (IN1.19)|
|[getInsuredsDateOfBirth](#in1getinsuredsdateofbirth)|Get Insureds Date Of Birth (IN1.18)|
|[getInsuredsEmployersAddress](#in1getinsuredsemployersaddress)|Get Insureds Employers Address (IN1.44)|
|[getInsuredsEmploymentStatus](#in1getinsuredsemploymentstatus)|Get Insureds Employment Status (IN1.42)|
|[getInsuredsGroupEmpID](#in1getinsuredsgroupempid)|Get Insureds Group Emp ID (IN1.10)|
|[getInsuredsGroupEmpName](#in1getinsuredsgroupempname)|Get Insureds Group Emp Name (IN1.11)|
|[getInsuredsIDNumber](#in1getinsuredsidnumber)|Get Insureds IDNumber (IN1.49)|
|[getInsuredsRelationshipToPatient](#in1getinsuredsrelationshiptopatient)|Get Insureds Relationship To Patient (IN1.17)|
|[getInsuredsSex](#in1getinsuredssex)|Get Insureds Sex (IN1.43)|
|[getLifetimeReserveDays](#in1getlifetimereservedays)|Get Lifetime Reserve Days (IN1.33)|
|[getNameOfInsured](#in1getnameofinsured)|Get Name Of Insured (IN1.16)|
|[getNoticeOfAdmissionDate](#in1getnoticeofadmissiondate)|Get Notice Of Admission Date (IN1.24)|
|[getNoticeOfAdmissionFlag](#in1getnoticeofadmissionflag)|Get Notice Of Admission Flag (IN1.23)|
|[getPlanEffectiveDate](#in1getplaneffectivedate)|Get Plan Effective Date (IN1.12)|
|[getPlanExpirationDate](#in1getplanexpirationdate)|Get Plan Expiration Date (IN1.13)|
|[getPlanType](#in1getplantype)|Get Plan Type (IN1.15)|
|[getPolicyDeductible](#in1getpolicydeductible)|Get Policy Deductible (IN1.37)|
|[getPolicyLimitAmount](#in1getpolicylimitamount)|Get Policy Limit Amount (IN1.38)|
|[getPolicyLimitDays](#in1getpolicylimitdays)|Get Policy Limit Days (IN1.39)|
|[getPolicyNumber](#in1getpolicynumber)|Get Policy Number (IN1.36)|
|[getPreAdmitCertPAC](#in1getpreadmitcertpac)|Get Pre Admit Cert PAC (IN1.28)|
|[getPriorInsurancePlanID](#in1getpriorinsuranceplanid)|Get Prior Insurance Plan ID (IN1.46)|
|[getReleaseInformationCode](#in1getreleaseinformationcode)|Get Release Information Code (IN1.27)|
|[getReportOfEligibilityDate](#in1getreportofeligibilitydate)|Get Report Of Eligibility Date (IN1.26)|
|[getReportOfEligibilityFlag](#in1getreportofeligibilityflag)|Get Report Of Eligibility Flag (IN1.25)|
|[getRoomRatePrivate](#in1getroomrateprivate)|Get Room Rate Private (IN1.41)|
|[getRoomRateSemiPrivate](#in1getroomratesemiprivate)|Get Room Rate Semi Private (IN1.40)|
|[getTypeOfAgreementCode](#in1gettypeofagreementcode)|Get Type Of Agreement Code (IN1.31)|
|[getVerificationBy](#in1getverificationby)|Get Verification By (IN1.30)|
|[getVerificationDateTime](#in1getverificationdatetime)|Get Verification Date Time (IN1.29)|
|[getVerificationStatus](#in1getverificationstatus)|Get Verification Status (IN1.45)|
|[resetIndex](#in1resetindex)|Reset index of this segment|
|[setAssignmentOfBenefits](#in1setassignmentofbenefits)|Set Assignment Of Benefits (IN1.20)|
|[setAuthorizationInformation](#in1setauthorizationinformation)|Set Authorization Information (IN1.14)|
|[setBillingStatus](#in1setbillingstatus)|Set Billing Status (IN1.32)|
|[setCompanyPlanCode](#in1setcompanyplancode)|Set Company Plan Code (IN1.35)|
|[setCoordOfBenPriority](#in1setcoordofbenpriority)|Set Coord Of Ben Priority (IN1.22)|
|[setCoordinationOfBenefits](#in1setcoordinationofbenefits)|Set Coordination Of Benefits (IN1.21)|
|[setCoverageType](#in1setcoveragetype)|Set Coverage Type (IN1.47)|
|[setDelayBeforeLRDay](#in1setdelaybeforelrday)|Set Delay Before LRDay (IN1.34)|
|[setGroupName](#in1setgroupname)|Set Group Name (IN1.9)|
|[setGroupNumber](#in1setgroupnumber)|Set Group Number (IN1.8)|
|[setHandicap](#in1sethandicap)|Set Handicap (IN1.48)|
|[setID](#in1setid)||
|[setInsuranceCoContactPerson](#in1setinsurancecocontactperson)|Set Insurance Co Contact Person (IN1.6)|
|[setInsuranceCoPhoneNumber](#in1setinsurancecophonenumber)|Set Insurance Co Phone Number (IN1.7)|
|[setInsuranceCompanyAddress](#in1setinsurancecompanyaddress)|Set Insurance Company Address (IN1.5)|
|[setInsuranceCompanyID](#in1setinsurancecompanyid)|Set Insurance Company ID (IN1.3)|
|[setInsuranceCompanyName](#in1setinsurancecompanyname)|Set Insurance Company Name (IN1.4)|
|[setInsurancePlanID](#in1setinsuranceplanid)|Set Insurance Plan ID (IN1.2)|
|[setInsuredsAddress](#in1setinsuredsaddress)|Set Insureds Address (IN1.19)|
|[setInsuredsDateOfBirth](#in1setinsuredsdateofbirth)|Set Insureds Date Of Birth (IN1.18)|
|[setInsuredsEmployersAddress](#in1setinsuredsemployersaddress)|Set Insureds Employers Address (IN1.44)|
|[setInsuredsEmploymentStatus](#in1setinsuredsemploymentstatus)|Set Insureds Employment Status (IN1.42)|
|[setInsuredsGroupEmpID](#in1setinsuredsgroupempid)|Set Insureds Group Emp ID (IN1.10)|
|[setInsuredsGroupEmpName](#in1setinsuredsgroupempname)|Set Insureds Group Emp Name (IN1.11)|
|[setInsuredsIDNumber](#in1setinsuredsidnumber)|Set Insureds IDNumber (IN1.49)|
|[setInsuredsRelationshipToPatient](#in1setinsuredsrelationshiptopatient)|Set Insureds Relationship To Patient (IN1.17)|
|[setInsuredsSex](#in1setinsuredssex)|Set Insureds Sex (IN1.43)|
|[setLifetimeReserveDays](#in1setlifetimereservedays)|Set Lifetime Reserve Days (IN1.33)|
|[setNameOfInsured](#in1setnameofinsured)|Set Name Of Insured (IN1.16)|
|[setNoticeOfAdmissionDate](#in1setnoticeofadmissiondate)|Set Notice Of Admission Date (IN1.24)|
|[setNoticeOfAdmissionFlag](#in1setnoticeofadmissionflag)|Set Notice Of Admission Flag (IN1.23)|
|[setPlanEffectiveDate](#in1setplaneffectivedate)|Set Plan Effective Date (IN1.12)|
|[setPlanExpirationDate](#in1setplanexpirationdate)|Set Plan Expiration Date (IN1.13)|
|[setPlanType](#in1setplantype)|Set Plan Type (IN1.15)|
|[setPolicyDeductible](#in1setpolicydeductible)|Set Policy Deductible (IN1.37)|
|[setPolicyLimitAmount](#in1setpolicylimitamount)|Set Policy Limit Amount (IN1.38)|
|[setPolicyLimitDays](#in1setpolicylimitdays)|Set Policy Limit Days (IN1.39)|
|[setPolicyNumber](#in1setpolicynumber)|Set Policy Number (IN1.36)|
|[setPreAdmitCertPAC](#in1setpreadmitcertpac)|Set Pre Admit Cert PAC (IN1.28)|
|[setPriorInsurancePlanID](#in1setpriorinsuranceplanid)|Set Prior Insurance Plan ID (IN1.46)|
|[setReleaseInformationCode](#in1setreleaseinformationcode)|Set Release Information Code (IN1.27)|
|[setReportOfEligibilityDate](#in1setreportofeligibilitydate)|Set Report Of Eligibility Date (IN1.26)|
|[setReportOfEligibilityFlag](#in1setreportofeligibilityflag)|Set Report Of Eligibility Flag (IN1.25)|
|[setRoomRatePrivate](#in1setroomrateprivate)|Set Room Rate Private (IN1.41)|
|[setRoomRateSemiPrivate](#in1setroomratesemiprivate)|Set Room Rate Semi Private (IN1.40)|
|[setTypeOfAgreementCode](#in1settypeofagreementcode)|Set Type Of Agreement Code (IN1.31)|
|[setVerificationBy](#in1setverificationby)|Set Verification By (IN1.30)|
|[setVerificationDateTime](#in1setverificationdatetime)|Set Verification Date Time (IN1.29)|
|[setVerificationStatus](#in1setverificationstatus)|Set Verification Status (IN1.45)|

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



### IN1::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getAssignmentOfBenefits  

**Description**

```php
public getAssignmentOfBenefits (int $position)
```

Get Assignment Of Benefits (IN1.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getAuthorizationInformation  

**Description**

```php
public getAuthorizationInformation (int $position)
```

Get Authorization Information (IN1.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getBillingStatus  

**Description**

```php
public getBillingStatus (int $position)
```

Get Billing Status (IN1.32) 

 

**Parameters**

* `(int) $position`
: Defaults to 32  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getCompanyPlanCode  

**Description**

```php
public getCompanyPlanCode (int $position)
```

Get Company Plan Code (IN1.35) 

 

**Parameters**

* `(int) $position`
: Defaults to 35  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getCoordOfBenPriority  

**Description**

```php
public getCoordOfBenPriority (int $position)
```

Get Coord Of Ben Priority (IN1.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getCoordinationOfBenefits  

**Description**

```php
public getCoordinationOfBenefits (int $position)
```

Get Coordination Of Benefits (IN1.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getCoverageType  

**Description**

```php
public getCoverageType (int $position)
```

Get Coverage Type (IN1.47) 

 

**Parameters**

* `(int) $position`
: Defaults to 47  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getDelayBeforeLRDay  

**Description**

```php
public getDelayBeforeLRDay (int $position)
```

Get Delay Before LRDay (IN1.34) 

 

**Parameters**

* `(int) $position`
: Defaults to 34  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getGroupName  

**Description**

```php
public getGroupName (int $position)
```

Get Group Name (IN1.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getGroupNumber  

**Description**

```php
public getGroupNumber (int $position)
```

Get Group Number (IN1.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getHandicap  

**Description**

```php
public getHandicap (int $position)
```

Get Handicap (IN1.48) 

 

**Parameters**

* `(int) $position`
: Defaults to 48  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getID  

**Description**

```php
public getID (int $position)
```

Get ID (IN1.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuranceCoContactPerson  

**Description**

```php
public getInsuranceCoContactPerson (int $position)
```

Get Insurance Co Contact Person (IN1.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuranceCoPhoneNumber  

**Description**

```php
public getInsuranceCoPhoneNumber (int $position)
```

Get Insurance Co Phone Number (IN1.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuranceCompanyAddress  

**Description**

```php
public getInsuranceCompanyAddress (int $position)
```

Get Insurance Company Address (IN1.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuranceCompanyID  

**Description**

```php
public getInsuranceCompanyID (int $position)
```

Get Insurance Company ID (IN1.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuranceCompanyName  

**Description**

```php
public getInsuranceCompanyName (int $position)
```

Get Insurance Company Name (IN1.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsurancePlanID  

**Description**

```php
public getInsurancePlanID (int $position)
```

Get Insurance Plan ID (IN1.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsAddress  

**Description**

```php
public getInsuredsAddress (int $position)
```

Get Insureds Address (IN1.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsDateOfBirth  

**Description**

```php
public getInsuredsDateOfBirth (int $position)
```

Get Insureds Date Of Birth (IN1.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsEmployersAddress  

**Description**

```php
public getInsuredsEmployersAddress (int $position)
```

Get Insureds Employers Address (IN1.44) 

 

**Parameters**

* `(int) $position`
: Defaults to 44  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsEmploymentStatus  

**Description**

```php
public getInsuredsEmploymentStatus (int $position)
```

Get Insureds Employment Status (IN1.42) 

 

**Parameters**

* `(int) $position`
: Defaults to 42  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsGroupEmpID  

**Description**

```php
public getInsuredsGroupEmpID (int $position)
```

Get Insureds Group Emp ID (IN1.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsGroupEmpName  

**Description**

```php
public getInsuredsGroupEmpName (int $position)
```

Get Insureds Group Emp Name (IN1.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsIDNumber  

**Description**

```php
public getInsuredsIDNumber (int $position)
```

Get Insureds IDNumber (IN1.49) 

 

**Parameters**

* `(int) $position`
: Defaults to 49  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsRelationshipToPatient  

**Description**

```php
public getInsuredsRelationshipToPatient (int $position)
```

Get Insureds Relationship To Patient (IN1.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getInsuredsSex  

**Description**

```php
public getInsuredsSex (int $position)
```

Get Insureds Sex (IN1.43) 

 

**Parameters**

* `(int) $position`
: Defaults to 43  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getLifetimeReserveDays  

**Description**

```php
public getLifetimeReserveDays (int $position)
```

Get Lifetime Reserve Days (IN1.33) 

 

**Parameters**

* `(int) $position`
: Defaults to 33  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getNameOfInsured  

**Description**

```php
public getNameOfInsured (int $position)
```

Get Name Of Insured (IN1.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getNoticeOfAdmissionDate  

**Description**

```php
public getNoticeOfAdmissionDate (int $position)
```

Get Notice Of Admission Date (IN1.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getNoticeOfAdmissionFlag  

**Description**

```php
public getNoticeOfAdmissionFlag (int $position)
```

Get Notice Of Admission Flag (IN1.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPlanEffectiveDate  

**Description**

```php
public getPlanEffectiveDate (int $position)
```

Get Plan Effective Date (IN1.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPlanExpirationDate  

**Description**

```php
public getPlanExpirationDate (int $position)
```

Get Plan Expiration Date (IN1.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPlanType  

**Description**

```php
public getPlanType (int $position)
```

Get Plan Type (IN1.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPolicyDeductible  

**Description**

```php
public getPolicyDeductible (int $position)
```

Get Policy Deductible (IN1.37) 

 

**Parameters**

* `(int) $position`
: Defaults to 37  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPolicyLimitAmount  

**Description**

```php
public getPolicyLimitAmount (int $position)
```

Get Policy Limit Amount (IN1.38) 

 

**Parameters**

* `(int) $position`
: Defaults to 38  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPolicyLimitDays  

**Description**

```php
public getPolicyLimitDays (int $position)
```

Get Policy Limit Days (IN1.39) 

 

**Parameters**

* `(int) $position`
: Defaults to 39  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPolicyNumber  

**Description**

```php
public getPolicyNumber (int $position)
```

Get Policy Number (IN1.36) 

 

**Parameters**

* `(int) $position`
: Defaults to 36  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPreAdmitCertPAC  

**Description**

```php
public getPreAdmitCertPAC (int $position)
```

Get Pre Admit Cert PAC (IN1.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getPriorInsurancePlanID  

**Description**

```php
public getPriorInsurancePlanID (int $position)
```

Get Prior Insurance Plan ID (IN1.46) 

 

**Parameters**

* `(int) $position`
: Defaults to 46  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getReleaseInformationCode  

**Description**

```php
public getReleaseInformationCode (int $position)
```

Get Release Information Code (IN1.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getReportOfEligibilityDate  

**Description**

```php
public getReportOfEligibilityDate (int $position)
```

Get Report Of Eligibility Date (IN1.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getReportOfEligibilityFlag  

**Description**

```php
public getReportOfEligibilityFlag (int $position)
```

Get Report Of Eligibility Flag (IN1.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getRoomRatePrivate  

**Description**

```php
public getRoomRatePrivate (int $position)
```

Get Room Rate Private (IN1.41) 

 

**Parameters**

* `(int) $position`
: Defaults to 41  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getRoomRateSemiPrivate  

**Description**

```php
public getRoomRateSemiPrivate (int $position)
```

Get Room Rate Semi Private (IN1.40) 

 

**Parameters**

* `(int) $position`
: Defaults to 40  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getTypeOfAgreementCode  

**Description**

```php
public getTypeOfAgreementCode (int $position)
```

Get Type Of Agreement Code (IN1.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getVerificationBy  

**Description**

```php
public getVerificationBy (int $position)
```

Get Verification By (IN1.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getVerificationDateTime  

**Description**

```php
public getVerificationDateTime (int $position)
```

Get Verification Date Time (IN1.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### IN1::getVerificationStatus  

**Description**

```php
public getVerificationStatus (int $position)
```

Get Verification Status (IN1.45) 

 

**Parameters**

* `(int) $position`
: Defaults to 45  

**Return Values**

`array|string|int|null`




<hr />


### IN1::resetIndex  

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


### IN1::setAssignmentOfBenefits  

**Description**

```php
public setAssignmentOfBenefits (string|int|array|null $value, int $position)
```

Set Assignment Of Benefits (IN1.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### IN1::setAuthorizationInformation  

**Description**

```php
public setAuthorizationInformation (string|int|array|null $value, int $position)
```

Set Authorization Information (IN1.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### IN1::setBillingStatus  

**Description**

```php
public setBillingStatus (string|int|array|null $value, int $position)
```

Set Billing Status (IN1.32) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 32  

**Return Values**

`bool`




<hr />


### IN1::setCompanyPlanCode  

**Description**

```php
public setCompanyPlanCode (string|int|array|null $value, int $position)
```

Set Company Plan Code (IN1.35) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 35  

**Return Values**

`bool`




<hr />


### IN1::setCoordOfBenPriority  

**Description**

```php
public setCoordOfBenPriority (string|int|array|null $value, int $position)
```

Set Coord Of Ben Priority (IN1.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### IN1::setCoordinationOfBenefits  

**Description**

```php
public setCoordinationOfBenefits (string|int|array|null $value, int $position)
```

Set Coordination Of Benefits (IN1.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### IN1::setCoverageType  

**Description**

```php
public setCoverageType (string|int|array|null $value, int $position)
```

Set Coverage Type (IN1.47) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 47  

**Return Values**

`bool`




<hr />


### IN1::setDelayBeforeLRDay  

**Description**

```php
public setDelayBeforeLRDay (string|int|array|null $value, int $position)
```

Set Delay Before LRDay (IN1.34) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 34  

**Return Values**

`bool`




<hr />


### IN1::setGroupName  

**Description**

```php
public setGroupName (string|int|array|null $value, int $position)
```

Set Group Name (IN1.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### IN1::setGroupNumber  

**Description**

```php
public setGroupNumber (string|int|array|null $value, int $position)
```

Set Group Number (IN1.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### IN1::setHandicap  

**Description**

```php
public setHandicap (string|int|array|null $value, int $position)
```

Set Handicap (IN1.48) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 48  

**Return Values**

`bool`




<hr />


### IN1::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuranceCoContactPerson  

**Description**

```php
public setInsuranceCoContactPerson (string|int|array|null $value, int $position)
```

Set Insurance Co Contact Person (IN1.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### IN1::setInsuranceCoPhoneNumber  

**Description**

```php
public setInsuranceCoPhoneNumber (string|int|array|null $value, int $position)
```

Set Insurance Co Phone Number (IN1.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### IN1::setInsuranceCompanyAddress  

**Description**

```php
public setInsuranceCompanyAddress (string|int|array|null $value, int $position)
```

Set Insurance Company Address (IN1.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### IN1::setInsuranceCompanyID  

**Description**

```php
public setInsuranceCompanyID (string|int|array|null $value, int $position)
```

Set Insurance Company ID (IN1.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### IN1::setInsuranceCompanyName  

**Description**

```php
public setInsuranceCompanyName (string|int|array|null $value, int $position)
```

Set Insurance Company Name (IN1.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### IN1::setInsurancePlanID  

**Description**

```php
public setInsurancePlanID (string|int|array|null $value, int $position)
```

Set Insurance Plan ID (IN1.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsAddress  

**Description**

```php
public setInsuredsAddress (string|int|array|null $value, int $position)
```

Set Insureds Address (IN1.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsDateOfBirth  

**Description**

```php
public setInsuredsDateOfBirth (string|int|array|null $value, int $position)
```

Set Insureds Date Of Birth (IN1.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsEmployersAddress  

**Description**

```php
public setInsuredsEmployersAddress (string|int|array|null $value, int $position)
```

Set Insureds Employers Address (IN1.44) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 44  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsEmploymentStatus  

**Description**

```php
public setInsuredsEmploymentStatus (string|int|array|null $value, int $position)
```

Set Insureds Employment Status (IN1.42) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 42  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsGroupEmpID  

**Description**

```php
public setInsuredsGroupEmpID (string|int|array|null $value, int $position)
```

Set Insureds Group Emp ID (IN1.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsGroupEmpName  

**Description**

```php
public setInsuredsGroupEmpName (string|int|array|null $value, int $position)
```

Set Insureds Group Emp Name (IN1.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsIDNumber  

**Description**

```php
public setInsuredsIDNumber (string|int|array|null $value, int $position)
```

Set Insureds IDNumber (IN1.49) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 49  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsRelationshipToPatient  

**Description**

```php
public setInsuredsRelationshipToPatient (string|int|array|null $value, int $position)
```

Set Insureds Relationship To Patient (IN1.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### IN1::setInsuredsSex  

**Description**

```php
public setInsuredsSex (string|int|array|null $value, int $position)
```

Set Insureds Sex (IN1.43) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 43  

**Return Values**

`bool`




<hr />


### IN1::setLifetimeReserveDays  

**Description**

```php
public setLifetimeReserveDays (string|int|array|null $value, int $position)
```

Set Lifetime Reserve Days (IN1.33) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 33  

**Return Values**

`bool`




<hr />


### IN1::setNameOfInsured  

**Description**

```php
public setNameOfInsured (string|int|array|null $value, int $position)
```

Set Name Of Insured (IN1.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### IN1::setNoticeOfAdmissionDate  

**Description**

```php
public setNoticeOfAdmissionDate (string|int|array|null $value, int $position)
```

Set Notice Of Admission Date (IN1.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### IN1::setNoticeOfAdmissionFlag  

**Description**

```php
public setNoticeOfAdmissionFlag (string|int|array|null $value, int $position)
```

Set Notice Of Admission Flag (IN1.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### IN1::setPlanEffectiveDate  

**Description**

```php
public setPlanEffectiveDate (string|int|array|null $value, int $position)
```

Set Plan Effective Date (IN1.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### IN1::setPlanExpirationDate  

**Description**

```php
public setPlanExpirationDate (string|int|array|null $value, int $position)
```

Set Plan Expiration Date (IN1.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### IN1::setPlanType  

**Description**

```php
public setPlanType (string|int|array|null $value, int $position)
```

Set Plan Type (IN1.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### IN1::setPolicyDeductible  

**Description**

```php
public setPolicyDeductible (string|int|array|null $value, int $position)
```

Set Policy Deductible (IN1.37) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 37  

**Return Values**

`bool`




<hr />


### IN1::setPolicyLimitAmount  

**Description**

```php
public setPolicyLimitAmount (string|int|array|null $value, int $position)
```

Set Policy Limit Amount (IN1.38) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 38  

**Return Values**

`bool`




<hr />


### IN1::setPolicyLimitDays  

**Description**

```php
public setPolicyLimitDays (string|int|array|null $value, int $position)
```

Set Policy Limit Days (IN1.39) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 39  

**Return Values**

`bool`




<hr />


### IN1::setPolicyNumber  

**Description**

```php
public setPolicyNumber (string|int|array|null $value, int $position)
```

Set Policy Number (IN1.36) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 36  

**Return Values**

`bool`




<hr />


### IN1::setPreAdmitCertPAC  

**Description**

```php
public setPreAdmitCertPAC (string|int|array|null $value, int $position)
```

Set Pre Admit Cert PAC (IN1.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### IN1::setPriorInsurancePlanID  

**Description**

```php
public setPriorInsurancePlanID (string|int|array|null $value, int $position)
```

Set Prior Insurance Plan ID (IN1.46) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 46  

**Return Values**

`bool`




<hr />


### IN1::setReleaseInformationCode  

**Description**

```php
public setReleaseInformationCode (string|int|array|null $value, int $position)
```

Set Release Information Code (IN1.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### IN1::setReportOfEligibilityDate  

**Description**

```php
public setReportOfEligibilityDate (string|int|array|null $value, int $position)
```

Set Report Of Eligibility Date (IN1.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### IN1::setReportOfEligibilityFlag  

**Description**

```php
public setReportOfEligibilityFlag (string|int|array|null $value, int $position)
```

Set Report Of Eligibility Flag (IN1.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### IN1::setRoomRatePrivate  

**Description**

```php
public setRoomRatePrivate (string|int|array|null $value, int $position)
```

Set Room Rate Private (IN1.41) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 41  

**Return Values**

`bool`




<hr />


### IN1::setRoomRateSemiPrivate  

**Description**

```php
public setRoomRateSemiPrivate (string|int|array|null $value, int $position)
```

Set Room Rate Semi Private (IN1.40) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 40  

**Return Values**

`bool`




<hr />


### IN1::setTypeOfAgreementCode  

**Description**

```php
public setTypeOfAgreementCode (string|int|array|null $value, int $position)
```

Set Type Of Agreement Code (IN1.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### IN1::setVerificationBy  

**Description**

```php
public setVerificationBy (string|int|array|null $value, int $position)
```

Set Verification By (IN1.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### IN1::setVerificationDateTime  

**Description**

```php
public setVerificationDateTime (string|int|array|null $value, int $position)
```

Set Verification Date Time (IN1.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### IN1::setVerificationStatus  

**Description**

```php
public setVerificationStatus (string|int|array|null $value, int $position)
```

Set Verification Status (IN1.45) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 45  

**Return Values**

`bool`




<hr />

