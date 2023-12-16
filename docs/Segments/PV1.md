# Aranyasen\HL7\Segments\PV1  

PV1 segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-pv1-patient-visit-information-segment



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#pv1__destruct)||
|[getAccountStatus](#pv1getaccountstatus)|Get Account Status (OBR.41)|
|[getAdmissionType](#pv1getadmissiontype)|Get Admission Type (OBR.4)|
|[getAdmitDateTime](#pv1getadmitdatetime)|Get Admit DateTime (OBR.44)|
|[getAdmitSource](#pv1getadmitsource)|Get Admit Source (OBR.14)|
|[getAdmittingDoctor](#pv1getadmittingdoctor)|Get Admitting Doctor (OBR.17)|
|[getAlternateVisitID](#pv1getalternatevisitid)|Get Alternate VisitID (OBR.50)|
|[getAmbulatoryStatus](#pv1getambulatorystatus)|Get Ambulatory Status (OBR.15)|
|[getAssignedPatientLocation](#pv1getassignedpatientlocation)|Get Assigned PatientLocation (OBR.3)|
|[getAttendingDoctor](#pv1getattendingdoctor)|Get Attending Doctor (OBR.7)|
|[getBadDebtAgencyCode](#pv1getbaddebtagencycode)|Get Bad DebtAgencyCode (OBR.31)|
|[getBadDebtRecoveryAmount](#pv1getbaddebtrecoveryamount)|Get Bad DebtRecoveryAmount (OBR.33)|
|[getBadDebtTransferAmount](#pv1getbaddebttransferamount)|Get Bad DebtTransferAmount (OBR.32)|
|[getBedStatus](#pv1getbedstatus)|Get Bed Status (OBR.40)|
|[getChargePriceIndicator](#pv1getchargepriceindicator)|Get Charge PriceIndicator (OBR.21)|
|[getConsultingDoctor](#pv1getconsultingdoctor)|Get Consulting Doctor (OBR.9)|
|[getContractAmount](#pv1getcontractamount)|Get Contract Amount (OBR.26)|
|[getContractCode](#pv1getcontractcode)|Get Contract Code (OBR.24)|
|[getContractEffectiveDate](#pv1getcontracteffectivedate)|Get Contract EffectiveDate (OBR.25)|
|[getContractPeriod](#pv1getcontractperiod)|Get Contract Period (OBR.27)|
|[getCourtesyCode](#pv1getcourtesycode)|Get Courtesy Code (OBR.22)|
|[getCreditRating](#pv1getcreditrating)|Get Credit Rating (OBR.23)|
|[getCurrentPatientBalance](#pv1getcurrentpatientbalance)|Get Current PatientBalance (OBR.46)|
|[getDeleteAccountDate](#pv1getdeleteaccountdate)|Get Delete AccountDate (OBR.35)|
|[getDeleteAccountIndicator](#pv1getdeleteaccountindicator)|Get Delete AccountIndicator (OBR.34)|
|[getDietType](#pv1getdiettype)|Get Diet Type (OBR.38)|
|[getDischargeDateTime](#pv1getdischargedatetime)|Get Discharge DateTime (OBR.45)|
|[getDischargeDisposition](#pv1getdischargedisposition)|Get Discharge Disposition (OBR.36)|
|[getDischargedToLocation](#pv1getdischargedtolocation)|Get Discharged ToLocation (OBR.37)|
|[getFinancialClass](#pv1getfinancialclass)|Get Financial Class (OBR.20)|
|[getHospitalService](#pv1gethospitalservice)|Get Hospital Service (OBR.10)|
|[getID](#pv1getid)|Get ID (OBR.1)|
|[getInterestCode](#pv1getinterestcode)|Get Interest Code (OBR.28)|
|[getOtherHealthcareProvider](#pv1getotherhealthcareprovider)|Get Other HealthcareProvider (OBR.52)|
|[getPatientClass](#pv1getpatientclass)|Get Patient Class (OBR.2)|
|[getPatientType](#pv1getpatienttype)|Get Patient Type (OBR.18)|
|[getPendingLocation](#pv1getpendinglocation)|Get Pending Location (OBR.42)|
|[getPreAdmitNumber](#pv1getpreadmitnumber)|Get Pre AdmitNumber (OBR.5)|
|[getPreAdmitTestIndicator](#pv1getpreadmittestindicator)|Get Pre AdmitTestIndicator (OBR.12)|
|[getPriorPatientLocation](#pv1getpriorpatientlocation)|Get Prior PatientLocation (OBR.6)|
|[getPriorTemporaryLocation](#pv1getpriortemporarylocation)|Get Prior TemporaryLocation (OBR.43)|
|[getReAdmissionIndicator](#pv1getreadmissionindicator)|Get Re AdmissionIndicator (OBR.13)|
|[getReferringDoctor](#pv1getreferringdoctor)|Get Referring Doctor (OBR.8)|
|[getServicingFacility](#pv1getservicingfacility)|Get Servicing Facility (OBR.39)|
|[getTemporaryLocation](#pv1gettemporarylocation)|Get Temporary Location (OBR.11)|
|[getTotalAdjustments](#pv1gettotaladjustments)|Get Total Adjustments (OBR.48)|
|[getTotalCharges](#pv1gettotalcharges)|Get Total Charges (OBR.47)|
|[getTotalPayments](#pv1gettotalpayments)|Get Total Payments (OBR.49)|
|[getTransferToBadDebtCode](#pv1gettransfertobaddebtcode)|Get Transfer ToBadDebtCode (OBR.29)|
|[getTransferToBadDebtDate](#pv1gettransfertobaddebtdate)|Get Transfer ToBadDebtDate (OBR.30)|
|[getVipIndicator](#pv1getvipindicator)|Get Vip Indicator (OBR.16)|
|[getVisitIndicator](#pv1getvisitindicator)|Get Visit Indicator (OBR.51)|
|[getVisitNumber](#pv1getvisitnumber)|Get Visit Number (OBR.19)|
|[resetIndex](#pv1resetindex)|Reset index of this segment|
|[setAccountStatus](#pv1setaccountstatus)|Set Account Status (OBR.41)|
|[setAdmissionType](#pv1setadmissiontype)|Set Admission Type (OBR.4)|
|[setAdmitDateTime](#pv1setadmitdatetime)|Set Admit DateTime (OBR.44)|
|[setAdmitSource](#pv1setadmitsource)|Set Admit Source (OBR.14)|
|[setAdmittingDoctor](#pv1setadmittingdoctor)|Set Admitting Doctor (OBR.17)|
|[setAlternateVisitID](#pv1setalternatevisitid)|Set Alternate VisitID (OBR.50)|
|[setAmbulatoryStatus](#pv1setambulatorystatus)|Set Ambulatory Status (OBR.15)|
|[setAssignedPatientLocation](#pv1setassignedpatientlocation)|Set Assigned PatientLocation (OBR.3)|
|[setAttendingDoctor](#pv1setattendingdoctor)|Set Attending Doctor (OBR.7)|
|[setBadDebtAgencyCode](#pv1setbaddebtagencycode)|Set Bad DebtAgencyCode (OBR.31)|
|[setBadDebtRecoveryAmount](#pv1setbaddebtrecoveryamount)|Set Bad DebtRecoveryAmount (OBR.33)|
|[setBadDebtTransferAmount](#pv1setbaddebttransferamount)|Set Bad DebtTransferAmount (OBR.32)|
|[setBedStatus](#pv1setbedstatus)|Set Bed Status (OBR.40)|
|[setChargePriceIndicator](#pv1setchargepriceindicator)|Set Charge PriceIndicator (OBR.21)|
|[setConsultingDoctor](#pv1setconsultingdoctor)|Set Consulting Doctor (OBR.9)|
|[setContractAmount](#pv1setcontractamount)|Set Contract Amount (OBR.26)|
|[setContractCode](#pv1setcontractcode)|Set Contract Code (OBR.24)|
|[setContractEffectiveDate](#pv1setcontracteffectivedate)|Set Contract EffectiveDate (OBR.25)|
|[setContractPeriod](#pv1setcontractperiod)|Set Contract Period (OBR.27)|
|[setCourtesyCode](#pv1setcourtesycode)|Set Courtesy Code (OBR.22)|
|[setCreditRating](#pv1setcreditrating)|Set Credit Rating (OBR.23)|
|[setCurrentPatientBalance](#pv1setcurrentpatientbalance)|Set Current PatientBalance (OBR.46)|
|[setDeleteAccountDate](#pv1setdeleteaccountdate)|Set Delete AccountDate (OBR.35)|
|[setDeleteAccountIndicator](#pv1setdeleteaccountindicator)|Set Delete AccountIndicator (OBR.34)|
|[setDietType](#pv1setdiettype)|Set Diet Type (OBR.38)|
|[setDischargeDateTime](#pv1setdischargedatetime)|Set Discharge DateTime (OBR.45)|
|[setDischargeDisposition](#pv1setdischargedisposition)|Set Discharge Disposition (OBR.36)|
|[setDischargedToLocation](#pv1setdischargedtolocation)|Set Discharged ToLocation (OBR.37)|
|[setFinancialClass](#pv1setfinancialclass)|Set Financial Class (OBR.20)|
|[setHospitalService](#pv1sethospitalservice)|Set Hospital Service (OBR.10)|
|[setID](#pv1setid)||
|[setInterestCode](#pv1setinterestcode)|Set Interest Code (OBR.28)|
|[setOtherHealthcareProvider](#pv1setotherhealthcareprovider)|Set Other HealthcareProvider (OBR.52)|
|[setPatientClass](#pv1setpatientclass)|Set Patient Class (OBR.2)|
|[setPatientType](#pv1setpatienttype)|Set Patient Type (OBR.18)|
|[setPendingLocation](#pv1setpendinglocation)|Set Pending Location (OBR.42)|
|[setPreAdmitNumber](#pv1setpreadmitnumber)|Set Pre AdmitNumber (OBR.5)|
|[setPreAdmitTestIndicator](#pv1setpreadmittestindicator)|Set Pre AdmitTestIndicator (OBR.12)|
|[setPriorPatientLocation](#pv1setpriorpatientlocation)|Set Prior PatientLocation (OBR.6)|
|[setPriorTemporaryLocation](#pv1setpriortemporarylocation)|Set Prior TemporaryLocation (OBR.43)|
|[setReAdmissionIndicator](#pv1setreadmissionindicator)|Set Re AdmissionIndicator (OBR.13)|
|[setReferringDoctor](#pv1setreferringdoctor)|Set Referring Doctor (OBR.8)|
|[setServicingFacility](#pv1setservicingfacility)|Set Servicing Facility (OBR.39)|
|[setTemporaryLocation](#pv1settemporarylocation)|Set Temporary Location (OBR.11)|
|[setTotalAdjustments](#pv1settotaladjustments)|Set Total Adjustments (OBR.48)|
|[setTotalCharges](#pv1settotalcharges)|Set Total Charges (OBR.47)|
|[setTotalPayments](#pv1settotalpayments)|Set Total Payments (OBR.49)|
|[setTransferToBadDebtCode](#pv1settransfertobaddebtcode)|Set Transfer ToBadDebtCode (OBR.29)|
|[setTransferToBadDebtDate](#pv1settransfertobaddebtdate)|Set Transfer ToBadDebtDate (OBR.30)|
|[setVipIndicator](#pv1setvipindicator)|Set Vip Indicator (OBR.16)|
|[setVisitIndicator](#pv1setvisitindicator)|Set Visit Indicator (OBR.51)|
|[setVisitNumber](#pv1setvisitnumber)|Set Visit Number (OBR.19)|

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
public getAccountStatus (int $position)
```

Get Account Status (OBR.41) 

 

**Parameters**

* `(int) $position`
: Defaults to 41  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAdmissionType  

**Description**

```php
public getAdmissionType (int $position)
```

Get Admission Type (OBR.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAdmitDateTime  

**Description**

```php
public getAdmitDateTime (int $position)
```

Get Admit DateTime (OBR.44) 

 

**Parameters**

* `(int) $position`
: Defaults to 44  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAdmitSource  

**Description**

```php
public getAdmitSource (int $position)
```

Get Admit Source (OBR.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAdmittingDoctor  

**Description**

```php
public getAdmittingDoctor (int $position)
```

Get Admitting Doctor (OBR.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAlternateVisitID  

**Description**

```php
public getAlternateVisitID (int $position)
```

Get Alternate VisitID (OBR.50) 

 

**Parameters**

* `(int) $position`
: Defaults to 50  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAmbulatoryStatus  

**Description**

```php
public getAmbulatoryStatus (int $position)
```

Get Ambulatory Status (OBR.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAssignedPatientLocation  

**Description**

```php
public getAssignedPatientLocation (int $position)
```

Get Assigned PatientLocation (OBR.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getAttendingDoctor  

**Description**

```php
public getAttendingDoctor (int $position)
```

Get Attending Doctor (OBR.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getBadDebtAgencyCode  

**Description**

```php
public getBadDebtAgencyCode (int $position)
```

Get Bad DebtAgencyCode (OBR.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getBadDebtRecoveryAmount  

**Description**

```php
public getBadDebtRecoveryAmount (int $position)
```

Get Bad DebtRecoveryAmount (OBR.33) 

 

**Parameters**

* `(int) $position`
: Defaults to 33  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getBadDebtTransferAmount  

**Description**

```php
public getBadDebtTransferAmount (int $position)
```

Get Bad DebtTransferAmount (OBR.32) 

 

**Parameters**

* `(int) $position`
: Defaults to 32  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getBedStatus  

**Description**

```php
public getBedStatus (int $position)
```

Get Bed Status (OBR.40) 

 

**Parameters**

* `(int) $position`
: Defaults to 40  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getChargePriceIndicator  

**Description**

```php
public getChargePriceIndicator (int $position)
```

Get Charge PriceIndicator (OBR.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getConsultingDoctor  

**Description**

```php
public getConsultingDoctor (int $position)
```

Get Consulting Doctor (OBR.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getContractAmount  

**Description**

```php
public getContractAmount (int $position)
```

Get Contract Amount (OBR.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getContractCode  

**Description**

```php
public getContractCode (int $position)
```

Get Contract Code (OBR.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getContractEffectiveDate  

**Description**

```php
public getContractEffectiveDate (int $position)
```

Get Contract EffectiveDate (OBR.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getContractPeriod  

**Description**

```php
public getContractPeriod (int $position)
```

Get Contract Period (OBR.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getCourtesyCode  

**Description**

```php
public getCourtesyCode (int $position)
```

Get Courtesy Code (OBR.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getCreditRating  

**Description**

```php
public getCreditRating (int $position)
```

Get Credit Rating (OBR.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getCurrentPatientBalance  

**Description**

```php
public getCurrentPatientBalance (int $position)
```

Get Current PatientBalance (OBR.46) 

 

**Parameters**

* `(int) $position`
: Defaults to 46  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getDeleteAccountDate  

**Description**

```php
public getDeleteAccountDate (int $position)
```

Get Delete AccountDate (OBR.35) 

 

**Parameters**

* `(int) $position`
: Defaults to 35  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getDeleteAccountIndicator  

**Description**

```php
public getDeleteAccountIndicator (int $position)
```

Get Delete AccountIndicator (OBR.34) 

 

**Parameters**

* `(int) $position`
: Defaults to 34  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getDietType  

**Description**

```php
public getDietType (int $position)
```

Get Diet Type (OBR.38) 

 

**Parameters**

* `(int) $position`
: Defaults to 38  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getDischargeDateTime  

**Description**

```php
public getDischargeDateTime (int $position)
```

Get Discharge DateTime (OBR.45) 

 

**Parameters**

* `(int) $position`
: Defaults to 45  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getDischargeDisposition  

**Description**

```php
public getDischargeDisposition (int $position)
```

Get Discharge Disposition (OBR.36) 

 

**Parameters**

* `(int) $position`
: Defaults to 36  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getDischargedToLocation  

**Description**

```php
public getDischargedToLocation (int $position)
```

Get Discharged ToLocation (OBR.37) 

 

**Parameters**

* `(int) $position`
: Defaults to 37  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getFinancialClass  

**Description**

```php
public getFinancialClass (int $position)
```

Get Financial Class (OBR.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getHospitalService  

**Description**

```php
public getHospitalService (int $position)
```

Get Hospital Service (OBR.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getID  

**Description**

```php
public getID (int $position)
```

Get ID (OBR.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getInterestCode  

**Description**

```php
public getInterestCode (int $position)
```

Get Interest Code (OBR.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getOtherHealthcareProvider  

**Description**

```php
public getOtherHealthcareProvider (int $position)
```

Get Other HealthcareProvider (OBR.52) 

 

**Parameters**

* `(int) $position`
: Defaults to 52  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getPatientClass  

**Description**

```php
public getPatientClass (int $position)
```

Get Patient Class (OBR.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getPatientType  

**Description**

```php
public getPatientType (int $position)
```

Get Patient Type (OBR.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getPendingLocation  

**Description**

```php
public getPendingLocation (int $position)
```

Get Pending Location (OBR.42) 

 

**Parameters**

* `(int) $position`
: Defaults to 42  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getPreAdmitNumber  

**Description**

```php
public getPreAdmitNumber (int $position)
```

Get Pre AdmitNumber (OBR.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getPreAdmitTestIndicator  

**Description**

```php
public getPreAdmitTestIndicator (int $position)
```

Get Pre AdmitTestIndicator (OBR.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getPriorPatientLocation  

**Description**

```php
public getPriorPatientLocation (int $position)
```

Get Prior PatientLocation (OBR.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getPriorTemporaryLocation  

**Description**

```php
public getPriorTemporaryLocation (int $position)
```

Get Prior TemporaryLocation (OBR.43) 

 

**Parameters**

* `(int) $position`
: Defaults to 43  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getReAdmissionIndicator  

**Description**

```php
public getReAdmissionIndicator (int $position)
```

Get Re AdmissionIndicator (OBR.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getReferringDoctor  

**Description**

```php
public getReferringDoctor (int $position)
```

Get Referring Doctor (OBR.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getServicingFacility  

**Description**

```php
public getServicingFacility (int $position)
```

Get Servicing Facility (OBR.39) 

 

**Parameters**

* `(int) $position`
: Defaults to 39  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getTemporaryLocation  

**Description**

```php
public getTemporaryLocation (int $position)
```

Get Temporary Location (OBR.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getTotalAdjustments  

**Description**

```php
public getTotalAdjustments (int $position)
```

Get Total Adjustments (OBR.48) 

 

**Parameters**

* `(int) $position`
: Defaults to 48  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getTotalCharges  

**Description**

```php
public getTotalCharges (int $position)
```

Get Total Charges (OBR.47) 

 

**Parameters**

* `(int) $position`
: Defaults to 47  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getTotalPayments  

**Description**

```php
public getTotalPayments (int $position)
```

Get Total Payments (OBR.49) 

 

**Parameters**

* `(int) $position`
: Defaults to 49  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getTransferToBadDebtCode  

**Description**

```php
public getTransferToBadDebtCode (int $position)
```

Get Transfer ToBadDebtCode (OBR.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getTransferToBadDebtDate  

**Description**

```php
public getTransferToBadDebtDate (int $position)
```

Get Transfer ToBadDebtDate (OBR.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getVipIndicator  

**Description**

```php
public getVipIndicator (int $position)
```

Get Vip Indicator (OBR.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getVisitIndicator  

**Description**

```php
public getVisitIndicator (int $position)
```

Get Visit Indicator (OBR.51) 

 

**Parameters**

* `(int) $position`
: Defaults to 51  

**Return Values**

`array|string|int|null`




<hr />


### PV1::getVisitNumber  

**Description**

```php
public getVisitNumber (int $position)
```

Get Visit Number (OBR.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### PV1::resetIndex  

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


### PV1::setAccountStatus  

**Description**

```php
public setAccountStatus (string|int|array|null $value, int $position)
```

Set Account Status (OBR.41) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 41  

**Return Values**

`bool`




<hr />


### PV1::setAdmissionType  

**Description**

```php
public setAdmissionType (string|int|array|null $value, int $position)
```

Set Admission Type (OBR.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### PV1::setAdmitDateTime  

**Description**

```php
public setAdmitDateTime (string|int|array|null $value, int $position)
```

Set Admit DateTime (OBR.44) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 44  

**Return Values**

`bool`




<hr />


### PV1::setAdmitSource  

**Description**

```php
public setAdmitSource (string|int|array|null $value, int $position)
```

Set Admit Source (OBR.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### PV1::setAdmittingDoctor  

**Description**

```php
public setAdmittingDoctor (string|int|array|null $value, int $position)
```

Set Admitting Doctor (OBR.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### PV1::setAlternateVisitID  

**Description**

```php
public setAlternateVisitID (string|int|array|null $value, int $position)
```

Set Alternate VisitID (OBR.50) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 50  

**Return Values**

`bool`




<hr />


### PV1::setAmbulatoryStatus  

**Description**

```php
public setAmbulatoryStatus (string|int|array|null $value, int $position)
```

Set Ambulatory Status (OBR.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### PV1::setAssignedPatientLocation  

**Description**

```php
public setAssignedPatientLocation (string|int|array|null $value, int $position)
```

Set Assigned PatientLocation (OBR.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### PV1::setAttendingDoctor  

**Description**

```php
public setAttendingDoctor (string|int|array|null $value, int $position)
```

Set Attending Doctor (OBR.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### PV1::setBadDebtAgencyCode  

**Description**

```php
public setBadDebtAgencyCode (string|int|array|null $value, int $position)
```

Set Bad DebtAgencyCode (OBR.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### PV1::setBadDebtRecoveryAmount  

**Description**

```php
public setBadDebtRecoveryAmount (string|int|array|null $value, int $position)
```

Set Bad DebtRecoveryAmount (OBR.33) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 33  

**Return Values**

`bool`




<hr />


### PV1::setBadDebtTransferAmount  

**Description**

```php
public setBadDebtTransferAmount (string|int|array|null $value, int $position)
```

Set Bad DebtTransferAmount (OBR.32) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 32  

**Return Values**

`bool`




<hr />


### PV1::setBedStatus  

**Description**

```php
public setBedStatus (string|int|array|null $value, int $position)
```

Set Bed Status (OBR.40) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 40  

**Return Values**

`bool`




<hr />


### PV1::setChargePriceIndicator  

**Description**

```php
public setChargePriceIndicator (string|int|array|null $value, int $position)
```

Set Charge PriceIndicator (OBR.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### PV1::setConsultingDoctor  

**Description**

```php
public setConsultingDoctor (string|int|array|null $value, int $position)
```

Set Consulting Doctor (OBR.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### PV1::setContractAmount  

**Description**

```php
public setContractAmount (string|int|array|null $value, int $position)
```

Set Contract Amount (OBR.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### PV1::setContractCode  

**Description**

```php
public setContractCode (string|int|array|null $value, int $position)
```

Set Contract Code (OBR.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### PV1::setContractEffectiveDate  

**Description**

```php
public setContractEffectiveDate (string|int|array|null $value, int $position)
```

Set Contract EffectiveDate (OBR.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### PV1::setContractPeriod  

**Description**

```php
public setContractPeriod (string|int|array|null $value, int $position)
```

Set Contract Period (OBR.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### PV1::setCourtesyCode  

**Description**

```php
public setCourtesyCode (string|int|array|null $value, int $position)
```

Set Courtesy Code (OBR.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### PV1::setCreditRating  

**Description**

```php
public setCreditRating (string|int|array|null $value, int $position)
```

Set Credit Rating (OBR.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### PV1::setCurrentPatientBalance  

**Description**

```php
public setCurrentPatientBalance (string|int|array|null $value, int $position)
```

Set Current PatientBalance (OBR.46) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 46  

**Return Values**

`bool`




<hr />


### PV1::setDeleteAccountDate  

**Description**

```php
public setDeleteAccountDate (string|int|array|null $value, int $position)
```

Set Delete AccountDate (OBR.35) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 35  

**Return Values**

`bool`




<hr />


### PV1::setDeleteAccountIndicator  

**Description**

```php
public setDeleteAccountIndicator (string|int|array|null $value, int $position)
```

Set Delete AccountIndicator (OBR.34) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 34  

**Return Values**

`bool`




<hr />


### PV1::setDietType  

**Description**

```php
public setDietType (string|int|array|null $value, int $position)
```

Set Diet Type (OBR.38) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 38  

**Return Values**

`bool`




<hr />


### PV1::setDischargeDateTime  

**Description**

```php
public setDischargeDateTime (string|int|array|null $value, int $position)
```

Set Discharge DateTime (OBR.45) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 45  

**Return Values**

`bool`




<hr />


### PV1::setDischargeDisposition  

**Description**

```php
public setDischargeDisposition (string|int|array|null $value, int $position)
```

Set Discharge Disposition (OBR.36) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 36  

**Return Values**

`bool`




<hr />


### PV1::setDischargedToLocation  

**Description**

```php
public setDischargedToLocation (string|int|array|null $value, int $position)
```

Set Discharged ToLocation (OBR.37) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 37  

**Return Values**

`bool`




<hr />


### PV1::setFinancialClass  

**Description**

```php
public setFinancialClass (string|int|array|null $value, int $position)
```

Set Financial Class (OBR.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### PV1::setHospitalService  

**Description**

```php
public setHospitalService (string|int|array|null $value, int $position)
```

Set Hospital Service (OBR.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




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
public setInterestCode (string|int|array|null $value, int $position)
```

Set Interest Code (OBR.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### PV1::setOtherHealthcareProvider  

**Description**

```php
public setOtherHealthcareProvider (string|int|array|null $value, int $position)
```

Set Other HealthcareProvider (OBR.52) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 52  

**Return Values**

`bool`




<hr />


### PV1::setPatientClass  

**Description**

```php
public setPatientClass (string|int|array|null $value, int $position)
```

Set Patient Class (OBR.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### PV1::setPatientType  

**Description**

```php
public setPatientType (string|int|array|null $value, int $position)
```

Set Patient Type (OBR.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### PV1::setPendingLocation  

**Description**

```php
public setPendingLocation (string|int|array|null $value, int $position)
```

Set Pending Location (OBR.42) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 42  

**Return Values**

`bool`




<hr />


### PV1::setPreAdmitNumber  

**Description**

```php
public setPreAdmitNumber (string|int|array|null $value, int $position)
```

Set Pre AdmitNumber (OBR.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### PV1::setPreAdmitTestIndicator  

**Description**

```php
public setPreAdmitTestIndicator (string|int|array|null $value, int $position)
```

Set Pre AdmitTestIndicator (OBR.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### PV1::setPriorPatientLocation  

**Description**

```php
public setPriorPatientLocation (string|int|array|null $value, int $position)
```

Set Prior PatientLocation (OBR.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### PV1::setPriorTemporaryLocation  

**Description**

```php
public setPriorTemporaryLocation (string|int|array|null $value, int $position)
```

Set Prior TemporaryLocation (OBR.43) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 43  

**Return Values**

`bool`




<hr />


### PV1::setReAdmissionIndicator  

**Description**

```php
public setReAdmissionIndicator (string|int|array|null $value, int $position)
```

Set Re AdmissionIndicator (OBR.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### PV1::setReferringDoctor  

**Description**

```php
public setReferringDoctor (string|int|array|null $value, int $position)
```

Set Referring Doctor (OBR.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### PV1::setServicingFacility  

**Description**

```php
public setServicingFacility (string|int|array|null $value, int $position)
```

Set Servicing Facility (OBR.39) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 39  

**Return Values**

`bool`




<hr />


### PV1::setTemporaryLocation  

**Description**

```php
public setTemporaryLocation (string|int|array|null $value, int $position)
```

Set Temporary Location (OBR.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### PV1::setTotalAdjustments  

**Description**

```php
public setTotalAdjustments (string|int|array|null $value, int $position)
```

Set Total Adjustments (OBR.48) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 48  

**Return Values**

`bool`




<hr />


### PV1::setTotalCharges  

**Description**

```php
public setTotalCharges (string|int|array|null $value, int $position)
```

Set Total Charges (OBR.47) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 47  

**Return Values**

`bool`




<hr />


### PV1::setTotalPayments  

**Description**

```php
public setTotalPayments (string|int|array|null $value, int $position)
```

Set Total Payments (OBR.49) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 49  

**Return Values**

`bool`




<hr />


### PV1::setTransferToBadDebtCode  

**Description**

```php
public setTransferToBadDebtCode (string|int|array|null $value, int $position)
```

Set Transfer ToBadDebtCode (OBR.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### PV1::setTransferToBadDebtDate  

**Description**

```php
public setTransferToBadDebtDate (string|int|array|null $value, int $position)
```

Set Transfer ToBadDebtDate (OBR.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### PV1::setVipIndicator  

**Description**

```php
public setVipIndicator (string|int|array|null $value, int $position)
```

Set Vip Indicator (OBR.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### PV1::setVisitIndicator  

**Description**

```php
public setVisitIndicator (string|int|array|null $value, int $position)
```

Set Visit Indicator (OBR.51) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 51  

**Return Values**

`bool`




<hr />


### PV1::setVisitNumber  

**Description**

```php
public setVisitNumber (string|int|array|null $value, int $position)
```

Set Visit Number (OBR.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />

