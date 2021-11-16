# Aranyasen\HL7\Segments\IN1  

IN1 segment class
Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/IN1



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#in1__destruct)||
|[getAssignmentOfBenefits](#in1getassignmentofbenefits)||
|[getAuthorizationInformation](#in1getauthorizationinformation)||
|[getBillingStatus](#in1getbillingstatus)||
|[getCompanyPlanCode](#in1getcompanyplancode)||
|[getCoordOfBenPriority](#in1getcoordofbenpriority)||
|[getCoordinationOfBenefits](#in1getcoordinationofbenefits)||
|[getCoverageType](#in1getcoveragetype)||
|[getDelayBeforeLRDay](#in1getdelaybeforelrday)||
|[getGroupName](#in1getgroupname)||
|[getGroupNumber](#in1getgroupnumber)||
|[getHandicap](#in1gethandicap)||
|[getID](#in1getid)||
|[getInsuranceCoContactPerson](#in1getinsurancecocontactperson)||
|[getInsuranceCoPhoneNumber](#in1getinsurancecophonenumber)||
|[getInsuranceCompanyAddress](#in1getinsurancecompanyaddress)||
|[getInsuranceCompanyID](#in1getinsurancecompanyid)||
|[getInsuranceCompanyName](#in1getinsurancecompanyname)||
|[getInsurancePlanID](#in1getinsuranceplanid)||
|[getInsuredsAddress](#in1getinsuredsaddress)||
|[getInsuredsBirthPlace](#in1getinsuredsbirthplace)||
|[getInsuredsDateOfBirth](#in1getinsuredsdateofbirth)||
|[getInsuredsEmployersAddress](#in1getinsuredsemployersaddress)||
|[getInsuredsEmploymentStatus](#in1getinsuredsemploymentstatus)||
|[getInsuredsGroupEmpID](#in1getinsuredsgroupempid)||
|[getInsuredsGroupEmpName](#in1getinsuredsgroupempname)||
|[getInsuredsIDNumber](#in1getinsuredsidnumber)||
|[getInsuredsRelationshipToPatient](#in1getinsuredsrelationshiptopatient)||
|[getInsuredsSex](#in1getinsuredssex)||
|[getLifetimeReserveDays](#in1getlifetimereservedays)||
|[getNameOfInsured](#in1getnameofinsured)||
|[getNoticeOfAdmissionDate](#in1getnoticeofadmissiondate)||
|[getNoticeOfAdmissionFlag](#in1getnoticeofadmissionflag)||
|[getPlanEffectiveDate](#in1getplaneffectivedate)||
|[getPlanExpirationDate](#in1getplanexpirationdate)||
|[getPlanType](#in1getplantype)||
|[getPolicyDeductible](#in1getpolicydeductible)||
|[getPolicyLimitAmount](#in1getpolicylimitamount)||
|[getPolicyLimitDays](#in1getpolicylimitdays)||
|[getPolicyNumber](#in1getpolicynumber)||
|[getPreAdmitCertPAC](#in1getpreadmitcertpac)||
|[getPriorInsurancePlanID](#in1getpriorinsuranceplanid)||
|[getReleaseInformationCode](#in1getreleaseinformationcode)||
|[getReportOfEligibilityDate](#in1getreportofeligibilitydate)||
|[getReportOfEligibilityFlag](#in1getreportofeligibilityflag)||
|[getRoomRatePrivate](#in1getroomrateprivate)||
|[getRoomRateSemiPrivate](#in1getroomratesemiprivate)||
|[getSignatureCode](#in1getsignaturecode)||
|[getSignatureCodeDate](#in1getsignaturecodedate)||
|[getTypeOfAgreementCode](#in1gettypeofagreementcode)||
|[getVIPIndicator](#in1getvipindicator)||
|[getVerificationBy](#in1getverificationby)||
|[getVerificationDateTime](#in1getverificationdatetime)||
|[getVerificationStatus](#in1getverificationstatus)||
|[resetIndex](#in1resetindex)|Reset index of this segment|
|[setAssignmentOfBenefits](#in1setassignmentofbenefits)||
|[setAuthorizationInformation](#in1setauthorizationinformation)||
|[setBillingStatus](#in1setbillingstatus)||
|[setCompanyPlanCode](#in1setcompanyplancode)||
|[setCoordOfBenPriority](#in1setcoordofbenpriority)||
|[setCoordinationOfBenefits](#in1setcoordinationofbenefits)||
|[setCoverageType](#in1setcoveragetype)||
|[setDelayBeforeLRDay](#in1setdelaybeforelrday)||
|[setGroupName](#in1setgroupname)||
|[setGroupNumber](#in1setgroupnumber)||
|[setHandicap](#in1sethandicap)||
|[setID](#in1setid)||
|[setInsuranceCoContactPerson](#in1setinsurancecocontactperson)||
|[setInsuranceCoPhoneNumber](#in1setinsurancecophonenumber)||
|[setInsuranceCompanyAddress](#in1setinsurancecompanyaddress)||
|[setInsuranceCompanyID](#in1setinsurancecompanyid)||
|[setInsuranceCompanyName](#in1setinsurancecompanyname)||
|[setInsurancePlanID](#in1setinsuranceplanid)||
|[setInsuredsAddress](#in1setinsuredsaddress)||
|[setInsuredsBirthPlace](#in1setinsuredsbirthplace)||
|[setInsuredsDateOfBirth](#in1setinsuredsdateofbirth)||
|[setInsuredsEmployersAddress](#in1setinsuredsemployersaddress)||
|[setInsuredsEmploymentStatus](#in1setinsuredsemploymentstatus)||
|[setInsuredsGroupEmpID](#in1setinsuredsgroupempid)||
|[setInsuredsGroupEmpName](#in1setinsuredsgroupempname)||
|[setInsuredsIDNumber](#in1setinsuredsidnumber)||
|[setInsuredsRelationshipToPatient](#in1setinsuredsrelationshiptopatient)||
|[setInsuredsSex](#in1setinsuredssex)||
|[setLifetimeReserveDays](#in1setlifetimereservedays)||
|[setNameOfInsured](#in1setnameofinsured)||
|[setNoticeOfAdmissionDate](#in1setnoticeofadmissiondate)||
|[setNoticeOfAdmissionFlag](#in1setnoticeofadmissionflag)||
|[setPlanEffectiveDate](#in1setplaneffectivedate)||
|[setPlanExpirationDate](#in1setplanexpirationdate)||
|[setPlanType](#in1setplantype)||
|[setPolicyDeductible](#in1setpolicydeductible)||
|[setPolicyLimitAmount](#in1setpolicylimitamount)||
|[setPolicyLimitDays](#in1setpolicylimitdays)||
|[setPolicyNumber](#in1setpolicynumber)||
|[setPreAdmitCertPAC](#in1setpreadmitcertpac)||
|[setPriorInsurancePlanID](#in1setpriorinsuranceplanid)||
|[setReleaseInformationCode](#in1setreleaseinformationcode)||
|[setReportOfEligibilityDate](#in1setreportofeligibilitydate)||
|[setReportOfEligibilityFlag](#in1setreportofeligibilityflag)||
|[setRoomRatePrivate](#in1setroomrateprivate)||
|[setRoomRateSemiPrivate](#in1setroomratesemiprivate)||
|[setSignatureCode](#in1setsignaturecode)||
|[setSignatureCodeDate](#in1setsignaturecodedate)||
|[setTypeOfAgreementCode](#in1settypeofagreementcode)||
|[setVIPIndicator](#in1setvipindicator)||
|[setVerificationBy](#in1setverificationby)||
|[setVerificationDateTime](#in1setverificationdatetime)||
|[setVerificationStatus](#in1setverificationstatus)||

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
 getAssignmentOfBenefits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getAuthorizationInformation  

**Description**

```php
 getAuthorizationInformation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getBillingStatus  

**Description**

```php
 getBillingStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getCompanyPlanCode  

**Description**

```php
 getCompanyPlanCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getCoordOfBenPriority  

**Description**

```php
 getCoordOfBenPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getCoordinationOfBenefits  

**Description**

```php
 getCoordinationOfBenefits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getCoverageType  

**Description**

```php
 getCoverageType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getDelayBeforeLRDay  

**Description**

```php
 getDelayBeforeLRDay (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getGroupName  

**Description**

```php
 getGroupName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getGroupNumber  

**Description**

```php
 getGroupNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getHandicap  

**Description**

```php
 getHandicap (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuranceCoContactPerson  

**Description**

```php
 getInsuranceCoContactPerson (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuranceCoPhoneNumber  

**Description**

```php
 getInsuranceCoPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuranceCompanyAddress  

**Description**

```php
 getInsuranceCompanyAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuranceCompanyID  

**Description**

```php
 getInsuranceCompanyID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuranceCompanyName  

**Description**

```php
 getInsuranceCompanyName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsurancePlanID  

**Description**

```php
 getInsurancePlanID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsAddress  

**Description**

```php
 getInsuredsAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsBirthPlace  

**Description**

```php
 getInsuredsBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsDateOfBirth  

**Description**

```php
 getInsuredsDateOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsEmployersAddress  

**Description**

```php
 getInsuredsEmployersAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsEmploymentStatus  

**Description**

```php
 getInsuredsEmploymentStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsGroupEmpID  

**Description**

```php
 getInsuredsGroupEmpID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsGroupEmpName  

**Description**

```php
 getInsuredsGroupEmpName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsIDNumber  

**Description**

```php
 getInsuredsIDNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsRelationshipToPatient  

**Description**

```php
 getInsuredsRelationshipToPatient (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getInsuredsSex  

**Description**

```php
 getInsuredsSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getLifetimeReserveDays  

**Description**

```php
 getLifetimeReserveDays (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getNameOfInsured  

**Description**

```php
 getNameOfInsured (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getNoticeOfAdmissionDate  

**Description**

```php
 getNoticeOfAdmissionDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getNoticeOfAdmissionFlag  

**Description**

```php
 getNoticeOfAdmissionFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPlanEffectiveDate  

**Description**

```php
 getPlanEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPlanExpirationDate  

**Description**

```php
 getPlanExpirationDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPlanType  

**Description**

```php
 getPlanType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPolicyDeductible  

**Description**

```php
 getPolicyDeductible (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPolicyLimitAmount  

**Description**

```php
 getPolicyLimitAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPolicyLimitDays  

**Description**

```php
 getPolicyLimitDays (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPolicyNumber  

**Description**

```php
 getPolicyNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPreAdmitCertPAC  

**Description**

```php
 getPreAdmitCertPAC (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getPriorInsurancePlanID  

**Description**

```php
 getPriorInsurancePlanID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getReleaseInformationCode  

**Description**

```php
 getReleaseInformationCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getReportOfEligibilityDate  

**Description**

```php
 getReportOfEligibilityDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getReportOfEligibilityFlag  

**Description**

```php
 getReportOfEligibilityFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getRoomRatePrivate  

**Description**

```php
 getRoomRatePrivate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getRoomRateSemiPrivate  

**Description**

```php
 getRoomRateSemiPrivate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getSignatureCode  

**Description**

```php
 getSignatureCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getSignatureCodeDate  

**Description**

```php
 getSignatureCodeDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getTypeOfAgreementCode  

**Description**

```php
 getTypeOfAgreementCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getVIPIndicator  

**Description**

```php
 getVIPIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getVerificationBy  

**Description**

```php
 getVerificationBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getVerificationDateTime  

**Description**

```php
 getVerificationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::getVerificationStatus  

**Description**

```php
 getVerificationStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::resetIndex  

**Description**

```php
public static resetIndex (int $index)
```

Reset index of this segment 

 

**Parameters**

* `(int) $index`

**Return Values**

`void`


<hr />


### IN1::setAssignmentOfBenefits  

**Description**

```php
 setAssignmentOfBenefits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setAuthorizationInformation  

**Description**

```php
 setAuthorizationInformation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setBillingStatus  

**Description**

```php
 setBillingStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setCompanyPlanCode  

**Description**

```php
 setCompanyPlanCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setCoordOfBenPriority  

**Description**

```php
 setCoordOfBenPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setCoordinationOfBenefits  

**Description**

```php
 setCoordinationOfBenefits (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setCoverageType  

**Description**

```php
 setCoverageType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setDelayBeforeLRDay  

**Description**

```php
 setDelayBeforeLRDay (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setGroupName  

**Description**

```php
 setGroupName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setGroupNumber  

**Description**

```php
 setGroupNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setHandicap  

**Description**

```php
 setHandicap (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


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
 setInsuranceCoContactPerson (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuranceCoPhoneNumber  

**Description**

```php
 setInsuranceCoPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuranceCompanyAddress  

**Description**

```php
 setInsuranceCompanyAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuranceCompanyID  

**Description**

```php
 setInsuranceCompanyID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuranceCompanyName  

**Description**

```php
 setInsuranceCompanyName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsurancePlanID  

**Description**

```php
 setInsurancePlanID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsAddress  

**Description**

```php
 setInsuredsAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsBirthPlace  

**Description**

```php
 setInsuredsBirthPlace (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsDateOfBirth  

**Description**

```php
 setInsuredsDateOfBirth (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsEmployersAddress  

**Description**

```php
 setInsuredsEmployersAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsEmploymentStatus  

**Description**

```php
 setInsuredsEmploymentStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsGroupEmpID  

**Description**

```php
 setInsuredsGroupEmpID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsGroupEmpName  

**Description**

```php
 setInsuredsGroupEmpName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsIDNumber  

**Description**

```php
 setInsuredsIDNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsRelationshipToPatient  

**Description**

```php
 setInsuredsRelationshipToPatient (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setInsuredsSex  

**Description**

```php
 setInsuredsSex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setLifetimeReserveDays  

**Description**

```php
 setLifetimeReserveDays (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setNameOfInsured  

**Description**

```php
 setNameOfInsured (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setNoticeOfAdmissionDate  

**Description**

```php
 setNoticeOfAdmissionDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setNoticeOfAdmissionFlag  

**Description**

```php
 setNoticeOfAdmissionFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPlanEffectiveDate  

**Description**

```php
 setPlanEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPlanExpirationDate  

**Description**

```php
 setPlanExpirationDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPlanType  

**Description**

```php
 setPlanType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPolicyDeductible  

**Description**

```php
 setPolicyDeductible (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPolicyLimitAmount  

**Description**

```php
 setPolicyLimitAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPolicyLimitDays  

**Description**

```php
 setPolicyLimitDays (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPolicyNumber  

**Description**

```php
 setPolicyNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPreAdmitCertPAC  

**Description**

```php
 setPreAdmitCertPAC (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setPriorInsurancePlanID  

**Description**

```php
 setPriorInsurancePlanID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setReleaseInformationCode  

**Description**

```php
 setReleaseInformationCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setReportOfEligibilityDate  

**Description**

```php
 setReportOfEligibilityDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setReportOfEligibilityFlag  

**Description**

```php
 setReportOfEligibilityFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setRoomRatePrivate  

**Description**

```php
 setRoomRatePrivate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setRoomRateSemiPrivate  

**Description**

```php
 setRoomRateSemiPrivate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setSignatureCode  

**Description**

```php
 setSignatureCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setSignatureCodeDate  

**Description**

```php
 setSignatureCodeDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setTypeOfAgreementCode  

**Description**

```php
 setTypeOfAgreementCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setVIPIndicator  

**Description**

```php
 setVIPIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setVerificationBy  

**Description**

```php
 setVerificationBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setVerificationDateTime  

**Description**

```php
 setVerificationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN1::setVerificationStatus  

**Description**

```php
 setVerificationStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

