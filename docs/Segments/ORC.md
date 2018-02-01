# Aranyasen\HL7\Segments\ORC  

ORC segment class
Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7%20v2.5.1&segment=ORC



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getActionBy](#orcgetactionby)||
|[getAdvancedBeneficiaryNoticeCode](#orcgetadvancedbeneficiarynoticecode)||
|[getAdvancedBeneficiaryNoticeOverrideReason](#orcgetadvancedbeneficiarynoticeoverridereason)||
|[getCallBackPhoneNumber](#orcgetcallbackphonenumber)||
|[getConfidentialityCode](#orcgetconfidentialitycode)||
|[getDateTimeofTransaction](#orcgetdatetimeoftransaction)||
|[getEnteredBy](#orcgetenteredby)||
|[getEntererAuthorizationMode](#orcgetentererauthorizationmode)||
|[getEnterersLocation](#orcgetentererslocation)||
|[getEnteringDevice](#orcgetenteringdevice)||
|[getEnteringOrganization](#orcgetenteringorganization)||
|[getFillerOrderNumber](#orcgetfillerordernumber)||
|[getFillersExpectedAvailabilityDateTime](#orcgetfillersexpectedavailabilitydatetime)||
|[getOrderControl](#orcgetordercontrol)||
|[getOrderControlCodeReason](#orcgetordercontrolcodereason)||
|[getOrderEffectiveDateTime](#orcgetordereffectivedatetime)||
|[getOrderStatus](#orcgetorderstatus)||
|[getOrderStatusModifier](#orcgetorderstatusmodifier)||
|[getOrderType](#orcgetordertype)||
|[getOrderingFacilityAddress](#orcgetorderingfacilityaddress)||
|[getOrderingFacilityName](#orcgetorderingfacilityname)||
|[getOrderingFacilityPhoneNumber](#orcgetorderingfacilityphonenumber)||
|[getOrderingProvider](#orcgetorderingprovider)||
|[getOrderingProviderAddress](#orcgetorderingprovideraddress)||
|[getParentOrder](#orcgetparentorder)||
|[getParentUniversalServiceIdentifier](#orcgetparentuniversalserviceidentifier)||
|[getPlacerGroupNumber](#orcgetplacergroupnumber)||
|[getPlacerOrderNumber](#orcgetplacerordernumber)||
|[getQuantityTiming](#orcgetquantitytiming)||
|[getResponseFlag](#orcgetresponseflag)||
|[getVerifiedBy](#orcgetverifiedby)||
|[setActionBy](#orcsetactionby)||
|[setAdvancedBeneficiaryNoticeCode](#orcsetadvancedbeneficiarynoticecode)||
|[setAdvancedBeneficiaryNoticeOverrideReason](#orcsetadvancedbeneficiarynoticeoverridereason)||
|[setCallBackPhoneNumber](#orcsetcallbackphonenumber)||
|[setConfidentialityCode](#orcsetconfidentialitycode)||
|[setDateTimeofTransaction](#orcsetdatetimeoftransaction)||
|[setEnteredBy](#orcsetenteredby)||
|[setEntererAuthorizationMode](#orcsetentererauthorizationmode)||
|[setEnterersLocation](#orcsetentererslocation)||
|[setEnteringDevice](#orcsetenteringdevice)||
|[setEnteringOrganization](#orcsetenteringorganization)||
|[setFillerOrderNumber](#orcsetfillerordernumber)||
|[setFillersExpectedAvailabilityDateTime](#orcsetfillersexpectedavailabilitydatetime)||
|[setOrderControl](#orcsetordercontrol)||
|[setOrderControlCodeReason](#orcsetordercontrolcodereason)||
|[setOrderEffectiveDateTime](#orcsetordereffectivedatetime)||
|[setOrderStatus](#orcsetorderstatus)||
|[setOrderStatusModifier](#orcsetorderstatusmodifier)||
|[setOrderType](#orcsetordertype)||
|[setOrderingFacilityAddress](#orcsetorderingfacilityaddress)||
|[setOrderingFacilityName](#orcsetorderingfacilityname)||
|[setOrderingFacilityPhoneNumber](#orcsetorderingfacilityphonenumber)||
|[setOrderingProvider](#orcsetorderingprovider)||
|[setOrderingProviderAddress](#orcsetorderingprovideraddress)||
|[setParentOrder](#orcsetparentorder)||
|[setParentUniversalServiceIdentifier](#orcsetparentuniversalserviceidentifier)||
|[setPlacerGroupNumber](#orcsetplacergroupnumber)||
|[setPlacerOrderNumber](#orcsetplacerordernumber)||
|[setQuantityTiming](#orcsetquantitytiming)||
|[setResponseFlag](#orcsetresponseflag)||
|[setVerifiedBy](#orcsetverifiedby)||

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



### ORC::getActionBy  

**Description**

```php
public getActionBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getAdvancedBeneficiaryNoticeCode  

**Description**

```php
public getAdvancedBeneficiaryNoticeCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getAdvancedBeneficiaryNoticeOverrideReason  

**Description**

```php
public getAdvancedBeneficiaryNoticeOverrideReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getCallBackPhoneNumber  

**Description**

```php
public getCallBackPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getConfidentialityCode  

**Description**

```php
public getConfidentialityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getDateTimeofTransaction  

**Description**

```php
public getDateTimeofTransaction (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getEnteredBy  

**Description**

```php
public getEnteredBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getEntererAuthorizationMode  

**Description**

```php
public getEntererAuthorizationMode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getEnterersLocation  

**Description**

```php
public getEnterersLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getEnteringDevice  

**Description**

```php
public getEnteringDevice (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getEnteringOrganization  

**Description**

```php
public getEnteringOrganization (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getFillerOrderNumber  

**Description**

```php
public getFillerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getFillersExpectedAvailabilityDateTime  

**Description**

```php
public getFillersExpectedAvailabilityDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderControl  

**Description**

```php
public getOrderControl (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderControlCodeReason  

**Description**

```php
public getOrderControlCodeReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderEffectiveDateTime  

**Description**

```php
public getOrderEffectiveDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderStatus  

**Description**

```php
public getOrderStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderStatusModifier  

**Description**

```php
public getOrderStatusModifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderType  

**Description**

```php
public getOrderType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderingFacilityAddress  

**Description**

```php
public getOrderingFacilityAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderingFacilityName  

**Description**

```php
public getOrderingFacilityName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderingFacilityPhoneNumber  

**Description**

```php
public getOrderingFacilityPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderingProvider  

**Description**

```php
public getOrderingProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getOrderingProviderAddress  

**Description**

```php
public getOrderingProviderAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getParentOrder  

**Description**

```php
public getParentOrder (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getParentUniversalServiceIdentifier  

**Description**

```php
public getParentUniversalServiceIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getPlacerGroupNumber  

**Description**

```php
public getPlacerGroupNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getPlacerOrderNumber  

**Description**

```php
public getPlacerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getQuantityTiming  

**Description**

```php
public getQuantityTiming (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getResponseFlag  

**Description**

```php
public getResponseFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::getVerifiedBy  

**Description**

```php
public getVerifiedBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setActionBy  

**Description**

```php
public setActionBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setAdvancedBeneficiaryNoticeCode  

**Description**

```php
public setAdvancedBeneficiaryNoticeCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setAdvancedBeneficiaryNoticeOverrideReason  

**Description**

```php
public setAdvancedBeneficiaryNoticeOverrideReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setCallBackPhoneNumber  

**Description**

```php
public setCallBackPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setConfidentialityCode  

**Description**

```php
public setConfidentialityCode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setDateTimeofTransaction  

**Description**

```php
public setDateTimeofTransaction (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setEnteredBy  

**Description**

```php
public setEnteredBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setEntererAuthorizationMode  

**Description**

```php
public setEntererAuthorizationMode (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setEnterersLocation  

**Description**

```php
public setEnterersLocation (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setEnteringDevice  

**Description**

```php
public setEnteringDevice (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setEnteringOrganization  

**Description**

```php
public setEnteringOrganization (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setFillerOrderNumber  

**Description**

```php
public setFillerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setFillersExpectedAvailabilityDateTime  

**Description**

```php
public setFillersExpectedAvailabilityDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderControl  

**Description**

```php
public setOrderControl (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderControlCodeReason  

**Description**

```php
public setOrderControlCodeReason (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderEffectiveDateTime  

**Description**

```php
public setOrderEffectiveDateTime (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderStatus  

**Description**

```php
public setOrderStatus (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderStatusModifier  

**Description**

```php
public setOrderStatusModifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderType  

**Description**

```php
public setOrderType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderingFacilityAddress  

**Description**

```php
public setOrderingFacilityAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderingFacilityName  

**Description**

```php
public setOrderingFacilityName (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderingFacilityPhoneNumber  

**Description**

```php
public setOrderingFacilityPhoneNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderingProvider  

**Description**

```php
public setOrderingProvider (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setOrderingProviderAddress  

**Description**

```php
public setOrderingProviderAddress (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setParentOrder  

**Description**

```php
public setParentOrder (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setParentUniversalServiceIdentifier  

**Description**

```php
public setParentUniversalServiceIdentifier (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setPlacerGroupNumber  

**Description**

```php
public setPlacerGroupNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setPlacerOrderNumber  

**Description**

```php
public setPlacerOrderNumber (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setQuantityTiming  

**Description**

```php
public setQuantityTiming (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setResponseFlag  

**Description**

```php
public setResponseFlag (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### ORC::setVerifiedBy  

**Description**

```php
public setVerifiedBy (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**



