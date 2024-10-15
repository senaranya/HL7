# Aranyasen\HL7\Segments\PV2  

PV2 segment class
Ref: https://hl7-definition.caristix.com/v2/HL7v2.4/Segments/PV2



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAccommodationCode](#pv2getaccommodationcode)|Get Accommodation Code (PV2.2)|
|[getActualLengthOfInpatientStay](#pv2getactuallengthofinpatientstay)|Get Actual Length Of Inpatient Stay (PV2.11)|
|[getAdmissionLevelOfCareCode](#pv2getadmissionlevelofcarecode)|Get Admission Level Of Care Code (PV2.40)|
|[getAdmitReason](#pv2getadmitreason)|Get Admit Reason (PV2.3)|
|[getAdvanceDirectiveCode](#pv2getadvancedirectivecode)|Get Advance Directive Code (PV2.45)|
|[getBabyDetainedIndicator](#pv2getbabydetainedindicator)|Get Baby Detained Indicator (PV2.37)|
|[getBillingMediaCode](#pv2getbillingmediacode)|Get Billing Media Code (PV2.32)|
|[getClinicOrganizationName](#pv2getclinicorganizationname)|Get Clinic Organization Name (PV2.23)|
|[getEmploymentIllnessRelatedIndicator](#pv2getemploymentillnessrelatedindicator)|Get Employment Illness Related Indicator (PV2.15)|
|[getEstimatedLengthofInpatientStay](#pv2getestimatedlengthofinpatientstay)|Get Estimated Lengthof Inpatient Stay (PV2.10)|
|[getExpectedAdmitDateTime](#pv2getexpectedadmitdatetime)|Get Expected Admit Date Time (PV2.8)|
|[getExpectedDischargeDateTime](#pv2getexpecteddischargedatetime)|Get Expected Discharge Date Time (PV2.9)|
|[getExpectedDischargeDisposition](#pv2getexpecteddischargedisposition)|Get Expected Discharge Disposition (PV2.27)|
|[getExpectedLOAReturnDateTime](#pv2getexpectedloareturndatetime)|Get Expected LOAReturn Date Time (PV2.47)|
|[getExpectedNumberOfInsurancePlans](#pv2getexpectednumberofinsuranceplans)|Get Expected Number Of Insurance Plans (PV2.20)|
|[getExpectedSurgeryDateAndTime](#pv2getexpectedsurgerydateandtime)|Get Expected Surgery Date And Time (PV2.33)|
|[getFirstSimilarIllnessDate](#pv2getfirstsimilarillnessdate)|Get First Similar Illness Date (PV2.29)|
|[getLivingWillCode](#pv2getlivingwillcode)|Get Living Will Code (PV2.43)|
|[getMilitaryNonAvailabilityCode](#pv2getmilitarynonavailabilitycode)|Get Military Non Availability Code (PV2.35)|
|[getMilitaryPartnershipCode](#pv2getmilitarypartnershipcode)|Get Military Partnership Code (PV2.34)|
|[getModeOfArrivalCode](#pv2getmodeofarrivalcode)|Get Mode Of Arrival Code (PV2.38)|
|[getNewbornBabyIndicator](#pv2getnewbornbabyindicator)|Get Newborn Baby Indicator (PV2.36)|
|[getOrganDonorCode](#pv2getorgandonorcode)|Get Organ Donor Code (PV2.44)|
|[getPatientChargeAdjustmentCode](#pv2getpatientchargeadjustmentcode)|Get Patient Charge Adjustment Code (PV2.30)|
|[getPatientConditionCode](#pv2getpatientconditioncode)|Get Patient Condition Code (PV2.42)|
|[getPatientStatusCode](#pv2getpatientstatuscode)|Get Patient Status Code (PV2.24)|
|[getPatientStatusEffectiveDate](#pv2getpatientstatuseffectivedate)|Get Patient Status Effective Date (PV2.46)|
|[getPatientValuables](#pv2getpatientvaluables)|Get Patient Valuables (PV2.5)|
|[getPatientValuablesLocation](#pv2getpatientvaluableslocation)|Get Patient Valuables Location (PV2.6)|
|[getPrecautionCode](#pv2getprecautioncode)|Get Precaution Code (PV2.41)|
|[getPreviousServiceDate](#pv2getpreviousservicedate)|Get Previous Service Date (PV2.14)|
|[getPreviousTreatmentDate](#pv2getprevioustreatmentdate)|Get Previous Treatment Date (PV2.26)|
|[getPurgeStatusCode](#pv2getpurgestatuscode)|Get Purge Status Code (PV2.16)|
|[getPurgeStatusDate](#pv2getpurgestatusdate)|Get Purge Status Date (PV2.17)|
|[getRecreationalDrugUseCode](#pv2getrecreationaldrugusecode)|Get Recreational Drug Use Code (PV2.39)|
|[getRecurringServiceCode](#pv2getrecurringservicecode)|Get Recurring Service Code (PV2.31)|
|[getReferralSourceCode](#pv2getreferralsourcecode)|Get Referral Source Code (PV2.13)|
|[getRetentionIndicator](#pv2getretentionindicator)|Get Retention Indicator (PV2.19)|
|[getSignatureOnFileDate](#pv2getsignatureonfiledate)|Get Signature On File Date (PV2.28)|
|[getSpecialProgramCode](#pv2getspecialprogramcode)|Get Special Program Code (PV2.18)|
|[getTransferReason](#pv2gettransferreason)|Get Transfer Reason (PV2.4)|
|[getVisitDescription](#pv2getvisitdescription)|Get Visit Description (PV2.12)|
|[getVisitPriorityCode](#pv2getvisitprioritycode)|Get Visit Priority Code (PV2.25)|
|[getVisitProtectionIndicator](#pv2getvisitprotectionindicator)|Get Visit Protection Indicator (PV2.22)|
|[getVisitPublicityCode](#pv2getvisitpublicitycode)|Get Visit Publicity Code (PV2.21)|
|[getVisitUserCode](#pv2getvisitusercode)|Get Visit User Code (PV2.7)|
|[setAccommodationCode](#pv2setaccommodationcode)|Set Accommodation Code (PV2.2)|
|[setActualLengthOfInpatientStay](#pv2setactuallengthofinpatientstay)|Set Actual Length Of Inpatient Stay (PV2.11)|
|[setAdmissionLevelOfCareCode](#pv2setadmissionlevelofcarecode)|Set Admission Level Of Care Code (PV2.40)|
|[setAdmitReason](#pv2setadmitreason)|Set Admit Reason (PV2.3)|
|[setAdvanceDirectiveCode](#pv2setadvancedirectivecode)|Set Advance Directive Code (PV2.45)|
|[setBabyDetainedIndicator](#pv2setbabydetainedindicator)|Set Baby Detained Indicator (PV2.37)|
|[setBillingMediaCode](#pv2setbillingmediacode)|Set Billing Media Code (PV2.32)|
|[setClinicOrganizationName](#pv2setclinicorganizationname)|Set Clinic Organization Name (PV2.23)|
|[setEmploymentIllnessRelatedIndicator](#pv2setemploymentillnessrelatedindicator)|Set Employment Illness Related Indicator (PV2.15)|
|[setEstimatedLengthofInpatientStay](#pv2setestimatedlengthofinpatientstay)|Set Estimated Lengthof Inpatient Stay (PV2.10)|
|[setExpectedAdmitDateTime](#pv2setexpectedadmitdatetime)|Set Expected Admit Date Time (PV2.8)|
|[setExpectedDischargeDateTime](#pv2setexpecteddischargedatetime)|Set Expected Discharge Date Time (PV2.9)|
|[setExpectedDischargeDisposition](#pv2setexpecteddischargedisposition)|Set Expected Discharge Disposition (PV2.27)|
|[setExpectedLOAReturnDateTime](#pv2setexpectedloareturndatetime)|Set Expected LOAReturn Date Time (PV2.47)|
|[setExpectedNumberOfInsurancePlans](#pv2setexpectednumberofinsuranceplans)|Set Expected Number Of Insurance Plans (PV2.20)|
|[setExpectedSurgeryDateAndTime](#pv2setexpectedsurgerydateandtime)|Set Expected Surgery Date And Time (PV2.33)|
|[setFirstSimilarIllnessDate](#pv2setfirstsimilarillnessdate)|Set First Similar Illness Date (PV2.29)|
|[setLivingWillCode](#pv2setlivingwillcode)|Set Living Will Code (PV2.43)|
|[setMilitaryNonAvailabilityCode](#pv2setmilitarynonavailabilitycode)|Set Military Non Availability Code (PV2.35)|
|[setMilitaryPartnershipCode](#pv2setmilitarypartnershipcode)|Set Military Partnership Code (PV2.34)|
|[setModeOfArrivalCode](#pv2setmodeofarrivalcode)|Set Mode Of Arrival Code (PV2.38)|
|[setNewbornBabyIndicator](#pv2setnewbornbabyindicator)|Set Newborn Baby Indicator (PV2.36)|
|[setOrganDonorCode](#pv2setorgandonorcode)|Set Organ Donor Code (PV2.44)|
|[setPatientChargeAdjustmentCode](#pv2setpatientchargeadjustmentcode)|Set Patient Charge Adjustment Code (PV2.30)|
|[setPatientConditionCode](#pv2setpatientconditioncode)|Set Patient Condition Code (PV2.42)|
|[setPatientStatusCode](#pv2setpatientstatuscode)|Set Patient Status Code (PV2.24)|
|[setPatientStatusEffectiveDate](#pv2setpatientstatuseffectivedate)|Set Patient Status Effective Date (PV2.46)|
|[setPatientValuables](#pv2setpatientvaluables)|Set Patient Valuables (PV2.5)|
|[setPatientValuablesLocation](#pv2setpatientvaluableslocation)|Set Patient Valuables Location (PV2.6)|
|[setPrecautionCode](#pv2setprecautioncode)|Set Precaution Code (PV2.41)|
|[setPreviousServiceDate](#pv2setpreviousservicedate)|Set Previous Service Date (PV2.14)|
|[setPreviousTreatmentDate](#pv2setprevioustreatmentdate)|Set Previous Treatment Date (PV2.26)|
|[setPriorPendingLocation](#pv2setpriorpendinglocation)|Set Prior Pending Location (PV2.1)|
|[setPurgeStatusCode](#pv2setpurgestatuscode)|Set Purge Status Code (PV2.16)|
|[setPurgeStatusDate](#pv2setpurgestatusdate)|Set Purge Status Date (PV2.17)|
|[setRecreationalDrugUseCode](#pv2setrecreationaldrugusecode)|Set Recreational Drug Use Code (PV2.39)|
|[setRecurringServiceCode](#pv2setrecurringservicecode)|Set Recurring Service Code (PV2.31)|
|[setReferralSourceCode](#pv2setreferralsourcecode)|Set Referral Source Code (PV2.13)|
|[setRetentionIndicator](#pv2setretentionindicator)|Set Retention Indicator (PV2.19)|
|[setSignatureOnFileDate](#pv2setsignatureonfiledate)|Set Signature On File Date (PV2.28)|
|[setSpecialProgramCode](#pv2setspecialprogramcode)|Set Special Program Code (PV2.18)|
|[setTransferReason](#pv2settransferreason)|Set Transfer Reason (PV2.4)|
|[setVisitDescription](#pv2setvisitdescription)|Set Visit Description (PV2.12)|
|[setVisitPriorityCode](#pv2setvisitprioritycode)|Set Visit Priority Code (PV2.25)|
|[setVisitProtectionIndicator](#pv2setvisitprotectionindicator)|Set Visit Protection Indicator (PV2.22)|
|[setVisitPublicityCode](#pv2setvisitpublicitycode)|Set Visit Publicity Code (PV2.21)|
|[setVisitUserCode](#pv2setvisitusercode)|Set Visit User Code (PV2.7)|

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



### PV2::getAccommodationCode  

**Description**

```php
public getAccommodationCode (int $position)
```

Get Accommodation Code (PV2.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getActualLengthOfInpatientStay  

**Description**

```php
public getActualLengthOfInpatientStay (int $position)
```

Get Actual Length Of Inpatient Stay (PV2.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getAdmissionLevelOfCareCode  

**Description**

```php
public getAdmissionLevelOfCareCode (int $position)
```

Get Admission Level Of Care Code (PV2.40) 

 

**Parameters**

* `(int) $position`
: Defaults to 40  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getAdmitReason  

**Description**

```php
public getAdmitReason (int $position)
```

Get Admit Reason (PV2.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getAdvanceDirectiveCode  

**Description**

```php
public getAdvanceDirectiveCode (int $position)
```

Get Advance Directive Code (PV2.45) 

 

**Parameters**

* `(int) $position`
: Defaults to 45  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getBabyDetainedIndicator  

**Description**

```php
public getBabyDetainedIndicator (int $position)
```

Get Baby Detained Indicator (PV2.37) 

 

**Parameters**

* `(int) $position`
: Defaults to 37  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getBillingMediaCode  

**Description**

```php
public getBillingMediaCode (int $position)
```

Get Billing Media Code (PV2.32) 

 

**Parameters**

* `(int) $position`
: Defaults to 32  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getClinicOrganizationName  

**Description**

```php
public getClinicOrganizationName (int $position)
```

Get Clinic Organization Name (PV2.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getEmploymentIllnessRelatedIndicator  

**Description**

```php
public getEmploymentIllnessRelatedIndicator (int $position)
```

Get Employment Illness Related Indicator (PV2.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getEstimatedLengthofInpatientStay  

**Description**

```php
public getEstimatedLengthofInpatientStay (int $position)
```

Get Estimated Lengthof Inpatient Stay (PV2.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getExpectedAdmitDateTime  

**Description**

```php
public getExpectedAdmitDateTime (int $position)
```

Get Expected Admit Date Time (PV2.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getExpectedDischargeDateTime  

**Description**

```php
public getExpectedDischargeDateTime (int $position)
```

Get Expected Discharge Date Time (PV2.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getExpectedDischargeDisposition  

**Description**

```php
public getExpectedDischargeDisposition (int $position)
```

Get Expected Discharge Disposition (PV2.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getExpectedLOAReturnDateTime  

**Description**

```php
public getExpectedLOAReturnDateTime (int $position)
```

Get Expected LOAReturn Date Time (PV2.47) 

 

**Parameters**

* `(int) $position`
: Defaults to 47  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getExpectedNumberOfInsurancePlans  

**Description**

```php
public getExpectedNumberOfInsurancePlans (int $position)
```

Get Expected Number Of Insurance Plans (PV2.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getExpectedSurgeryDateAndTime  

**Description**

```php
public getExpectedSurgeryDateAndTime (int $position)
```

Get Expected Surgery Date And Time (PV2.33) 

 

**Parameters**

* `(int) $position`
: Defaults to 33  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getFirstSimilarIllnessDate  

**Description**

```php
public getFirstSimilarIllnessDate (int $position)
```

Get First Similar Illness Date (PV2.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getLivingWillCode  

**Description**

```php
public getLivingWillCode (int $position)
```

Get Living Will Code (PV2.43) 

 

**Parameters**

* `(int) $position`
: Defaults to 43  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getMilitaryNonAvailabilityCode  

**Description**

```php
public getMilitaryNonAvailabilityCode (int $position)
```

Get Military Non Availability Code (PV2.35) 

 

**Parameters**

* `(int) $position`
: Defaults to 35  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getMilitaryPartnershipCode  

**Description**

```php
public getMilitaryPartnershipCode (int $position)
```

Get Military Partnership Code (PV2.34) 

 

**Parameters**

* `(int) $position`
: Defaults to 34  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getModeOfArrivalCode  

**Description**

```php
public getModeOfArrivalCode (int $position)
```

Get Mode Of Arrival Code (PV2.38) 

 

**Parameters**

* `(int) $position`
: Defaults to 38  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getNewbornBabyIndicator  

**Description**

```php
public getNewbornBabyIndicator (int $position)
```

Get Newborn Baby Indicator (PV2.36) 

 

**Parameters**

* `(int) $position`
: Defaults to 36  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getOrganDonorCode  

**Description**

```php
public getOrganDonorCode (int $position)
```

Get Organ Donor Code (PV2.44) 

 

**Parameters**

* `(int) $position`
: Defaults to 44  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPatientChargeAdjustmentCode  

**Description**

```php
public getPatientChargeAdjustmentCode (int $position)
```

Get Patient Charge Adjustment Code (PV2.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPatientConditionCode  

**Description**

```php
public getPatientConditionCode (int $position)
```

Get Patient Condition Code (PV2.42) 

 

**Parameters**

* `(int) $position`
: Defaults to 42  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPatientStatusCode  

**Description**

```php
public getPatientStatusCode (int $position)
```

Get Patient Status Code (PV2.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPatientStatusEffectiveDate  

**Description**

```php
public getPatientStatusEffectiveDate (int $position)
```

Get Patient Status Effective Date (PV2.46) 

 

**Parameters**

* `(int) $position`
: Defaults to 46  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPatientValuables  

**Description**

```php
public getPatientValuables (int $position)
```

Get Patient Valuables (PV2.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPatientValuablesLocation  

**Description**

```php
public getPatientValuablesLocation (int $position)
```

Get Patient Valuables Location (PV2.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPrecautionCode  

**Description**

```php
public getPrecautionCode (int $position)
```

Get Precaution Code (PV2.41) 

 

**Parameters**

* `(int) $position`
: Defaults to 41  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPreviousServiceDate  

**Description**

```php
public getPreviousServiceDate (int $position)
```

Get Previous Service Date (PV2.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPreviousTreatmentDate  

**Description**

```php
public getPreviousTreatmentDate (int $position)
```

Get Previous Treatment Date (PV2.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPurgeStatusCode  

**Description**

```php
public getPurgeStatusCode (int $position)
```

Get Purge Status Code (PV2.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getPurgeStatusDate  

**Description**

```php
public getPurgeStatusDate (int $position)
```

Get Purge Status Date (PV2.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getRecreationalDrugUseCode  

**Description**

```php
public getRecreationalDrugUseCode (int $position)
```

Get Recreational Drug Use Code (PV2.39) 

 

**Parameters**

* `(int) $position`
: Defaults to 39  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getRecurringServiceCode  

**Description**

```php
public getRecurringServiceCode (int $position)
```

Get Recurring Service Code (PV2.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getReferralSourceCode  

**Description**

```php
public getReferralSourceCode (int $position)
```

Get Referral Source Code (PV2.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getRetentionIndicator  

**Description**

```php
public getRetentionIndicator (int $position)
```

Get Retention Indicator (PV2.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getSignatureOnFileDate  

**Description**

```php
public getSignatureOnFileDate (int $position)
```

Get Signature On File Date (PV2.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getSpecialProgramCode  

**Description**

```php
public getSpecialProgramCode (int $position)
```

Get Special Program Code (PV2.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getTransferReason  

**Description**

```php
public getTransferReason (int $position)
```

Get Transfer Reason (PV2.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getVisitDescription  

**Description**

```php
public getVisitDescription (int $position)
```

Get Visit Description (PV2.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getVisitPriorityCode  

**Description**

```php
public getVisitPriorityCode (int $position)
```

Get Visit Priority Code (PV2.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getVisitProtectionIndicator  

**Description**

```php
public getVisitProtectionIndicator (int $position)
```

Get Visit Protection Indicator (PV2.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getVisitPublicityCode  

**Description**

```php
public getVisitPublicityCode (int $position)
```

Get Visit Publicity Code (PV2.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### PV2::getVisitUserCode  

**Description**

```php
public getVisitUserCode (int $position)
```

Get Visit User Code (PV2.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### PV2::setAccommodationCode  

**Description**

```php
public setAccommodationCode (string|int|array|null $value, int $position)
```

Set Accommodation Code (PV2.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### PV2::setActualLengthOfInpatientStay  

**Description**

```php
public setActualLengthOfInpatientStay (string|int|array|null $value, int $position)
```

Set Actual Length Of Inpatient Stay (PV2.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### PV2::setAdmissionLevelOfCareCode  

**Description**

```php
public setAdmissionLevelOfCareCode (string|int|array|null $value, int $position)
```

Set Admission Level Of Care Code (PV2.40) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 40  

**Return Values**

`bool`




<hr />


### PV2::setAdmitReason  

**Description**

```php
public setAdmitReason (string|int|array|null $value, int $position)
```

Set Admit Reason (PV2.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### PV2::setAdvanceDirectiveCode  

**Description**

```php
public setAdvanceDirectiveCode (string|int|array|null $value, int $position)
```

Set Advance Directive Code (PV2.45) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 45  

**Return Values**

`bool`




<hr />


### PV2::setBabyDetainedIndicator  

**Description**

```php
public setBabyDetainedIndicator (string|int|array|null $value, int $position)
```

Set Baby Detained Indicator (PV2.37) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 37  

**Return Values**

`bool`




<hr />


### PV2::setBillingMediaCode  

**Description**

```php
public setBillingMediaCode (string|int|array|null $value, int $position)
```

Set Billing Media Code (PV2.32) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 32  

**Return Values**

`bool`




<hr />


### PV2::setClinicOrganizationName  

**Description**

```php
public setClinicOrganizationName (string|int|array|null $value, int $position)
```

Set Clinic Organization Name (PV2.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### PV2::setEmploymentIllnessRelatedIndicator  

**Description**

```php
public setEmploymentIllnessRelatedIndicator (string|int|array|null $value, int $position)
```

Set Employment Illness Related Indicator (PV2.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### PV2::setEstimatedLengthofInpatientStay  

**Description**

```php
public setEstimatedLengthofInpatientStay (string|int|array|null $value, int $position)
```

Set Estimated Lengthof Inpatient Stay (PV2.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### PV2::setExpectedAdmitDateTime  

**Description**

```php
public setExpectedAdmitDateTime (string|int|array|null $value, int $position)
```

Set Expected Admit Date Time (PV2.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### PV2::setExpectedDischargeDateTime  

**Description**

```php
public setExpectedDischargeDateTime (string|int|array|null $value, int $position)
```

Set Expected Discharge Date Time (PV2.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### PV2::setExpectedDischargeDisposition  

**Description**

```php
public setExpectedDischargeDisposition (string|int|array|null $value, int $position)
```

Set Expected Discharge Disposition (PV2.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### PV2::setExpectedLOAReturnDateTime  

**Description**

```php
public setExpectedLOAReturnDateTime (string|int|array|null $value, int $position)
```

Set Expected LOAReturn Date Time (PV2.47) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 47  

**Return Values**

`bool`




<hr />


### PV2::setExpectedNumberOfInsurancePlans  

**Description**

```php
public setExpectedNumberOfInsurancePlans (string|int|array|null $value, int $position)
```

Set Expected Number Of Insurance Plans (PV2.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### PV2::setExpectedSurgeryDateAndTime  

**Description**

```php
public setExpectedSurgeryDateAndTime (string|int|array|null $value, int $position)
```

Set Expected Surgery Date And Time (PV2.33) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 33  

**Return Values**

`bool`




<hr />


### PV2::setFirstSimilarIllnessDate  

**Description**

```php
public setFirstSimilarIllnessDate (string|int|array|null $value, int $position)
```

Set First Similar Illness Date (PV2.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### PV2::setLivingWillCode  

**Description**

```php
public setLivingWillCode (string|int|array|null $value, int $position)
```

Set Living Will Code (PV2.43) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 43  

**Return Values**

`bool`




<hr />


### PV2::setMilitaryNonAvailabilityCode  

**Description**

```php
public setMilitaryNonAvailabilityCode (string|int|array|null $value, int $position)
```

Set Military Non Availability Code (PV2.35) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 35  

**Return Values**

`bool`




<hr />


### PV2::setMilitaryPartnershipCode  

**Description**

```php
public setMilitaryPartnershipCode (string|int|array|null $value, int $position)
```

Set Military Partnership Code (PV2.34) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 34  

**Return Values**

`bool`




<hr />


### PV2::setModeOfArrivalCode  

**Description**

```php
public setModeOfArrivalCode (string|int|array|null $value, int $position)
```

Set Mode Of Arrival Code (PV2.38) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 38  

**Return Values**

`bool`




<hr />


### PV2::setNewbornBabyIndicator  

**Description**

```php
public setNewbornBabyIndicator (string|int|array|null $value, int $position)
```

Set Newborn Baby Indicator (PV2.36) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 36  

**Return Values**

`bool`




<hr />


### PV2::setOrganDonorCode  

**Description**

```php
public setOrganDonorCode (string|int|array|null $value, int $position)
```

Set Organ Donor Code (PV2.44) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 44  

**Return Values**

`bool`




<hr />


### PV2::setPatientChargeAdjustmentCode  

**Description**

```php
public setPatientChargeAdjustmentCode (string|int|array|null $value, int $position)
```

Set Patient Charge Adjustment Code (PV2.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### PV2::setPatientConditionCode  

**Description**

```php
public setPatientConditionCode (string|int|array|null $value, int $position)
```

Set Patient Condition Code (PV2.42) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 42  

**Return Values**

`bool`




<hr />


### PV2::setPatientStatusCode  

**Description**

```php
public setPatientStatusCode (string|int|array|null $value, int $position)
```

Set Patient Status Code (PV2.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### PV2::setPatientStatusEffectiveDate  

**Description**

```php
public setPatientStatusEffectiveDate (string|int|array|null $value, int $position)
```

Set Patient Status Effective Date (PV2.46) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 46  

**Return Values**

`bool`




<hr />


### PV2::setPatientValuables  

**Description**

```php
public setPatientValuables (string|int|array|null $value, int $position)
```

Set Patient Valuables (PV2.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### PV2::setPatientValuablesLocation  

**Description**

```php
public setPatientValuablesLocation (string|int|array|null $value, int $position)
```

Set Patient Valuables Location (PV2.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### PV2::setPrecautionCode  

**Description**

```php
public setPrecautionCode (string|int|array|null $value, int $position)
```

Set Precaution Code (PV2.41) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 41  

**Return Values**

`bool`




<hr />


### PV2::setPreviousServiceDate  

**Description**

```php
public setPreviousServiceDate (string|int|array|null $value, int $position)
```

Set Previous Service Date (PV2.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### PV2::setPreviousTreatmentDate  

**Description**

```php
public setPreviousTreatmentDate (string|int|array|null $value, int $position)
```

Set Previous Treatment Date (PV2.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### PV2::setPriorPendingLocation  

**Description**

```php
public setPriorPendingLocation (string|int|array|null $value, int $position)
```

Set Prior Pending Location (PV2.1) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### PV2::setPurgeStatusCode  

**Description**

```php
public setPurgeStatusCode (string|int|array|null $value, int $position)
```

Set Purge Status Code (PV2.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### PV2::setPurgeStatusDate  

**Description**

```php
public setPurgeStatusDate (string|int|array|null $value, int $position)
```

Set Purge Status Date (PV2.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### PV2::setRecreationalDrugUseCode  

**Description**

```php
public setRecreationalDrugUseCode (string|int|array|null $value, int $position)
```

Set Recreational Drug Use Code (PV2.39) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 39  

**Return Values**

`bool`




<hr />


### PV2::setRecurringServiceCode  

**Description**

```php
public setRecurringServiceCode (string|int|array|null $value, int $position)
```

Set Recurring Service Code (PV2.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### PV2::setReferralSourceCode  

**Description**

```php
public setReferralSourceCode (string|int|array|null $value, int $position)
```

Set Referral Source Code (PV2.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### PV2::setRetentionIndicator  

**Description**

```php
public setRetentionIndicator (string|int|array|null $value, int $position)
```

Set Retention Indicator (PV2.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### PV2::setSignatureOnFileDate  

**Description**

```php
public setSignatureOnFileDate (string|int|array|null $value, int $position)
```

Set Signature On File Date (PV2.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### PV2::setSpecialProgramCode  

**Description**

```php
public setSpecialProgramCode (string|int|array|null $value, int $position)
```

Set Special Program Code (PV2.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### PV2::setTransferReason  

**Description**

```php
public setTransferReason (string|int|array|null $value, int $position)
```

Set Transfer Reason (PV2.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### PV2::setVisitDescription  

**Description**

```php
public setVisitDescription (string|int|array|null $value, int $position)
```

Set Visit Description (PV2.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### PV2::setVisitPriorityCode  

**Description**

```php
public setVisitPriorityCode (string|int|array|null $value, int $position)
```

Set Visit Priority Code (PV2.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### PV2::setVisitProtectionIndicator  

**Description**

```php
public setVisitProtectionIndicator (string|int|array|null $value, int $position)
```

Set Visit Protection Indicator (PV2.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### PV2::setVisitPublicityCode  

**Description**

```php
public setVisitPublicityCode (string|int|array|null $value, int $position)
```

Set Visit Publicity Code (PV2.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### PV2::setVisitUserCode  

**Description**

```php
public setVisitUserCode (string|int|array|null $value, int $position)
```

Set Visit User Code (PV2.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />

