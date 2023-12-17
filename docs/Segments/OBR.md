# Aranyasen\HL7\Segments\OBR  

OBR segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obr-segment



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#obr__destruct)||
|[getAssistantResultInterpreter](#obrgetassistantresultinterpreter)|Get Assistant ResultInterpreter (OBR.33)|
|[getChargetoPractice](#obrgetchargetopractice)|Get Chargeto Practice (OBR.23)|
|[getCollectionVolume](#obrgetcollectionvolume)|Get Collection Volume (OBR.9)|
|[getCollectorIdentifier](#obrgetcollectoridentifier)|Get Collector Identifier (OBR.10)|
|[getCollectorsComment](#obrgetcollectorscomment)|Get Collectors Comment (OBR.39)|
|[getDangerCode](#obrgetdangercode)|Get Danger Code (OBR.12)|
|[getDiagnosticServSectID](#obrgetdiagnosticservsectid)|Get Diagnostic ServSectID (OBR.24)|
|[getEscortRequired](#obrgetescortrequired)|Get Escort Required (OBR.42)|
|[getFillerField1](#obrgetfillerfield1)|Get Filler field 1 (OBR.20)|
|[getFillerField2](#obrgetfillerfield2)|Get Filler field 2 (OBR.21)|
|[getFillerOrderNumber](#obrgetfillerordernumber)|Get Filler OrderNumber (OBR.3)|
|[getID](#obrgetid)|Get ID (OBR.1)|
|[getNumberofSampleContainers](#obrgetnumberofsamplecontainers)|Get Numberof SampleContainers (OBR.37)|
|[getObservationDateTime](#obrgetobservationdatetime)|Get Observation DateTime (OBR.7)|
|[getObservationEndDateTime](#obrgetobservationenddatetime)|Get Observation EndDateTime (OBR.8)|
|[getOrderCallbackPhoneNumber](#obrgetordercallbackphonenumber)|Get Order CallbackPhoneNumber (OBR.17)|
|[getOrderingProvider](#obrgetorderingprovider)|Get Ordering Provider (OBR.16)|
|[getParent](#obrgetparent)|Get Parent (OBR.29)|
|[getParentResult](#obrgetparentresult)|Get Parent Result (OBR.26)|
|[getPlacerOrderNumber](#obrgetplacerordernumber)|Get Placer OrderNumber (OBR.2)|
|[getPlacerfield1](#obrgetplacerfield1)|Get Placer field 1 (OBR.18)|
|[getPlacerfield2](#obrgetplacerfield2)|Get Placer field 2 (OBR.19)|
|[getPlannedPatientTransportComment](#obrgetplannedpatienttransportcomment)|Get Planned PatientTransportComment (OBR.43)|
|[getPrincipalResultInterpreter](#obrgetprincipalresultinterpreter)|Get Principal ResultInterpreter (OBR.32)|
|[getPriority](#obrgetpriority)|Get Priority (OBR.5)|
|[getQuantityTiming](#obrgetquantitytiming)|Get Quantity Timing (OBR.27)|
|[getReasonforStudy](#obrgetreasonforstudy)|Get Reasonfor Study (OBR.31)|
|[getRelevantClinicalInfo](#obrgetrelevantclinicalinfo)|Get Relevant ClinicalInfo (OBR.13)|
|[getRequestedDatetime](#obrgetrequesteddatetime)|Get Requested Datetime (OBR.6)|
|[getResultCopiesTo](#obrgetresultcopiesto)|Get Result CopiesTo (OBR.28)|
|[getResultStatus](#obrgetresultstatus)|Get Result Status (OBR.25)|
|[getResultsRptStatusChngDateTime](#obrgetresultsrptstatuschngdatetime)|Get Results RptStatusChngDateTime (OBR.22)|
|[getScheduledDateTime](#obrgetscheduleddatetime)|Get Scheduled DateTime (OBR.36)|
|[getSpecimenActionCode](#obrgetspecimenactioncode)|Get Specimen ActionCode (OBR.11)|
|[getSpecimenReceivedDateTime](#obrgetspecimenreceiveddatetime)|Get Specimen ReceivedDateTime (OBR.14)|
|[getSpecimenSource](#obrgetspecimensource)|Get Specimen Source (OBR.15)|
|[getTechnician](#obrgettechnician)|Get Technician (OBR.34)|
|[getTranscriptionist](#obrgettranscriptionist)|Get Transcriptionist (OBR.35)|
|[getTransportArranged](#obrgettransportarranged)|Get Transport Arranged (OBR.41)|
|[getTransportArrangementResponsibility](#obrgettransportarrangementresponsibility)|Get Transport ArrangementResponsibility (OBR.40)|
|[getTransportLogisticsofCollectedSample](#obrgettransportlogisticsofcollectedsample)|Get Transport LogisticsofCollectedSample (OBR.38)|
|[getTransportationMode](#obrgettransportationmode)|Get Transportation Mode (OBR.30)|
|[getUniversalServiceID](#obrgetuniversalserviceid)|Get Universal ServiceID (OBR.4)|
|[resetIndex](#obrresetindex)|Reset index of this segment|
|[setAssistantResultInterpreter](#obrsetassistantresultinterpreter)|Set Assistant Result Interpreter (OBR.33)|
|[setChargetoPractice](#obrsetchargetopractice)|Set Chargeto Practice (OBR.23)|
|[setCollectionVolume](#obrsetcollectionvolume)|Set Collection Volume (OBR.9)|
|[setCollectorIdentifier](#obrsetcollectoridentifier)|Set Collector Identifier (OBR.10)|
|[setCollectorsComment](#obrsetcollectorscomment)|Set Collectors Comment (OBR.39)|
|[setDangerCode](#obrsetdangercode)|Set Danger Code (OBR.12)|
|[setDiagnosticServSectID](#obrsetdiagnosticservsectid)|Set Diagnostic Serv Sect ID (OBR.24)|
|[setEscortRequired](#obrsetescortrequired)|Set Escort Required (OBR.42)|
|[setFillerField1](#obrsetfillerfield1)|Set Filler field 1 (OBR.20)|
|[setFillerField2](#obrsetfillerfield2)|Set Filler field 2 (OBR.21)|
|[setFillerOrderNumber](#obrsetfillerordernumber)|Set Filler Order Number (OBR.3)|
|[setID](#obrsetid)|Set ID (OBR.1)|
|[setNumberofSampleContainers](#obrsetnumberofsamplecontainers)|Set Numberof Sample Containers (OBR.37)|
|[setObservationDateTime](#obrsetobservationdatetime)|Set Observation Date Time (OBR.7)|
|[setObservationEndDateTime](#obrsetobservationenddatetime)|Set Observation End Date Time (OBR.8)|
|[setOrderCallbackPhoneNumber](#obrsetordercallbackphonenumber)|Set Order Callback Phone Number (OBR.17)|
|[setOrderingProvider](#obrsetorderingprovider)|Set Ordering Provider (OBR.16)|
|[setParent](#obrsetparent)|Set Parent (OBR.29)|
|[setParentResult](#obrsetparentresult)|Set Parent Result (OBR.26)|
|[setPlacerOrderNumber](#obrsetplacerordernumber)|Set Placer Order Number (OBR.2)|
|[setPlacerfield1](#obrsetplacerfield1)|Set Placer field 1 (OBR.18)|
|[setPlacerfield2](#obrsetplacerfield2)|Set Placer field 1 (OBR.19)|
|[setPlannedPatientTransportComment](#obrsetplannedpatienttransportcomment)|Set Planned Patient Transport Comment (OBR.43)|
|[setPrincipalResultInterpreter](#obrsetprincipalresultinterpreter)|Set Principal Result Interpreter (OBR.32)|
|[setPriority](#obrsetpriority)|Set Priority (OBR.5)|
|[setQuantityTiming](#obrsetquantitytiming)|Set Quantity Timing (OBR.27)|
|[setReasonforStudy](#obrsetreasonforstudy)|Set Reasonfor Study (OBR.31)|
|[setRelevantClinicalInfo](#obrsetrelevantclinicalinfo)|Set Relevant Clinical Info (OBR.13)|
|[setRequestedDatetime](#obrsetrequesteddatetime)|Set Requested Datetime (OBR.6)|
|[setResultCopiesTo](#obrsetresultcopiesto)|Set Result Copies To (OBR.28)|
|[setResultStatus](#obrsetresultstatus)|Set Result Status (OBR.25)|
|[setResultsRptStatusChngDateTime](#obrsetresultsrptstatuschngdatetime)|Set Results Rpt Status Chng Date Time (OBR.22)|
|[setScheduledDateTime](#obrsetscheduleddatetime)|Set Scheduled Date Time (OBR.36)|
|[setSpecimenActionCode](#obrsetspecimenactioncode)|Set Specimen Action Code (OBR.11)|
|[setSpecimenReceivedDateTime](#obrsetspecimenreceiveddatetime)|Set Specimen Received Date Time (OBR.14)|
|[setSpecimenSource](#obrsetspecimensource)|Set Specimen Source (OBR.15)|
|[setTechnician](#obrsettechnician)|Set Technician (OBR.34)|
|[setTranscriptionist](#obrsettranscriptionist)|Set Transcriptionist (OBR.35)|
|[setTransportArranged](#obrsettransportarranged)|Set Transport Arranged (OBR.41)|
|[setTransportArrangementResponsibility](#obrsettransportarrangementresponsibility)|Set Transport Arrangement Responsibility (OBR.40)|
|[setTransportLogisticsofCollectedSample](#obrsettransportlogisticsofcollectedsample)|Set Transport Logisticsof Collected Sample (OBR.38)|
|[setTransportationMode](#obrsettransportationmode)|Set Transportation Mode (OBR.30)|
|[setUniversalServiceID](#obrsetuniversalserviceid)|Set Universal Service ID (OBR.4)|

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



### OBR::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### OBR::getAssistantResultInterpreter  

**Description**

```php
public getAssistantResultInterpreter (int $position)
```

Get Assistant ResultInterpreter (OBR.33) 

 

**Parameters**

* `(int) $position`
: Defaults to 33  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getChargetoPractice  

**Description**

```php
public getChargetoPractice (int $position)
```

Get Chargeto Practice (OBR.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getCollectionVolume  

**Description**

```php
public getCollectionVolume (int $position)
```

Get Collection Volume (OBR.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getCollectorIdentifier  

**Description**

```php
public getCollectorIdentifier (int $position)
```

Get Collector Identifier (OBR.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getCollectorsComment  

**Description**

```php
public getCollectorsComment (int $position)
```

Get Collectors Comment (OBR.39) 

 

**Parameters**

* `(int) $position`
: Defaults to 39  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getDangerCode  

**Description**

```php
public getDangerCode (int $position)
```

Get Danger Code (OBR.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getDiagnosticServSectID  

**Description**

```php
public getDiagnosticServSectID (int $position)
```

Get Diagnostic ServSectID (OBR.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getEscortRequired  

**Description**

```php
public getEscortRequired (int $position)
```

Get Escort Required (OBR.42) 

 

**Parameters**

* `(int) $position`
: Defaults to 42  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getFillerField1  

**Description**

```php
public getFillerField1 (int $position)
```

Get Filler field 1 (OBR.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getFillerField2  

**Description**

```php
public getFillerField2 (int $position)
```

Get Filler field 2 (OBR.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getFillerOrderNumber  

**Description**

```php
public getFillerOrderNumber (int $position)
```

Get Filler OrderNumber (OBR.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getID  

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


### OBR::getNumberofSampleContainers  

**Description**

```php
public getNumberofSampleContainers (int $position)
```

Get Numberof SampleContainers (OBR.37) 

 

**Parameters**

* `(int) $position`
: Defaults to 37  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getObservationDateTime  

**Description**

```php
public getObservationDateTime (int $position)
```

Get Observation DateTime (OBR.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getObservationEndDateTime  

**Description**

```php
public getObservationEndDateTime (int $position)
```

Get Observation EndDateTime (OBR.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getOrderCallbackPhoneNumber  

**Description**

```php
public getOrderCallbackPhoneNumber (int $position)
```

Get Order CallbackPhoneNumber (OBR.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getOrderingProvider  

**Description**

```php
public getOrderingProvider (int $position)
```

Get Ordering Provider (OBR.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getParent  

**Description**

```php
public getParent (int $position)
```

Get Parent (OBR.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getParentResult  

**Description**

```php
public getParentResult (int $position)
```

Get Parent Result (OBR.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getPlacerOrderNumber  

**Description**

```php
public getPlacerOrderNumber (int $position)
```

Get Placer OrderNumber (OBR.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getPlacerfield1  

**Description**

```php
public getPlacerfield1 (int $position)
```

Get Placer field 1 (OBR.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getPlacerfield2  

**Description**

```php
public getPlacerfield2 (int $position)
```

Get Placer field 2 (OBR.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getPlannedPatientTransportComment  

**Description**

```php
public getPlannedPatientTransportComment (int $position)
```

Get Planned PatientTransportComment (OBR.43) 

 

**Parameters**

* `(int) $position`
: Defaults to 43  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getPrincipalResultInterpreter  

**Description**

```php
public getPrincipalResultInterpreter (int $position)
```

Get Principal ResultInterpreter (OBR.32) 

 

**Parameters**

* `(int) $position`
: Defaults to 32  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getPriority  

**Description**

```php
public getPriority (int $position)
```

Get Priority (OBR.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getQuantityTiming  

**Description**

```php
public getQuantityTiming (int $position)
```

Get Quantity Timing (OBR.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getReasonforStudy  

**Description**

```php
public getReasonforStudy (int $position)
```

Get Reasonfor Study (OBR.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getRelevantClinicalInfo  

**Description**

```php
public getRelevantClinicalInfo (int $position)
```

Get Relevant ClinicalInfo (OBR.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getRequestedDatetime  

**Description**

```php
public getRequestedDatetime (int $position)
```

Get Requested Datetime (OBR.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getResultCopiesTo  

**Description**

```php
public getResultCopiesTo (int $position)
```

Get Result CopiesTo (OBR.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getResultStatus  

**Description**

```php
public getResultStatus (int $position)
```

Get Result Status (OBR.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getResultsRptStatusChngDateTime  

**Description**

```php
public getResultsRptStatusChngDateTime (int $position)
```

Get Results RptStatusChngDateTime (OBR.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getScheduledDateTime  

**Description**

```php
public getScheduledDateTime (int $position)
```

Get Scheduled DateTime (OBR.36) 

 

**Parameters**

* `(int) $position`
: Defaults to 36  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getSpecimenActionCode  

**Description**

```php
public getSpecimenActionCode (int $position)
```

Get Specimen ActionCode (OBR.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getSpecimenReceivedDateTime  

**Description**

```php
public getSpecimenReceivedDateTime (int $position)
```

Get Specimen ReceivedDateTime (OBR.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getSpecimenSource  

**Description**

```php
public getSpecimenSource (int $position)
```

Get Specimen Source (OBR.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getTechnician  

**Description**

```php
public getTechnician (int $position)
```

Get Technician (OBR.34) 

 

**Parameters**

* `(int) $position`
: Defaults to 34  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getTranscriptionist  

**Description**

```php
public getTranscriptionist (int $position)
```

Get Transcriptionist (OBR.35) 

 

**Parameters**

* `(int) $position`
: Defaults to 35  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getTransportArranged  

**Description**

```php
public getTransportArranged (int $position)
```

Get Transport Arranged (OBR.41) 

 

**Parameters**

* `(int) $position`
: Defaults to 41  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getTransportArrangementResponsibility  

**Description**

```php
public getTransportArrangementResponsibility (int $position)
```

Get Transport ArrangementResponsibility (OBR.40) 

 

**Parameters**

* `(int) $position`
: Defaults to 40  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getTransportLogisticsofCollectedSample  

**Description**

```php
public getTransportLogisticsofCollectedSample (int $position)
```

Get Transport LogisticsofCollectedSample (OBR.38) 

 

**Parameters**

* `(int) $position`
: Defaults to 38  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getTransportationMode  

**Description**

```php
public getTransportationMode (int $position)
```

Get Transportation Mode (OBR.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### OBR::getUniversalServiceID  

**Description**

```php
public getUniversalServiceID (int $position)
```

Get Universal ServiceID (OBR.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### OBR::resetIndex  

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


### OBR::setAssistantResultInterpreter  

**Description**

```php
public setAssistantResultInterpreter (string|int|array|null $value, int $position)
```

Set Assistant Result Interpreter (OBR.33) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 33  

**Return Values**

`bool`




<hr />


### OBR::setChargetoPractice  

**Description**

```php
public setChargetoPractice (string|int|array|null $value, int $position)
```

Set Chargeto Practice (OBR.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### OBR::setCollectionVolume  

**Description**

```php
public setCollectionVolume (string|int|array|null $value, int $position)
```

Set Collection Volume (OBR.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### OBR::setCollectorIdentifier  

**Description**

```php
public setCollectorIdentifier (string|int|array|null $value, int $position)
```

Set Collector Identifier (OBR.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### OBR::setCollectorsComment  

**Description**

```php
public setCollectorsComment (string|int|array|null $value, int $position)
```

Set Collectors Comment (OBR.39) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 39  

**Return Values**

`bool`




<hr />


### OBR::setDangerCode  

**Description**

```php
public setDangerCode (string|int|array|null $value, int $position)
```

Set Danger Code (OBR.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### OBR::setDiagnosticServSectID  

**Description**

```php
public setDiagnosticServSectID (string|int|array|null $value, int $position)
```

Set Diagnostic Serv Sect ID (OBR.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### OBR::setEscortRequired  

**Description**

```php
public setEscortRequired (string|int|array|null $value, int $position)
```

Set Escort Required (OBR.42) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 42  

**Return Values**

`bool`




<hr />


### OBR::setFillerField1  

**Description**

```php
public setFillerField1 (string|int|array|null $value, int $position)
```

Set Filler field 1 (OBR.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### OBR::setFillerField2  

**Description**

```php
public setFillerField2 (string|int|array|null $value, int $position)
```

Set Filler field 2 (OBR.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### OBR::setFillerOrderNumber  

**Description**

```php
public setFillerOrderNumber (string|int|array|null $value, int $position)
```

Set Filler Order Number (OBR.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### OBR::setID  

**Description**

```php
public setID (int $value, int $position)
```

Set ID (OBR.1) 

 

**Parameters**

* `(int) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### OBR::setNumberofSampleContainers  

**Description**

```php
public setNumberofSampleContainers (string|int|array|null $value, int $position)
```

Set Numberof Sample Containers (OBR.37) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 37  

**Return Values**

`bool`




<hr />


### OBR::setObservationDateTime  

**Description**

```php
public setObservationDateTime (string|int|array|null $value, int $position)
```

Set Observation Date Time (OBR.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### OBR::setObservationEndDateTime  

**Description**

```php
public setObservationEndDateTime (string|int|array|null $value, int $position)
```

Set Observation End Date Time (OBR.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### OBR::setOrderCallbackPhoneNumber  

**Description**

```php
public setOrderCallbackPhoneNumber (string|int|array|null $value, int $position)
```

Set Order Callback Phone Number (OBR.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### OBR::setOrderingProvider  

**Description**

```php
public setOrderingProvider (string|int|array|null $value, int $position)
```

Set Ordering Provider (OBR.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### OBR::setParent  

**Description**

```php
public setParent (string|int|array|null $value, int $position)
```

Set Parent (OBR.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### OBR::setParentResult  

**Description**

```php
public setParentResult (string|int|array|null $value, int $position)
```

Set Parent Result (OBR.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### OBR::setPlacerOrderNumber  

**Description**

```php
public setPlacerOrderNumber (string|int|array|null $value, int $position)
```

Set Placer Order Number (OBR.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### OBR::setPlacerfield1  

**Description**

```php
public setPlacerfield1 (string|int|array|null $value, int $position)
```

Set Placer field 1 (OBR.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### OBR::setPlacerfield2  

**Description**

```php
public setPlacerfield2 (string|int|array|null $value, int $position)
```

Set Placer field 1 (OBR.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### OBR::setPlannedPatientTransportComment  

**Description**

```php
public setPlannedPatientTransportComment (string|int|array|null $value, int $position)
```

Set Planned Patient Transport Comment (OBR.43) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 43  

**Return Values**

`bool`




<hr />


### OBR::setPrincipalResultInterpreter  

**Description**

```php
public setPrincipalResultInterpreter (string|int|array|null $value, int $position)
```

Set Principal Result Interpreter (OBR.32) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 32  

**Return Values**

`bool`




<hr />


### OBR::setPriority  

**Description**

```php
public setPriority (string|int|array|null $value, int $position)
```

Set Priority (OBR.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### OBR::setQuantityTiming  

**Description**

```php
public setQuantityTiming (string|int|array|null $value, int $position)
```

Set Quantity Timing (OBR.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### OBR::setReasonforStudy  

**Description**

```php
public setReasonforStudy (string|int|array|null $value, int $position)
```

Set Reasonfor Study (OBR.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### OBR::setRelevantClinicalInfo  

**Description**

```php
public setRelevantClinicalInfo (string|int|array|null $value, int $position)
```

Set Relevant Clinical Info (OBR.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### OBR::setRequestedDatetime  

**Description**

```php
public setRequestedDatetime (string|int|array|null $value, int $position)
```

Set Requested Datetime (OBR.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### OBR::setResultCopiesTo  

**Description**

```php
public setResultCopiesTo (string|int|array|null $value, int $position)
```

Set Result Copies To (OBR.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### OBR::setResultStatus  

**Description**

```php
public setResultStatus (string|int|array|null $value, int $position)
```

Set Result Status (OBR.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### OBR::setResultsRptStatusChngDateTime  

**Description**

```php
public setResultsRptStatusChngDateTime (string|int|array|null $value, int $position)
```

Set Results Rpt Status Chng Date Time (OBR.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### OBR::setScheduledDateTime  

**Description**

```php
public setScheduledDateTime (string|int|array|null $value, int $position)
```

Set Scheduled Date Time (OBR.36) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 36  

**Return Values**

`bool`




<hr />


### OBR::setSpecimenActionCode  

**Description**

```php
public setSpecimenActionCode (string|int|array|null $value, int $position)
```

Set Specimen Action Code (OBR.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### OBR::setSpecimenReceivedDateTime  

**Description**

```php
public setSpecimenReceivedDateTime (string|int|array|null $value, int $position)
```

Set Specimen Received Date Time (OBR.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### OBR::setSpecimenSource  

**Description**

```php
public setSpecimenSource (string|int|array|null $value, int $position)
```

Set Specimen Source (OBR.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### OBR::setTechnician  

**Description**

```php
public setTechnician (string|int|array|null $value, int $position)
```

Set Technician (OBR.34) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 34  

**Return Values**

`bool`




<hr />


### OBR::setTranscriptionist  

**Description**

```php
public setTranscriptionist (string|int|array|null $value, int $position)
```

Set Transcriptionist (OBR.35) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 35  

**Return Values**

`bool`




<hr />


### OBR::setTransportArranged  

**Description**

```php
public setTransportArranged (string|int|array|null $value, int $position)
```

Set Transport Arranged (OBR.41) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 41  

**Return Values**

`bool`




<hr />


### OBR::setTransportArrangementResponsibility  

**Description**

```php
public setTransportArrangementResponsibility (string|int|array|null $value, int $position)
```

Set Transport Arrangement Responsibility (OBR.40) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 40  

**Return Values**

`bool`




<hr />


### OBR::setTransportLogisticsofCollectedSample  

**Description**

```php
public setTransportLogisticsofCollectedSample (string|int|array|null $value, int $position)
```

Set Transport Logisticsof Collected Sample (OBR.38) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 38  

**Return Values**

`bool`




<hr />


### OBR::setTransportationMode  

**Description**

```php
public setTransportationMode (string|int|array|null $value, int $position)
```

Set Transportation Mode (OBR.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### OBR::setUniversalServiceID  

**Description**

```php
public setUniversalServiceID (string|int|array|null $value, int $position)
```

Set Universal Service ID (OBR.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />

