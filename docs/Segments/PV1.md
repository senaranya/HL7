# Aranyasen\HL7\Segments\PV1  

PV1 segment class
Ref: https://hl7-definition.caristix.com/v2/HL7v2.5.1/Segments/PV1



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#pv1__destruct)||
|[getAccountStatus](#pv1getaccountstatus)||
|[getAdmissionType](#pv1getadmissiontype)||
|[getAdmitDateTime](#pv1getadmitdatetime)||
|[getAdmitSource](#pv1getadmitsource)||
|[getAdmittingDoctor](#pv1getadmittingdoctor)||
|[getAlternateVisitID](#pv1getalternatevisitid)||
|[getAmbulatoryStatus](#pv1getambulatorystatus)||
|[getAssignedPatientLocation](#pv1getassignedpatientlocation)||
|[getAttendingDoctor](#pv1getattendingdoctor)||
|[getBadDebtAgencyCode](#pv1getbaddebtagencycode)||
|[getBadDebtRecoveryAmount](#pv1getbaddebtrecoveryamount)||
|[getBadDebtTransferAmount](#pv1getbaddebttransferamount)||
|[getBedStatus](#pv1getbedstatus)||
|[getChargePriceIndicator](#pv1getchargepriceindicator)||
|[getConsultingDoctor](#pv1getconsultingdoctor)||
|[getContractAmount](#pv1getcontractamount)||
|[getContractCode](#pv1getcontractcode)||
|[getContractEffectiveDate](#pv1getcontracteffectivedate)||
|[getContractPeriod](#pv1getcontractperiod)||
|[getCourtesyCode](#pv1getcourtesycode)||
|[getCreditRating](#pv1getcreditrating)||
|[getCurrentPatientBalance](#pv1getcurrentpatientbalance)||
|[getDeleteAccountDate](#pv1getdeleteaccountdate)||
|[getDeleteAccountIndicator](#pv1getdeleteaccountindicator)||
|[getDietType](#pv1getdiettype)||
|[getDischargeDateTime](#pv1getdischargedatetime)||
|[getDischargeDisposition](#pv1getdischargedisposition)||
|[getDischargedToLocation](#pv1getdischargedtolocation)||
|[getFinancialClass](#pv1getfinancialclass)||
|[getHospitalService](#pv1gethospitalservice)||
|[getID](#pv1getid)||
|[getInterestCode](#pv1getinterestcode)||
|[getOtherHealthcareProvider](#pv1getotherhealthcareprovider)||
|[getPatientClass](#pv1getpatientclass)||
|[getPatientType](#pv1getpatienttype)||
|[getPendingLocation](#pv1getpendinglocation)||
|[getPreAdmitNumber](#pv1getpreadmitnumber)||
|[getPreAdmitTestIndicator](#pv1getpreadmittestindicator)||
|[getPriorPatientLocation](#pv1getpriorpatientlocation)||
|[getPriorTemporaryLocation](#pv1getpriortemporarylocation)||
|[getReAdmissionIndicator](#pv1getreadmissionindicator)||
|[getReferringDoctor](#pv1getreferringdoctor)||
|[getServicingFacility](#pv1getservicingfacility)||
|[getTemporaryLocation](#pv1gettemporarylocation)||
|[getTotalAdjustments](#pv1gettotaladjustments)||
|[getTotalCharges](#pv1gettotalcharges)||
|[getTotalPayments](#pv1gettotalpayments)||
|[getTransferToBadDebtCode](#pv1gettransfertobaddebtcode)||
|[getTransferToBadDebtDate](#pv1gettransfertobaddebtdate)||
|[getVipIndicator](#pv1getvipindicator)||
|[getVisitIndicator](#pv1getvisitindicator)||
|[getVisitNumber](#pv1getvisitnumber)||
|[resetIndex](#pv1resetindex)|Reset index of this segment|
|[setAccountStatus](#pv1setaccountstatus)||
|[setAdmissionType](#pv1setadmissiontype)||
|[setAdmitDateTime](#pv1setadmitdatetime)||
|[setAdmitSource](#pv1setadmitsource)||
|[setAdmittingDoctor](#pv1setadmittingdoctor)||
|[setAlternateVisitID](#pv1setalternatevisitid)||
|[setAmbulatoryStatus](#pv1setambulatorystatus)||
|[setAssignedPatientLocation](#pv1setassignedpatientlocation)||
|[setAttendingDoctor](#pv1setattendingdoctor)||
|[setBadDebtAgencyCode](#pv1setbaddebtagencycode)||
|[setBadDebtRecoveryAmount](#pv1setbaddebtrecoveryamount)||
|[setBadDebtTransferAmount](#pv1setbaddebttransferamount)||
|[setBedStatus](#pv1setbedstatus)||
|[setChargePriceIndicator](#pv1setchargepriceindicator)||
|[setConsultingDoctor](#pv1setconsultingdoctor)||
|[setContractAmount](#pv1setcontractamount)||
|[setContractCode](#pv1setcontractcode)||
|[setContractEffectiveDate](#pv1setcontracteffectivedate)||
|[setContractPeriod](#pv1setcontractperiod)||
|[setCourtesyCode](#pv1setcourtesycode)||
|[setCreditRating](#pv1setcreditrating)||
|[setCurrentPatientBalance](#pv1setcurrentpatientbalance)||
|[setDeleteAccountDate](#pv1setdeleteaccountdate)||
|[setDeleteAccountIndicator](#pv1setdeleteaccountindicator)||
|[setDietType](#pv1setdiettype)||
|[setDischargeDateTime](#pv1setdischargedatetime)||
|[setDischargeDisposition](#pv1setdischargedisposition)||
|[setDischargedToLocation](#pv1setdischargedtolocation)||
|[setFinancialClass](#pv1setfinancialclass)||
|[setHospitalService](#pv1sethospitalservice)||
|[setID](#pv1setid)||
|[setInterestCode](#pv1setinterestcode)||
|[setOtherHealthcareProvider](#pv1setotherhealthcareprovider)||
|[setPatientClass](#pv1setpatientclass)||
|[setPatientType](#pv1setpatienttype)||
|[setPendingLocation](#pv1setpendinglocation)||
|[setPreAdmitNumber](#pv1setpreadmitnumber)||
|[setPreAdmitTestIndicator](#pv1setpreadmittestindicator)||
|[setPriorPatientLocation](#pv1setpriorpatientlocation)||
|[setPriorTemporaryLocation](#pv1setpriortemporarylocation)||
|[setReAdmissionIndicator](#pv1setreadmissionindicator)||
|[setReferringDoctor](#pv1setreferringdoctor)||
|[setServicingFacility](#pv1setservicingfacility)||
|[setTemporaryLocation](#pv1settemporarylocation)||
|[setTotalAdjustments](#pv1settotaladjustments)||
|[setTotalCharges](#pv1settotalcharges)||
|[setTotalPayments](#pv1settotalpayments)||
|[setTransferToBadDebtCode](#pv1settransfertobaddebtcode)||
|[setTransferToBadDebtDate](#pv1settransfertobaddebtdate)||
|[setVipIndicator](#pv1setvipindicator)||
|[setVisitIndicator](#pv1setvisitindicator)||
|[setVisitNumber](#pv1setvisitnumber)||

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



### PV1::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAccountStatus  

**Description**

```php
 getAccountStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAdmissionType  

**Description**

```php
 getAdmissionType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAdmitDateTime  

**Description**

```php
 getAdmitDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAdmitSource  

**Description**

```php
 getAdmitSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAdmittingDoctor  

**Description**

```php
 getAdmittingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAlternateVisitID  

**Description**

```php
 getAlternateVisitID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAmbulatoryStatus  

**Description**

```php
 getAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAssignedPatientLocation  

**Description**

```php
 getAssignedPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getAttendingDoctor  

**Description**

```php
 getAttendingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getBadDebtAgencyCode  

**Description**

```php
 getBadDebtAgencyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getBadDebtRecoveryAmount  

**Description**

```php
 getBadDebtRecoveryAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getBadDebtTransferAmount  

**Description**

```php
 getBadDebtTransferAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getBedStatus  

**Description**

```php
 getBedStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getChargePriceIndicator  

**Description**

```php
 getChargePriceIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getConsultingDoctor  

**Description**

```php
 getConsultingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getContractAmount  

**Description**

```php
 getContractAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getContractCode  

**Description**

```php
 getContractCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getContractEffectiveDate  

**Description**

```php
 getContractEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getContractPeriod  

**Description**

```php
 getContractPeriod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getCourtesyCode  

**Description**

```php
 getCourtesyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getCreditRating  

**Description**

```php
 getCreditRating (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getCurrentPatientBalance  

**Description**

```php
 getCurrentPatientBalance (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getDeleteAccountDate  

**Description**

```php
 getDeleteAccountDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getDeleteAccountIndicator  

**Description**

```php
 getDeleteAccountIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getDietType  

**Description**

```php
 getDietType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getDischargeDateTime  

**Description**

```php
 getDischargeDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getDischargeDisposition  

**Description**

```php
 getDischargeDisposition (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getDischargedToLocation  

**Description**

```php
 getDischargedToLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getFinancialClass  

**Description**

```php
 getFinancialClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getHospitalService  

**Description**

```php
 getHospitalService (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getID  

**Description**

```php
 getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getInterestCode  

**Description**

```php
 getInterestCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getOtherHealthcareProvider  

**Description**

```php
 getOtherHealthcareProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getPatientClass  

**Description**

```php
 getPatientClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getPatientType  

**Description**

```php
 getPatientType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getPendingLocation  

**Description**

```php
 getPendingLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getPreAdmitNumber  

**Description**

```php
 getPreAdmitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getPreAdmitTestIndicator  

**Description**

```php
 getPreAdmitTestIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getPriorPatientLocation  

**Description**

```php
 getPriorPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getPriorTemporaryLocation  

**Description**

```php
 getPriorTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getReAdmissionIndicator  

**Description**

```php
 getReAdmissionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getReferringDoctor  

**Description**

```php
 getReferringDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getServicingFacility  

**Description**

```php
 getServicingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getTemporaryLocation  

**Description**

```php
 getTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getTotalAdjustments  

**Description**

```php
 getTotalAdjustments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getTotalCharges  

**Description**

```php
 getTotalCharges (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getTotalPayments  

**Description**

```php
 getTotalPayments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getTransferToBadDebtCode  

**Description**

```php
 getTransferToBadDebtCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getTransferToBadDebtDate  

**Description**

```php
 getTransferToBadDebtDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getVipIndicator  

**Description**

```php
 getVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getVisitIndicator  

**Description**

```php
 getVisitIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::getVisitNumber  

**Description**

```php
 getVisitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::resetIndex  

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


### PV1::setAccountStatus  

**Description**

```php
 setAccountStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAdmissionType  

**Description**

```php
 setAdmissionType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAdmitDateTime  

**Description**

```php
 setAdmitDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAdmitSource  

**Description**

```php
 setAdmitSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAdmittingDoctor  

**Description**

```php
 setAdmittingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAlternateVisitID  

**Description**

```php
 setAlternateVisitID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAmbulatoryStatus  

**Description**

```php
 setAmbulatoryStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAssignedPatientLocation  

**Description**

```php
 setAssignedPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setAttendingDoctor  

**Description**

```php
 setAttendingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setBadDebtAgencyCode  

**Description**

```php
 setBadDebtAgencyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setBadDebtRecoveryAmount  

**Description**

```php
 setBadDebtRecoveryAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setBadDebtTransferAmount  

**Description**

```php
 setBadDebtTransferAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setBedStatus  

**Description**

```php
 setBedStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setChargePriceIndicator  

**Description**

```php
 setChargePriceIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setConsultingDoctor  

**Description**

```php
 setConsultingDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setContractAmount  

**Description**

```php
 setContractAmount (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setContractCode  

**Description**

```php
 setContractCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setContractEffectiveDate  

**Description**

```php
 setContractEffectiveDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setContractPeriod  

**Description**

```php
 setContractPeriod (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setCourtesyCode  

**Description**

```php
 setCourtesyCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setCreditRating  

**Description**

```php
 setCreditRating (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setCurrentPatientBalance  

**Description**

```php
 setCurrentPatientBalance (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setDeleteAccountDate  

**Description**

```php
 setDeleteAccountDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setDeleteAccountIndicator  

**Description**

```php
 setDeleteAccountIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setDietType  

**Description**

```php
 setDietType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setDischargeDateTime  

**Description**

```php
 setDischargeDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setDischargeDisposition  

**Description**

```php
 setDischargeDisposition (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setDischargedToLocation  

**Description**

```php
 setDischargedToLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setFinancialClass  

**Description**

```php
 setFinancialClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setHospitalService  

**Description**

```php
 setHospitalService (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setInterestCode  

**Description**

```php
 setInterestCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setOtherHealthcareProvider  

**Description**

```php
 setOtherHealthcareProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setPatientClass  

**Description**

```php
 setPatientClass (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setPatientType  

**Description**

```php
 setPatientType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setPendingLocation  

**Description**

```php
 setPendingLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setPreAdmitNumber  

**Description**

```php
 setPreAdmitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setPreAdmitTestIndicator  

**Description**

```php
 setPreAdmitTestIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setPriorPatientLocation  

**Description**

```php
 setPriorPatientLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setPriorTemporaryLocation  

**Description**

```php
 setPriorTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setReAdmissionIndicator  

**Description**

```php
 setReAdmissionIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setReferringDoctor  

**Description**

```php
 setReferringDoctor (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setServicingFacility  

**Description**

```php
 setServicingFacility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setTemporaryLocation  

**Description**

```php
 setTemporaryLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setTotalAdjustments  

**Description**

```php
 setTotalAdjustments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setTotalCharges  

**Description**

```php
 setTotalCharges (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setTotalPayments  

**Description**

```php
 setTotalPayments (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setTransferToBadDebtCode  

**Description**

```php
 setTransferToBadDebtCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setTransferToBadDebtDate  

**Description**

```php
 setTransferToBadDebtDate (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setVipIndicator  

**Description**

```php
 setVipIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setVisitIndicator  

**Description**

```php
 setVisitIndicator (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### PV1::setVisitNumber  

**Description**

```php
 setVisitNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />

