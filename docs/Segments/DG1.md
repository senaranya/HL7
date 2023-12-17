# Aranyasen\HL7\Segments\DG1  

DG1 segment class
Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/DG1



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#dg1__destruct)||
|[getAttestationDateTime](#dg1getattestationdatetime)|Get Attestation DateTime (DG1.19)|
|[getConfidentialIndicator](#dg1getconfidentialindicator)|Get Confidential Indicator (DG1.18)|
|[getDRGApprovalIndicator](#dg1getdrgapprovalindicator)|Get DRGApproval Indicator (DG1.9)|
|[getDRGGrouperReviewCode](#dg1getdrggrouperreviewcode)|Get DRGGrouper ReviewCode (DG1.10)|
|[getDiagnosingClinician](#dg1getdiagnosingclinician)|Get Diagnosing Clinician (DG1.16)|
|[getDiagnosisClassification](#dg1getdiagnosisclassification)|Get Diagnosis Classification (DG1.17)|
|[getDiagnosisCodeDG1](#dg1getdiagnosiscodedg1)||
|[getDiagnosisCodingMethod](#dg1getdiagnosiscodingmethod)|Get Diagnosis CodingMethod (DG1.2)|
|[getDiagnosisDateTime](#dg1getdiagnosisdatetime)|Get Diagnosis DateTime (DG1.5)|
|[getDiagnosisDescription](#dg1getdiagnosisdescription)|Get Diagnosis Description (DG1.4)|
|[getDiagnosisPriority](#dg1getdiagnosispriority)|Get Diagnosis Priority (DG1.15)|
|[getDiagnosisType](#dg1getdiagnosistype)|Get Diagnosis Type (DG1.6)|
|[getDiagnosticRelatedGroup](#dg1getdiagnosticrelatedgroup)|Get Diagnostic RelatedGroup (DG1.8)|
|[getGrouperVersionAndType](#dg1getgrouperversionandtype)|Get Grouper VersionAndType (DG1.14)|
|[getID](#dg1getid)|Get ID (DG1.1)|
|[getMajorDiagnosticCategory](#dg1getmajordiagnosticcategory)|Get Major DiagnosticCategory (DG1.7)|
|[getOutlierCost](#dg1getoutliercost)|Get Outlier Cost (DG1.13)|
|[getOutlierDays](#dg1getoutlierdays)|Get Outlier Days (DG1.12)|
|[getOutlierType](#dg1getoutliertype)|Get Outlier Type (DG1.11)|
|[resetIndex](#dg1resetindex)|Reset index of this segment|
|[setAttestationDateTime](#dg1setattestationdatetime)|Set Attestation Date Time (DG1.19)|
|[setConfidentialIndicator](#dg1setconfidentialindicator)|Set Confidential Indicator (DG1.18)|
|[setDRGApprovalIndicator](#dg1setdrgapprovalindicator)|Set DRGApproval Indicator (DG1.9)|
|[setDRGGrouperReviewCode](#dg1setdrggrouperreviewcode)|Set DRGGrouper Review Code (DG1.10)|
|[setDiagnosingClinician](#dg1setdiagnosingclinician)|Set Diagnosing Clinician (DG1.16)|
|[setDiagnosisClassification](#dg1setdiagnosisclassification)|Set Diagnosis Classification (DG1.17)|
|[setDiagnosisCodeDG1](#dg1setdiagnosiscodedg1)||
|[setDiagnosisCodingMethod](#dg1setdiagnosiscodingmethod)|Set Diagnosis Coding Method (DG1.2)|
|[setDiagnosisDateTime](#dg1setdiagnosisdatetime)|Set Diagnosis Date Time (DG1.5)|
|[setDiagnosisDescription](#dg1setdiagnosisdescription)|Set Diagnosis Description (DG1.4)|
|[setDiagnosisPriority](#dg1setdiagnosispriority)|Set Diagnosis Priority (DG1.15)|
|[setDiagnosisType](#dg1setdiagnosistype)|Set Diagnosis Type (DG1.6)|
|[setDiagnosticRelatedGroup](#dg1setdiagnosticrelatedgroup)|Set Diagnostic Related Group (DG1.8)|
|[setGrouperVersionAndType](#dg1setgrouperversionandtype)|Set Grouper Version And Type (DG1.14)|
|[setID](#dg1setid)||
|[setMajorDiagnosticCategory](#dg1setmajordiagnosticcategory)|Set Major Diagnostic Category (DG1.7)|
|[setOutlierCost](#dg1setoutliercost)|Set Outlier Cost (DG1.13)|
|[setOutlierDays](#dg1setoutlierdays)|Set Outlier Days (DG1.12)|
|[setOutlierType](#dg1setoutliertype)|Set Outlier Type (DG1.11)|

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



### DG1::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### DG1::getAttestationDateTime  

**Description**

```php
public getAttestationDateTime (int $position)
```

Get Attestation DateTime (DG1.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getConfidentialIndicator  

**Description**

```php
public getConfidentialIndicator (int $position)
```

Get Confidential Indicator (DG1.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDRGApprovalIndicator  

**Description**

```php
public getDRGApprovalIndicator (int $position)
```

Get DRGApproval Indicator (DG1.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDRGGrouperReviewCode  

**Description**

```php
public getDRGGrouperReviewCode (int $position)
```

Get DRGGrouper ReviewCode (DG1.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosingClinician  

**Description**

```php
public getDiagnosingClinician (int $position)
```

Get Diagnosing Clinician (DG1.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosisClassification  

**Description**

```php
public getDiagnosisClassification (int $position)
```

Get Diagnosis Classification (DG1.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosisCodeDG1  

**Description**

```php
 getDiagnosisCodeDG1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### DG1::getDiagnosisCodingMethod  

**Description**

```php
public getDiagnosisCodingMethod (int $position)
```

Get Diagnosis CodingMethod (DG1.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosisDateTime  

**Description**

```php
public getDiagnosisDateTime (int $position)
```

Get Diagnosis DateTime (DG1.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosisDescription  

**Description**

```php
public getDiagnosisDescription (int $position)
```

Get Diagnosis Description (DG1.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosisPriority  

**Description**

```php
public getDiagnosisPriority (int $position)
```

Get Diagnosis Priority (DG1.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosisType  

**Description**

```php
public getDiagnosisType (int $position)
```

Get Diagnosis Type (DG1.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getDiagnosticRelatedGroup  

**Description**

```php
public getDiagnosticRelatedGroup (int $position)
```

Get Diagnostic RelatedGroup (DG1.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getGrouperVersionAndType  

**Description**

```php
public getGrouperVersionAndType (int $position)
```

Get Grouper VersionAndType (DG1.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getID  

**Description**

```php
public getID (int $position)
```

Get ID (DG1.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getMajorDiagnosticCategory  

**Description**

```php
public getMajorDiagnosticCategory (int $position)
```

Get Major DiagnosticCategory (DG1.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getOutlierCost  

**Description**

```php
public getOutlierCost (int $position)
```

Get Outlier Cost (DG1.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getOutlierDays  

**Description**

```php
public getOutlierDays (int $position)
```

Get Outlier Days (DG1.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### DG1::getOutlierType  

**Description**

```php
public getOutlierType (int $position)
```

Get Outlier Type (DG1.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### DG1::resetIndex  

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


### DG1::setAttestationDateTime  

**Description**

```php
public setAttestationDateTime (string|int|array|null $value, int $position)
```

Set Attestation Date Time (DG1.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### DG1::setConfidentialIndicator  

**Description**

```php
public setConfidentialIndicator (string|int|array|null $value, int $position)
```

Set Confidential Indicator (DG1.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### DG1::setDRGApprovalIndicator  

**Description**

```php
public setDRGApprovalIndicator (string|int|array|null $value, int $position)
```

Set DRGApproval Indicator (DG1.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### DG1::setDRGGrouperReviewCode  

**Description**

```php
public setDRGGrouperReviewCode (string|int|array|null $value, int $position)
```

Set DRGGrouper Review Code (DG1.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosingClinician  

**Description**

```php
public setDiagnosingClinician (string|int|array|null $value, int $position)
```

Set Diagnosing Clinician (DG1.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosisClassification  

**Description**

```php
public setDiagnosisClassification (string|int|array|null $value, int $position)
```

Set Diagnosis Classification (DG1.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosisCodeDG1  

**Description**

```php
 setDiagnosisCodeDG1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### DG1::setDiagnosisCodingMethod  

**Description**

```php
public setDiagnosisCodingMethod (string|int|array|null $value, int $position)
```

Set Diagnosis Coding Method (DG1.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosisDateTime  

**Description**

```php
public setDiagnosisDateTime (string|int|array|null $value, int $position)
```

Set Diagnosis Date Time (DG1.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosisDescription  

**Description**

```php
public setDiagnosisDescription (string|int|array|null $value, int $position)
```

Set Diagnosis Description (DG1.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosisPriority  

**Description**

```php
public setDiagnosisPriority (string|int|array|null $value, int $position)
```

Set Diagnosis Priority (DG1.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosisType  

**Description**

```php
public setDiagnosisType (string|int|array|null $value, int $position)
```

Set Diagnosis Type (DG1.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### DG1::setDiagnosticRelatedGroup  

**Description**

```php
public setDiagnosticRelatedGroup (string|int|array|null $value, int $position)
```

Set Diagnostic Related Group (DG1.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### DG1::setGrouperVersionAndType  

**Description**

```php
public setGrouperVersionAndType (string|int|array|null $value, int $position)
```

Set Grouper Version And Type (DG1.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### DG1::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### DG1::setMajorDiagnosticCategory  

**Description**

```php
public setMajorDiagnosticCategory (string|int|array|null $value, int $position)
```

Set Major Diagnostic Category (DG1.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### DG1::setOutlierCost  

**Description**

```php
public setOutlierCost (string|int|array|null $value, int $position)
```

Set Outlier Cost (DG1.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### DG1::setOutlierDays  

**Description**

```php
public setOutlierDays (string|int|array|null $value, int $position)
```

Set Outlier Days (DG1.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### DG1::setOutlierType  

**Description**

```php
public setOutlierType (string|int|array|null $value, int $position)
```

Set Outlier Type (DG1.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />

