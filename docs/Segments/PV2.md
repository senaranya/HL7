# Aranyasen\HL7\Segments\PV2  

PV2 segment class
Ref: https://hl7-definition.caristix.com/v2/HL7v2.4/Segments/PV2



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAccommodationCode](#pv2getaccommodationcode)||
|[getActualLengthOfInpatientStay](#pv2getactuallengthofinpatientstay)||
|[getAdmissionLevelOfCareCode](#pv2getadmissionlevelofcarecode)||
|[getAdmitReason](#pv2getadmitreason)||
|[getAdvanceDirectiveCode](#pv2getadvancedirectivecode)||
|[getBabyDetainedIndicator](#pv2getbabydetainedindicator)||
|[getBillingMediaCode](#pv2getbillingmediacode)||
|[getClinicOrganizationName](#pv2getclinicorganizationname)||
|[getEmploymentIllnessRelatedIndicator](#pv2getemploymentillnessrelatedindicator)||
|[getEstimatedLengthofInpatientStay](#pv2getestimatedlengthofinpatientstay)||
|[getExpectedAdmitDateTime](#pv2getexpectedadmitdatetime)||
|[getExpectedDischargeDateTime](#pv2getexpecteddischargedatetime)||
|[getExpectedDischargeDisposition](#pv2getexpecteddischargedisposition)||
|[getExpectedLOAReturnDateTime](#pv2getexpectedloareturndatetime)||
|[getExpectedNumberOfInsurancePlans](#pv2getexpectednumberofinsuranceplans)||
|[getExpectedSurgeryDateAndTime](#pv2getexpectedsurgerydateandtime)||
|[getFirstSimilarIllnessDate](#pv2getfirstsimilarillnessdate)||
|[getLivingWillCode](#pv2getlivingwillcode)||
|[getMilitaryNonAvailabilityCode](#pv2getmilitarynonavailabilitycode)||
|[getMilitaryPartnershipCode](#pv2getmilitarypartnershipcode)||
|[getModeOfArrivalCode](#pv2getmodeofarrivalcode)||
|[getNewbornBabyIndicator](#pv2getnewbornbabyindicator)||
|[getOrganDonorCode](#pv2getorgandonorcode)||
|[getPatientChargeAdjustmentCode](#pv2getpatientchargeadjustmentcode)||
|[getPatientConditionCode](#pv2getpatientconditioncode)||
|[getPatientStatusCode](#pv2getpatientstatuscode)||
|[getPatientStatusEffectiveDate](#pv2getpatientstatuseffectivedate)||
|[getPatientValuables](#pv2getpatientvaluables)||
|[getPatientValuablesLocation](#pv2getpatientvaluableslocation)||
|[getPrecautionCode](#pv2getprecautioncode)||
|[getPreviousServiceDate](#pv2getpreviousservicedate)||
|[getPreviousTreatmentDate](#pv2getprevioustreatmentdate)||
|[getPurgeStatusCode](#pv2getpurgestatuscode)||
|[getPurgeStatusDate](#pv2getpurgestatusdate)||
|[getRecreationalDrugUseCode](#pv2getrecreationaldrugusecode)||
|[getRecurringServiceCode](#pv2getrecurringservicecode)||
|[getReferralSourceCode](#pv2getreferralsourcecode)||
|[getRetentionIndicator](#pv2getretentionindicator)||
|[getSignatureOnFileDate](#pv2getsignatureonfiledate)||
|[getSpecialProgramCode](#pv2getspecialprogramcode)||
|[getTransferReason](#pv2gettransferreason)||
|[getVisitDescription](#pv2getvisitdescription)||
|[getVisitPriorityCode](#pv2getvisitprioritycode)||
|[getVisitProtectionIndicator](#pv2getvisitprotectionindicator)||
|[getVisitPublicityCode](#pv2getvisitpublicitycode)||
|[getVisitUserCode](#pv2getvisitusercode)||
|[setAccommodationCode](#pv2setaccommodationcode)||
|[setActualLengthOfInpatientStay](#pv2setactuallengthofinpatientstay)||
|[setAdmissionLevelOfCareCode](#pv2setadmissionlevelofcarecode)||
|[setAdmitReason](#pv2setadmitreason)||
|[setAdvanceDirectiveCode](#pv2setadvancedirectivecode)||
|[setBabyDetainedIndicator](#pv2setbabydetainedindicator)||
|[setBillingMediaCode](#pv2setbillingmediacode)||
|[setClinicOrganizationName](#pv2setclinicorganizationname)||
|[setEmploymentIllnessRelatedIndicator](#pv2setemploymentillnessrelatedindicator)||
|[setEstimatedLengthofInpatientStay](#pv2setestimatedlengthofinpatientstay)||
|[setExpectedAdmitDateTime](#pv2setexpectedadmitdatetime)||
|[setExpectedDischargeDateTime](#pv2setexpecteddischargedatetime)||
|[setExpectedDischargeDisposition](#pv2setexpecteddischargedisposition)||
|[setExpectedLOAReturnDateTime](#pv2setexpectedloareturndatetime)||
|[setExpectedNumberOfInsurancePlans](#pv2setexpectednumberofinsuranceplans)||
|[setExpectedSurgeryDateAndTime](#pv2setexpectedsurgerydateandtime)||
|[setFirstSimilarIllnessDate](#pv2setfirstsimilarillnessdate)||
|[setLivingWillCode](#pv2setlivingwillcode)||
|[setMilitaryNonAvailabilityCode](#pv2setmilitarynonavailabilitycode)||
|[setMilitaryPartnershipCode](#pv2setmilitarypartnershipcode)||
|[setModeOfArrivalCode](#pv2setmodeofarrivalcode)||
|[setNewbornBabyIndicator](#pv2setnewbornbabyindicator)||
|[setOrganDonorCode](#pv2setorgandonorcode)||
|[setPatientChargeAdjustmentCode](#pv2setpatientchargeadjustmentcode)||
|[setPatientConditionCode](#pv2setpatientconditioncode)||
|[setPatientStatusCode](#pv2setpatientstatuscode)||
|[setPatientStatusEffectiveDate](#pv2setpatientstatuseffectivedate)||
|[setPatientValuables](#pv2setpatientvaluables)||
|[setPatientValuablesLocation](#pv2setpatientvaluableslocation)||
|[setPrecautionCode](#pv2setprecautioncode)||
|[setPreviousServiceDate](#pv2setpreviousservicedate)||
|[setPreviousTreatmentDate](#pv2setprevioustreatmentdate)||
|[setPriorPendingLocation](#pv2setpriorpendinglocation)||
|[setPurgeStatusCode](#pv2setpurgestatuscode)||
|[setPurgeStatusDate](#pv2setpurgestatusdate)||
|[setRecreationalDrugUseCode](#pv2setrecreationaldrugusecode)||
|[setRecurringServiceCode](#pv2setrecurringservicecode)||
|[setReferralSourceCode](#pv2setreferralsourcecode)||
|[setRetentionIndicator](#pv2setretentionindicator)||
|[setSignatureOnFileDate](#pv2setsignatureonfiledate)||
|[setSpecialProgramCode](#pv2setspecialprogramcode)||
|[setTransferReason](#pv2settransferreason)||
|[setVisitDescription](#pv2setvisitdescription)||
|[setVisitPriorityCode](#pv2setvisitprioritycode)||
|[setVisitProtectionIndicator](#pv2setvisitprotectionindicator)||
|[setVisitPublicityCode](#pv2setvisitpublicitycode)||
|[setVisitUserCode](#pv2setvisitusercode)||

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
 getAccommodationCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getActualLengthOfInpatientStay  

**Description**

```php
 getActualLengthOfInpatientStay (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getAdmissionLevelOfCareCode  

**Description**

```php
 getAdmissionLevelOfCareCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getAdmitReason  

**Description**

```php
 getAdmitReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getAdvanceDirectiveCode  

**Description**

```php
 getAdvanceDirectiveCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getBabyDetainedIndicator  

**Description**

```php
 getBabyDetainedIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getBillingMediaCode  

**Description**

```php
 getBillingMediaCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getClinicOrganizationName  

**Description**

```php
 getClinicOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getEmploymentIllnessRelatedIndicator  

**Description**

```php
 getEmploymentIllnessRelatedIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getEstimatedLengthofInpatientStay  

**Description**

```php
 getEstimatedLengthofInpatientStay (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getExpectedAdmitDateTime  

**Description**

```php
 getExpectedAdmitDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getExpectedDischargeDateTime  

**Description**

```php
 getExpectedDischargeDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getExpectedDischargeDisposition  

**Description**

```php
 getExpectedDischargeDisposition (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getExpectedLOAReturnDateTime  

**Description**

```php
 getExpectedLOAReturnDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getExpectedNumberOfInsurancePlans  

**Description**

```php
 getExpectedNumberOfInsurancePlans (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getExpectedSurgeryDateAndTime  

**Description**

```php
 getExpectedSurgeryDateAndTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getFirstSimilarIllnessDate  

**Description**

```php
 getFirstSimilarIllnessDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getLivingWillCode  

**Description**

```php
 getLivingWillCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getMilitaryNonAvailabilityCode  

**Description**

```php
 getMilitaryNonAvailabilityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getMilitaryPartnershipCode  

**Description**

```php
 getMilitaryPartnershipCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getModeOfArrivalCode  

**Description**

```php
 getModeOfArrivalCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getNewbornBabyIndicator  

**Description**

```php
 getNewbornBabyIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getOrganDonorCode  

**Description**

```php
 getOrganDonorCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPatientChargeAdjustmentCode  

**Description**

```php
 getPatientChargeAdjustmentCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPatientConditionCode  

**Description**

```php
 getPatientConditionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPatientStatusCode  

**Description**

```php
 getPatientStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPatientStatusEffectiveDate  

**Description**

```php
 getPatientStatusEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPatientValuables  

**Description**

```php
 getPatientValuables (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPatientValuablesLocation  

**Description**

```php
 getPatientValuablesLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPrecautionCode  

**Description**

```php
 getPrecautionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPreviousServiceDate  

**Description**

```php
 getPreviousServiceDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPreviousTreatmentDate  

**Description**

```php
 getPreviousTreatmentDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPurgeStatusCode  

**Description**

```php
 getPurgeStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getPurgeStatusDate  

**Description**

```php
 getPurgeStatusDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getRecreationalDrugUseCode  

**Description**

```php
 getRecreationalDrugUseCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getRecurringServiceCode  

**Description**

```php
 getRecurringServiceCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getReferralSourceCode  

**Description**

```php
 getReferralSourceCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getRetentionIndicator  

**Description**

```php
 getRetentionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getSignatureOnFileDate  

**Description**

```php
 getSignatureOnFileDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getSpecialProgramCode  

**Description**

```php
 getSpecialProgramCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getTransferReason  

**Description**

```php
 getTransferReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getVisitDescription  

**Description**

```php
 getVisitDescription (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getVisitPriorityCode  

**Description**

```php
 getVisitPriorityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getVisitProtectionIndicator  

**Description**

```php
 getVisitProtectionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getVisitPublicityCode  

**Description**

```php
 getVisitPublicityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::getVisitUserCode  

**Description**

```php
 getVisitUserCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setAccommodationCode  

**Description**

```php
 setAccommodationCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setActualLengthOfInpatientStay  

**Description**

```php
 setActualLengthOfInpatientStay (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setAdmissionLevelOfCareCode  

**Description**

```php
 setAdmissionLevelOfCareCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setAdmitReason  

**Description**

```php
 setAdmitReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setAdvanceDirectiveCode  

**Description**

```php
 setAdvanceDirectiveCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setBabyDetainedIndicator  

**Description**

```php
 setBabyDetainedIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setBillingMediaCode  

**Description**

```php
 setBillingMediaCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setClinicOrganizationName  

**Description**

```php
 setClinicOrganizationName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setEmploymentIllnessRelatedIndicator  

**Description**

```php
 setEmploymentIllnessRelatedIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setEstimatedLengthofInpatientStay  

**Description**

```php
 setEstimatedLengthofInpatientStay (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setExpectedAdmitDateTime  

**Description**

```php
 setExpectedAdmitDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setExpectedDischargeDateTime  

**Description**

```php
 setExpectedDischargeDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setExpectedDischargeDisposition  

**Description**

```php
 setExpectedDischargeDisposition (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setExpectedLOAReturnDateTime  

**Description**

```php
 setExpectedLOAReturnDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setExpectedNumberOfInsurancePlans  

**Description**

```php
 setExpectedNumberOfInsurancePlans (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setExpectedSurgeryDateAndTime  

**Description**

```php
 setExpectedSurgeryDateAndTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setFirstSimilarIllnessDate  

**Description**

```php
 setFirstSimilarIllnessDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setLivingWillCode  

**Description**

```php
 setLivingWillCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setMilitaryNonAvailabilityCode  

**Description**

```php
 setMilitaryNonAvailabilityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setMilitaryPartnershipCode  

**Description**

```php
 setMilitaryPartnershipCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setModeOfArrivalCode  

**Description**

```php
 setModeOfArrivalCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setNewbornBabyIndicator  

**Description**

```php
 setNewbornBabyIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setOrganDonorCode  

**Description**

```php
 setOrganDonorCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPatientChargeAdjustmentCode  

**Description**

```php
 setPatientChargeAdjustmentCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPatientConditionCode  

**Description**

```php
 setPatientConditionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPatientStatusCode  

**Description**

```php
 setPatientStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPatientStatusEffectiveDate  

**Description**

```php
 setPatientStatusEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPatientValuables  

**Description**

```php
 setPatientValuables (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPatientValuablesLocation  

**Description**

```php
 setPatientValuablesLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPrecautionCode  

**Description**

```php
 setPrecautionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPreviousServiceDate  

**Description**

```php
 setPreviousServiceDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPreviousTreatmentDate  

**Description**

```php
 setPreviousTreatmentDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPriorPendingLocation  

**Description**

```php
 setPriorPendingLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPurgeStatusCode  

**Description**

```php
 setPurgeStatusCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setPurgeStatusDate  

**Description**

```php
 setPurgeStatusDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setRecreationalDrugUseCode  

**Description**

```php
 setRecreationalDrugUseCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setRecurringServiceCode  

**Description**

```php
 setRecurringServiceCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setReferralSourceCode  

**Description**

```php
 setReferralSourceCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setRetentionIndicator  

**Description**

```php
 setRetentionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setSignatureOnFileDate  

**Description**

```php
 setSignatureOnFileDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setSpecialProgramCode  

**Description**

```php
 setSpecialProgramCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setTransferReason  

**Description**

```php
 setTransferReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setVisitDescription  

**Description**

```php
 setVisitDescription (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setVisitPriorityCode  

**Description**

```php
 setVisitPriorityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setVisitProtectionIndicator  

**Description**

```php
 setVisitProtectionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setVisitPublicityCode  

**Description**

```php
 setVisitPublicityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV2::setVisitUserCode  

**Description**

```php
 setVisitUserCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

