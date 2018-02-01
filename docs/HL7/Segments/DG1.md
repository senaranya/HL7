# Aranyasen\HL7\Segments\DG1  

DG1 segment class
Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3.1/segment/DG1



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAttestationDateTime](#dg1getattestationdatetime)||
|[getConfidentialIndicator](#dg1getconfidentialindicator)||
|[getDRGApprovalIndicator](#dg1getdrgapprovalindicator)||
|[getDRGGrouperReviewCode](#dg1getdrggrouperreviewcode)||
|[getDiagnosingClinician](#dg1getdiagnosingclinician)||
|[getDiagnosisClassification](#dg1getdiagnosisclassification)||
|[getDiagnosisCodeDG1](#dg1getdiagnosiscodedg1)||
|[getDiagnosisCodingMethod](#dg1getdiagnosiscodingmethod)||
|[getDiagnosisDateTime](#dg1getdiagnosisdatetime)||
|[getDiagnosisDescription](#dg1getdiagnosisdescription)||
|[getDiagnosisPriority](#dg1getdiagnosispriority)||
|[getDiagnosisType](#dg1getdiagnosistype)||
|[getDiagnosticRelatedGroup](#dg1getdiagnosticrelatedgroup)||
|[getGrouperVersionAndType](#dg1getgrouperversionandtype)||
|[getID](#dg1getid)||
|[getMajorDiagnosticCategory](#dg1getmajordiagnosticcategory)||
|[getOutlierCost](#dg1getoutliercost)||
|[getOutlierDays](#dg1getoutlierdays)||
|[getOutlierType](#dg1getoutliertype)||
|[setAttestationDateTime](#dg1setattestationdatetime)||
|[setConfidentialIndicator](#dg1setconfidentialindicator)||
|[setDRGApprovalIndicator](#dg1setdrgapprovalindicator)||
|[setDRGGrouperReviewCode](#dg1setdrggrouperreviewcode)||
|[setDiagnosingClinician](#dg1setdiagnosingclinician)||
|[setDiagnosisClassification](#dg1setdiagnosisclassification)||
|[setDiagnosisCodeDG1](#dg1setdiagnosiscodedg1)||
|[setDiagnosisCodingMethod](#dg1setdiagnosiscodingmethod)||
|[setDiagnosisDateTime](#dg1setdiagnosisdatetime)||
|[setDiagnosisDescription](#dg1setdiagnosisdescription)||
|[setDiagnosisPriority](#dg1setdiagnosispriority)||
|[setDiagnosisType](#dg1setdiagnosistype)||
|[setDiagnosticRelatedGroup](#dg1setdiagnosticrelatedgroup)||
|[setGrouperVersionAndType](#dg1setgrouperversionandtype)||
|[setID](#dg1setid)||
|[setMajorDiagnosticCategory](#dg1setmajordiagnosticcategory)||
|[setOutlierCost](#dg1setoutliercost)||
|[setOutlierDays](#dg1setoutlierdays)||
|[setOutlierType](#dg1setoutliertype)||

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



### DG1::getAttestationDateTime  

**Description**

```php
public getAttestationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getConfidentialIndicator  

**Description**

```php
public getConfidentialIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDRGApprovalIndicator  

**Description**

```php
public getDRGApprovalIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDRGGrouperReviewCode  

**Description**

```php
public getDRGGrouperReviewCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosingClinician  

**Description**

```php
public getDiagnosingClinician (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosisClassification  

**Description**

```php
public getDiagnosisClassification (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosisCodeDG1  

**Description**

```php
public getDiagnosisCodeDG1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosisCodingMethod  

**Description**

```php
public getDiagnosisCodingMethod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosisDateTime  

**Description**

```php
public getDiagnosisDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosisDescription  

**Description**

```php
public getDiagnosisDescription (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosisPriority  

**Description**

```php
public getDiagnosisPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosisType  

**Description**

```php
public getDiagnosisType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getDiagnosticRelatedGroup  

**Description**

```php
public getDiagnosticRelatedGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getGrouperVersionAndType  

**Description**

```php
public getGrouperVersionAndType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getID  

**Description**

```php
public getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getMajorDiagnosticCategory  

**Description**

```php
public getMajorDiagnosticCategory (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getOutlierCost  

**Description**

```php
public getOutlierCost (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getOutlierDays  

**Description**

```php
public getOutlierDays (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::getOutlierType  

**Description**

```php
public getOutlierType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setAttestationDateTime  

**Description**

```php
public setAttestationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setConfidentialIndicator  

**Description**

```php
public setConfidentialIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDRGApprovalIndicator  

**Description**

```php
public setDRGApprovalIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDRGGrouperReviewCode  

**Description**

```php
public setDRGGrouperReviewCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosingClinician  

**Description**

```php
public setDiagnosingClinician (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosisClassification  

**Description**

```php
public setDiagnosisClassification (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosisCodeDG1  

**Description**

```php
public setDiagnosisCodeDG1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosisCodingMethod  

**Description**

```php
public setDiagnosisCodingMethod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosisDateTime  

**Description**

```php
public setDiagnosisDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosisDescription  

**Description**

```php
public setDiagnosisDescription (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosisPriority  

**Description**

```php
public setDiagnosisPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosisType  

**Description**

```php
public setDiagnosisType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setDiagnosticRelatedGroup  

**Description**

```php
public setDiagnosticRelatedGroup (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setGrouperVersionAndType  

**Description**

```php
public setGrouperVersionAndType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setID  

**Description**

```php
public setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setMajorDiagnosticCategory  

**Description**

```php
public setMajorDiagnosticCategory (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setOutlierCost  

**Description**

```php
public setOutlierCost (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setOutlierDays  

**Description**

```php
public setOutlierDays (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### DG1::setOutlierType  

**Description**

```php
public setOutlierType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**



