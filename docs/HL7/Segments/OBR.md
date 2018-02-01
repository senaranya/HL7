# Aranyasen\HL7\Segments\OBR  

OBR segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-obr-segment



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getAssistantResultInterpreter](#obrgetassistantresultinterpreter)||
|[getChargetoPractice](#obrgetchargetopractice)||
|[getCollectionVolume](#obrgetcollectionvolume)||
|[getCollectorIdentifier](#obrgetcollectoridentifier)||
|[getCollectorsComment](#obrgetcollectorscomment)||
|[getDangerCode](#obrgetdangercode)||
|[getDiagnosticServSectID](#obrgetdiagnosticservsectid)||
|[getEscortRequired](#obrgetescortrequired)||
|[getFillerField1](#obrgetfillerfield1)||
|[getFillerField2](#obrgetfillerfield2)||
|[getFillerOrderNumber](#obrgetfillerordernumber)||
|[getID](#obrgetid)||
|[getNumberofSampleContainers](#obrgetnumberofsamplecontainers)||
|[getObservationDateTime](#obrgetobservationdatetime)||
|[getObservationEndDateTime](#obrgetobservationenddatetime)||
|[getOrderCallbackPhoneNumber](#obrgetordercallbackphonenumber)||
|[getOrderingProvider](#obrgetorderingprovider)||
|[getParent](#obrgetparent)||
|[getParentResult](#obrgetparentresult)||
|[getPlacerOrderNumber](#obrgetplacerordernumber)||
|[getPlacerfield1](#obrgetplacerfield1)||
|[getPlacerfield2](#obrgetplacerfield2)||
|[getPlannedPatientTransportComment](#obrgetplannedpatienttransportcomment)||
|[getPrincipalResultInterpreter](#obrgetprincipalresultinterpreter)||
|[getPriority](#obrgetpriority)||
|[getQuantityTiming](#obrgetquantitytiming)||
|[getReasonforStudy](#obrgetreasonforstudy)||
|[getRelevantClinicalInfo](#obrgetrelevantclinicalinfo)||
|[getRequestedDatetime](#obrgetrequesteddatetime)||
|[getResultCopiesTo](#obrgetresultcopiesto)||
|[getResultStatus](#obrgetresultstatus)||
|[getResultsRptStatusChngDateTime](#obrgetresultsrptstatuschngdatetime)||
|[getScheduledDateTime](#obrgetscheduleddatetime)||
|[getSpecimenActionCode](#obrgetspecimenactioncode)||
|[getSpecimenReceivedDateTime](#obrgetspecimenreceiveddatetime)||
|[getSpecimenSource](#obrgetspecimensource)||
|[getTechnician](#obrgettechnician)||
|[getTranscriptionist](#obrgettranscriptionist)||
|[getTransportArranged](#obrgettransportarranged)||
|[getTransportArrangementResponsibility](#obrgettransportarrangementresponsibility)||
|[getTransportLogisticsofCollectedSample](#obrgettransportlogisticsofcollectedsample)||
|[getTransportationMode](#obrgettransportationmode)||
|[getUniversalServiceID](#obrgetuniversalserviceid)||
|[setAssistantResultInterpreter](#obrsetassistantresultinterpreter)||
|[setChargetoPractice](#obrsetchargetopractice)||
|[setCollectionVolume](#obrsetcollectionvolume)||
|[setCollectorIdentifier](#obrsetcollectoridentifier)||
|[setCollectorsComment](#obrsetcollectorscomment)||
|[setDangerCode](#obrsetdangercode)||
|[setDiagnosticServSectID](#obrsetdiagnosticservsectid)||
|[setEscortRequired](#obrsetescortrequired)||
|[setFillerField1](#obrsetfillerfield1)||
|[setFillerField2](#obrsetfillerfield2)||
|[setFillerOrderNumber](#obrsetfillerordernumber)||
|[setID](#obrsetid)||
|[setNumberofSampleContainers](#obrsetnumberofsamplecontainers)||
|[setObservationDateTime](#obrsetobservationdatetime)||
|[setObservationEndDateTime](#obrsetobservationenddatetime)||
|[setOrderCallbackPhoneNumber](#obrsetordercallbackphonenumber)||
|[setOrderingProvider](#obrsetorderingprovider)||
|[setParent](#obrsetparent)||
|[setParentResult](#obrsetparentresult)||
|[setPlacerOrderNumber](#obrsetplacerordernumber)||
|[setPlacerfield1](#obrsetplacerfield1)||
|[setPlacerfield2](#obrsetplacerfield2)||
|[setPlannedPatientTransportComment](#obrsetplannedpatienttransportcomment)||
|[setPrincipalResultInterpreter](#obrsetprincipalresultinterpreter)||
|[setPriority](#obrsetpriority)||
|[setQuantityTiming](#obrsetquantitytiming)||
|[setReasonforStudy](#obrsetreasonforstudy)||
|[setRelevantClinicalInfo](#obrsetrelevantclinicalinfo)||
|[setRequestedDatetime](#obrsetrequesteddatetime)||
|[setResultCopiesTo](#obrsetresultcopiesto)||
|[setResultStatus](#obrsetresultstatus)||
|[setResultsRptStatusChngDateTime](#obrsetresultsrptstatuschngdatetime)||
|[setScheduledDateTime](#obrsetscheduleddatetime)||
|[setSpecimenActionCode](#obrsetspecimenactioncode)||
|[setSpecimenReceivedDateTime](#obrsetspecimenreceiveddatetime)||
|[setSpecimenSource](#obrsetspecimensource)||
|[setTechnician](#obrsettechnician)||
|[setTranscriptionist](#obrsettranscriptionist)||
|[setTransportArranged](#obrsettransportarranged)||
|[setTransportArrangementResponsibility](#obrsettransportarrangementresponsibility)||
|[setTransportLogisticsofCollectedSample](#obrsettransportlogisticsofcollectedsample)||
|[setTransportationMode](#obrsettransportationmode)||
|[setUniversalServiceID](#obrsetuniversalserviceid)||

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



### OBR::getAssistantResultInterpreter  

**Description**

```php
public getAssistantResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getChargetoPractice  

**Description**

```php
public getChargetoPractice (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getCollectionVolume  

**Description**

```php
public getCollectionVolume (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getCollectorIdentifier  

**Description**

```php
public getCollectorIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getCollectorsComment  

**Description**

```php
public getCollectorsComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getDangerCode  

**Description**

```php
public getDangerCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getDiagnosticServSectID  

**Description**

```php
public getDiagnosticServSectID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getEscortRequired  

**Description**

```php
public getEscortRequired (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getFillerField1  

**Description**

```php
public getFillerField1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getFillerField2  

**Description**

```php
public getFillerField2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getFillerOrderNumber  

**Description**

```php
public getFillerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getID  

**Description**

```php
public getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getNumberofSampleContainers  

**Description**

```php
public getNumberofSampleContainers (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getObservationDateTime  

**Description**

```php
public getObservationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getObservationEndDateTime  

**Description**

```php
public getObservationEndDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getOrderCallbackPhoneNumber  

**Description**

```php
public getOrderCallbackPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getOrderingProvider  

**Description**

```php
public getOrderingProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getParent  

**Description**

```php
public getParent (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getParentResult  

**Description**

```php
public getParentResult (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getPlacerOrderNumber  

**Description**

```php
public getPlacerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getPlacerfield1  

**Description**

```php
public getPlacerfield1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getPlacerfield2  

**Description**

```php
public getPlacerfield2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getPlannedPatientTransportComment  

**Description**

```php
public getPlannedPatientTransportComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getPrincipalResultInterpreter  

**Description**

```php
public getPrincipalResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getPriority  

**Description**

```php
public getPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getQuantityTiming  

**Description**

```php
public getQuantityTiming (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getReasonforStudy  

**Description**

```php
public getReasonforStudy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getRelevantClinicalInfo  

**Description**

```php
public getRelevantClinicalInfo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getRequestedDatetime  

**Description**

```php
public getRequestedDatetime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getResultCopiesTo  

**Description**

```php
public getResultCopiesTo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getResultStatus  

**Description**

```php
public getResultStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getResultsRptStatusChngDateTime  

**Description**

```php
public getResultsRptStatusChngDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getScheduledDateTime  

**Description**

```php
public getScheduledDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getSpecimenActionCode  

**Description**

```php
public getSpecimenActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getSpecimenReceivedDateTime  

**Description**

```php
public getSpecimenReceivedDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getSpecimenSource  

**Description**

```php
public getSpecimenSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getTechnician  

**Description**

```php
public getTechnician (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getTranscriptionist  

**Description**

```php
public getTranscriptionist (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getTransportArranged  

**Description**

```php
public getTransportArranged (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getTransportArrangementResponsibility  

**Description**

```php
public getTransportArrangementResponsibility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getTransportLogisticsofCollectedSample  

**Description**

```php
public getTransportLogisticsofCollectedSample (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getTransportationMode  

**Description**

```php
public getTransportationMode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::getUniversalServiceID  

**Description**

```php
public getUniversalServiceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setAssistantResultInterpreter  

**Description**

```php
public setAssistantResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setChargetoPractice  

**Description**

```php
public setChargetoPractice (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setCollectionVolume  

**Description**

```php
public setCollectionVolume (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setCollectorIdentifier  

**Description**

```php
public setCollectorIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setCollectorsComment  

**Description**

```php
public setCollectorsComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setDangerCode  

**Description**

```php
public setDangerCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setDiagnosticServSectID  

**Description**

```php
public setDiagnosticServSectID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setEscortRequired  

**Description**

```php
public setEscortRequired (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setFillerField1  

**Description**

```php
public setFillerField1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setFillerField2  

**Description**

```php
public setFillerField2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setFillerOrderNumber  

**Description**

```php
public setFillerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setID  

**Description**

```php
public setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setNumberofSampleContainers  

**Description**

```php
public setNumberofSampleContainers (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setObservationDateTime  

**Description**

```php
public setObservationDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setObservationEndDateTime  

**Description**

```php
public setObservationEndDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setOrderCallbackPhoneNumber  

**Description**

```php
public setOrderCallbackPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setOrderingProvider  

**Description**

```php
public setOrderingProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setParent  

**Description**

```php
public setParent (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setParentResult  

**Description**

```php
public setParentResult (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setPlacerOrderNumber  

**Description**

```php
public setPlacerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setPlacerfield1  

**Description**

```php
public setPlacerfield1 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setPlacerfield2  

**Description**

```php
public setPlacerfield2 (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setPlannedPatientTransportComment  

**Description**

```php
public setPlannedPatientTransportComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setPrincipalResultInterpreter  

**Description**

```php
public setPrincipalResultInterpreter (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setPriority  

**Description**

```php
public setPriority (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setQuantityTiming  

**Description**

```php
public setQuantityTiming (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setReasonforStudy  

**Description**

```php
public setReasonforStudy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setRelevantClinicalInfo  

**Description**

```php
public setRelevantClinicalInfo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setRequestedDatetime  

**Description**

```php
public setRequestedDatetime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setResultCopiesTo  

**Description**

```php
public setResultCopiesTo (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setResultStatus  

**Description**

```php
public setResultStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setResultsRptStatusChngDateTime  

**Description**

```php
public setResultsRptStatusChngDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setScheduledDateTime  

**Description**

```php
public setScheduledDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setSpecimenActionCode  

**Description**

```php
public setSpecimenActionCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setSpecimenReceivedDateTime  

**Description**

```php
public setSpecimenReceivedDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setSpecimenSource  

**Description**

```php
public setSpecimenSource (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setTechnician  

**Description**

```php
public setTechnician (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setTranscriptionist  

**Description**

```php
public setTranscriptionist (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setTransportArranged  

**Description**

```php
public setTransportArranged (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setTransportArrangementResponsibility  

**Description**

```php
public setTransportArrangementResponsibility (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setTransportLogisticsofCollectedSample  

**Description**

```php
public setTransportLogisticsofCollectedSample (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setTransportationMode  

**Description**

```php
public setTransportationMode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### OBR::setUniversalServiceID  

**Description**

```php
public setUniversalServiceID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**



