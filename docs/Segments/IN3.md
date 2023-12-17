# Aranyasen\HL7\Segments\IN3  

IN3 segment class
Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=ORC



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#in3__destruct)||
|[getAppealReason](#in3getappealreason)|Get Appeal Reason (IN3.17)|
|[getCaseManager](#in3getcasemanager)|Get Case Manager (IN3.21)|
|[getCertificationAgency](#in3getcertificationagency)|Get Certification Agency (IN3.18)|
|[getCertificationAgencyPhoneNumber](#in3getcertificationagencyphonenumber)|Get Certification AgencyPhoneNumber (IN3.19)|
|[getCertificationBeginDate](#in3getcertificationbegindate)|Get Certification BeginDate (IN3.9)|
|[getCertificationContact](#in3getcertificationcontact)|Get Certification Contact (IN3.15)|
|[getCertificationContactPhoneNumber](#in3getcertificationcontactphonenumber)|Get Certification ContactPhoneNumber (IN3.16)|
|[getCertificationDateTime](#in3getcertificationdatetime)|Get Certification DateTime (IN3.6)|
|[getCertificationEndDate](#in3getcertificationenddate)|Get Certification EndDate (IN3.10)|
|[getCertificationModifyDateTime](#in3getcertificationmodifydatetime)|Get Certification ModifyDateTime (IN3.7)|
|[getCertificationNumber](#in3getcertificationnumber)|Get Certification Number (IN3.2)|
|[getCertificationRequired](#in3getcertificationrequired)|Get Certification Required (IN3.4)|
|[getCertifiedBy](#in3getcertifiedby)|Get Certified By (IN3.3)|
|[getDays](#in3getdays)|Get Days (IN3.11)|
|[getID](#in3getid)|Get ID (IN3.1)|
|[getNonConcurCodeDescription](#in3getnonconcurcodedescription)|Get Non ConcurCodeDescription (IN3.12)|
|[getNonConcurEffectiveDateTime](#in3getnonconcureffectivedatetime)|Get Non ConcurEffectiveDateTime (IN3.13)|
|[getOperator](#in3getoperator)|Get Operator (IN3.8)|
|[getPenalty](#in3getpenalty)|Get Penalty (IN3.5)|
|[getPhysicianReviewer](#in3getphysicianreviewer)|Get Physician Reviewer (IN3.14)|
|[getPreCertificationRequirement](#in3getprecertificationrequirement)|Get Pre CertificationRequirement (IN3.20)|
|[getSecondOpinionDate](#in3getsecondopiniondate)|Get Second OpinionDate (IN3.22)|
|[getSecondOpinionDocumentationReceived](#in3getsecondopiniondocumentationreceived)|Get Second OpinionDocumentationReceived (IN3.24)|
|[getSecondOpinionPhysician](#in3getsecondopinionphysician)|Get Second OpinionPhysician (IN3.25)|
|[getSecondOpinionStatus](#in3getsecondopinionstatus)|Get Second OpinionStatus (IN3.23)|
|[resetIndex](#in3resetindex)|Reset index of this segment|
|[setAppealReason](#in3setappealreason)|Set Appeal Reason (IN3.17)|
|[setCaseManager](#in3setcasemanager)|Set Case Manager (IN3.21)|
|[setCertificationAgency](#in3setcertificationagency)|Set Certification Agency (IN3.18)|
|[setCertificationAgencyPhoneNumber](#in3setcertificationagencyphonenumber)|Set Certification Agency Phone Number (IN3.19)|
|[setCertificationBeginDate](#in3setcertificationbegindate)|Set Certification Begin Date (IN3.9)|
|[setCertificationContact](#in3setcertificationcontact)|Set Certification Contact (IN3.15)|
|[setCertificationContactPhoneNumber](#in3setcertificationcontactphonenumber)|Set Certification Contact Phone Number (IN3.16)|
|[setCertificationDateTime](#in3setcertificationdatetime)|Set Certification Date Time (IN3.6)|
|[setCertificationEndDate](#in3setcertificationenddate)|Set Certification End Date (IN3.10)|
|[setCertificationModifyDateTime](#in3setcertificationmodifydatetime)|Set Certification Modify Date Time (IN3.7)|
|[setCertificationNumber](#in3setcertificationnumber)|Set Certification Number (IN3.2)|
|[setCertificationRequired](#in3setcertificationrequired)|Set Certification Required (IN3.4)|
|[setCertifiedBy](#in3setcertifiedby)|Set Certified By (IN3.3)|
|[setDays](#in3setdays)|Set Days (IN3.11)|
|[setID](#in3setid)||
|[setNonConcurCodeDescription](#in3setnonconcurcodedescription)|Set Non Concur Code Description (IN3.12)|
|[setNonConcurEffectiveDateTime](#in3setnonconcureffectivedatetime)|Set Non Concur Effective Date Time (IN3.13)|
|[setOperator](#in3setoperator)|Set Operator (IN3.8)|
|[setPenalty](#in3setpenalty)|Set Penalty (IN3.5)|
|[setPhysicianReviewer](#in3setphysicianreviewer)|Set Physician Reviewer (IN3.14)|
|[setPreCertificationRequirement](#in3setprecertificationrequirement)|Set Pre Certification Requirement (IN3.20)|
|[setSecondOpinionDate](#in3setsecondopiniondate)|Set Second Opinion Date (IN3.22)|
|[setSecondOpinionDocumentationReceived](#in3setsecondopiniondocumentationreceived)|Set Second Opinion Documentation Received (IN3.24)|
|[setSecondOpinionPhysician](#in3setsecondopinionphysician)|Set Second Opinion Physician (IN3.25)|
|[setSecondOpinionStatus](#in3setsecondopinionstatus)|Set Second Opinion Status (IN3.23)|

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



### IN3::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN3::getAppealReason  

**Description**

```php
public getAppealReason (int $position)
```

Get Appeal Reason (IN3.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCaseManager  

**Description**

```php
public getCaseManager (int $position)
```

Get Case Manager (IN3.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationAgency  

**Description**

```php
public getCertificationAgency (int $position)
```

Get Certification Agency (IN3.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationAgencyPhoneNumber  

**Description**

```php
public getCertificationAgencyPhoneNumber (int $position)
```

Get Certification AgencyPhoneNumber (IN3.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationBeginDate  

**Description**

```php
public getCertificationBeginDate (int $position)
```

Get Certification BeginDate (IN3.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationContact  

**Description**

```php
public getCertificationContact (int $position)
```

Get Certification Contact (IN3.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationContactPhoneNumber  

**Description**

```php
public getCertificationContactPhoneNumber (int $position)
```

Get Certification ContactPhoneNumber (IN3.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationDateTime  

**Description**

```php
public getCertificationDateTime (int $position)
```

Get Certification DateTime (IN3.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationEndDate  

**Description**

```php
public getCertificationEndDate (int $position)
```

Get Certification EndDate (IN3.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationModifyDateTime  

**Description**

```php
public getCertificationModifyDateTime (int $position)
```

Get Certification ModifyDateTime (IN3.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationNumber  

**Description**

```php
public getCertificationNumber (int $position)
```

Get Certification Number (IN3.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertificationRequired  

**Description**

```php
public getCertificationRequired (int $position)
```

Get Certification Required (IN3.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getCertifiedBy  

**Description**

```php
public getCertifiedBy (int $position)
```

Get Certified By (IN3.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getDays  

**Description**

```php
public getDays (int $position)
```

Get Days (IN3.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getID  

**Description**

```php
public getID (int $position)
```

Get ID (IN3.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getNonConcurCodeDescription  

**Description**

```php
public getNonConcurCodeDescription (int $position)
```

Get Non ConcurCodeDescription (IN3.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getNonConcurEffectiveDateTime  

**Description**

```php
public getNonConcurEffectiveDateTime (int $position)
```

Get Non ConcurEffectiveDateTime (IN3.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getOperator  

**Description**

```php
public getOperator (int $position)
```

Get Operator (IN3.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getPenalty  

**Description**

```php
public getPenalty (int $position)
```

Get Penalty (IN3.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getPhysicianReviewer  

**Description**

```php
public getPhysicianReviewer (int $position)
```

Get Physician Reviewer (IN3.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getPreCertificationRequirement  

**Description**

```php
public getPreCertificationRequirement (int $position)
```

Get Pre CertificationRequirement (IN3.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getSecondOpinionDate  

**Description**

```php
public getSecondOpinionDate (int $position)
```

Get Second OpinionDate (IN3.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getSecondOpinionDocumentationReceived  

**Description**

```php
public getSecondOpinionDocumentationReceived (int $position)
```

Get Second OpinionDocumentationReceived (IN3.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getSecondOpinionPhysician  

**Description**

```php
public getSecondOpinionPhysician (int $position)
```

Get Second OpinionPhysician (IN3.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### IN3::getSecondOpinionStatus  

**Description**

```php
public getSecondOpinionStatus (int $position)
```

Get Second OpinionStatus (IN3.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### IN3::resetIndex  

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


### IN3::setAppealReason  

**Description**

```php
public setAppealReason (string|int|array|null $value, int $position)
```

Set Appeal Reason (IN3.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### IN3::setCaseManager  

**Description**

```php
public setCaseManager (string|int|array|null $value, int $position)
```

Set Case Manager (IN3.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### IN3::setCertificationAgency  

**Description**

```php
public setCertificationAgency (string|int|array|null $value, int $position)
```

Set Certification Agency (IN3.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### IN3::setCertificationAgencyPhoneNumber  

**Description**

```php
public setCertificationAgencyPhoneNumber (string|int|array|null $value, int $position)
```

Set Certification Agency Phone Number (IN3.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### IN3::setCertificationBeginDate  

**Description**

```php
public setCertificationBeginDate (string|int|array|null $value, int $position)
```

Set Certification Begin Date (IN3.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### IN3::setCertificationContact  

**Description**

```php
public setCertificationContact (string|int|array|null $value, int $position)
```

Set Certification Contact (IN3.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### IN3::setCertificationContactPhoneNumber  

**Description**

```php
public setCertificationContactPhoneNumber (string|int|array|null $value, int $position)
```

Set Certification Contact Phone Number (IN3.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### IN3::setCertificationDateTime  

**Description**

```php
public setCertificationDateTime (string|int|array|null $value, int $position)
```

Set Certification Date Time (IN3.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### IN3::setCertificationEndDate  

**Description**

```php
public setCertificationEndDate (string|int|array|null $value, int $position)
```

Set Certification End Date (IN3.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### IN3::setCertificationModifyDateTime  

**Description**

```php
public setCertificationModifyDateTime (string|int|array|null $value, int $position)
```

Set Certification Modify Date Time (IN3.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### IN3::setCertificationNumber  

**Description**

```php
public setCertificationNumber (string|int|array|null $value, int $position)
```

Set Certification Number (IN3.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### IN3::setCertificationRequired  

**Description**

```php
public setCertificationRequired (string|int|array|null $value, int $position)
```

Set Certification Required (IN3.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### IN3::setCertifiedBy  

**Description**

```php
public setCertifiedBy (string|int|array|null $value, int $position)
```

Set Certified By (IN3.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### IN3::setDays  

**Description**

```php
public setDays (string|int|array|null $value, int $position)
```

Set Days (IN3.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### IN3::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### IN3::setNonConcurCodeDescription  

**Description**

```php
public setNonConcurCodeDescription (string|int|array|null $value, int $position)
```

Set Non Concur Code Description (IN3.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### IN3::setNonConcurEffectiveDateTime  

**Description**

```php
public setNonConcurEffectiveDateTime (string|int|array|null $value, int $position)
```

Set Non Concur Effective Date Time (IN3.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### IN3::setOperator  

**Description**

```php
public setOperator (string|int|array|null $value, int $position)
```

Set Operator (IN3.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### IN3::setPenalty  

**Description**

```php
public setPenalty (string|int|array|null $value, int $position)
```

Set Penalty (IN3.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### IN3::setPhysicianReviewer  

**Description**

```php
public setPhysicianReviewer (string|int|array|null $value, int $position)
```

Set Physician Reviewer (IN3.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### IN3::setPreCertificationRequirement  

**Description**

```php
public setPreCertificationRequirement (string|int|array|null $value, int $position)
```

Set Pre Certification Requirement (IN3.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### IN3::setSecondOpinionDate  

**Description**

```php
public setSecondOpinionDate (string|int|array|null $value, int $position)
```

Set Second Opinion Date (IN3.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### IN3::setSecondOpinionDocumentationReceived  

**Description**

```php
public setSecondOpinionDocumentationReceived (string|int|array|null $value, int $position)
```

Set Second Opinion Documentation Received (IN3.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### IN3::setSecondOpinionPhysician  

**Description**

```php
public setSecondOpinionPhysician (string|int|array|null $value, int $position)
```

Set Second Opinion Physician (IN3.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### IN3::setSecondOpinionStatus  

**Description**

```php
public setSecondOpinionStatus (string|int|array|null $value, int $position)
```

Set Second Opinion Status (IN3.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />

