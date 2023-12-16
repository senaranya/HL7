# Aranyasen\HL7\Segments\ORC  

ORC segment class
Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7%20v2.5.1&segment=ORC



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getActionBy](#orcgetactionby)|Get Action By (OBR.19)|
|[getAdvancedBeneficiaryNoticeCode](#orcgetadvancedbeneficiarynoticecode)|Get Advanced BeneficiaryNoticeCode (OBR.20)|
|[getAdvancedBeneficiaryNoticeOverrideReason](#orcgetadvancedbeneficiarynoticeoverridereason)|Get Advanced BeneficiaryNoticeOverrideReason (OBR.26)|
|[getCallBackPhoneNumber](#orcgetcallbackphonenumber)|Get Call BackPhoneNumber (OBR.14)|
|[getConfidentialityCode](#orcgetconfidentialitycode)|Get Confidentiality Code (OBR.28)|
|[getDateTimeofTransaction](#orcgetdatetimeoftransaction)|Get Date TimeofTransaction (OBR.9)|
|[getEnteredBy](#orcgetenteredby)|Get Entered By (OBR.10)|
|[getEntererAuthorizationMode](#orcgetentererauthorizationmode)|Get Enterer AuthorizationMode (OBR.30)|
|[getEnterersLocation](#orcgetentererslocation)|Get Enterers Location (OBR.13)|
|[getEnteringDevice](#orcgetenteringdevice)|Get Entering Device (OBR.18)|
|[getEnteringOrganization](#orcgetenteringorganization)|Get Entering Organization (OBR.17)|
|[getFillerOrderNumber](#orcgetfillerordernumber)|Get Filler OrderNumber (OBR.3)|
|[getFillersExpectedAvailabilityDateTime](#orcgetfillersexpectedavailabilitydatetime)|Get Fillers ExpectedAvailabilityDateTime (OBR.27)|
|[getOrderControl](#orcgetordercontrol)|Get Order Control (OBR.1)|
|[getOrderControlCodeReason](#orcgetordercontrolcodereason)|Get Order ControlCodeReason (OBR.16)|
|[getOrderEffectiveDateTime](#orcgetordereffectivedatetime)|Get Order EffectiveDateTime (OBR.15)|
|[getOrderStatus](#orcgetorderstatus)|Get Order Status (OBR.5)|
|[getOrderStatusModifier](#orcgetorderstatusmodifier)|Get Order StatusModifier (OBR.25)|
|[getOrderType](#orcgetordertype)|Get Order Type (OBR.29)|
|[getOrderingFacilityAddress](#orcgetorderingfacilityaddress)|Get Ordering FacilityAddress (OBR.22)|
|[getOrderingFacilityName](#orcgetorderingfacilityname)|Get Ordering FacilityName (OBR.21)|
|[getOrderingFacilityPhoneNumber](#orcgetorderingfacilityphonenumber)|Get Ordering FacilityPhoneNumber (OBR.23)|
|[getOrderingProvider](#orcgetorderingprovider)|Get Ordering Provider (OBR.12)|
|[getOrderingProviderAddress](#orcgetorderingprovideraddress)|Get Ordering ProviderAddress (OBR.24)|
|[getParentOrder](#orcgetparentorder)|Get Parent Order (OBR.8)|
|[getParentUniversalServiceIdentifier](#orcgetparentuniversalserviceidentifier)|Get Parent UniversalServiceIdentifier (OBR.31)|
|[getPlacerGroupNumber](#orcgetplacergroupnumber)|Get Placer GroupNumber (OBR.4)|
|[getPlacerOrderNumber](#orcgetplacerordernumber)|Get Placer OrderNumber (OBR.2)|
|[getQuantityTiming](#orcgetquantitytiming)|Get Quantity Timing (OBR.7)|
|[getResponseFlag](#orcgetresponseflag)|Get Response Flag (OBR.6)|
|[getVerifiedBy](#orcgetverifiedby)|Get Verified By (OBR.11)|
|[setActionBy](#orcsetactionby)|Set Action By (OBR.19)|
|[setAdvancedBeneficiaryNoticeCode](#orcsetadvancedbeneficiarynoticecode)|Set Advanced BeneficiaryNoticeCode (OBR.20)|
|[setAdvancedBeneficiaryNoticeOverrideReason](#orcsetadvancedbeneficiarynoticeoverridereason)|Set Advanced BeneficiaryNoticeOverrideReason (OBR.26)|
|[setCallBackPhoneNumber](#orcsetcallbackphonenumber)|Set Call BackPhoneNumber (OBR.14)|
|[setConfidentialityCode](#orcsetconfidentialitycode)|Set Confidentiality Code (OBR.28)|
|[setDateTimeofTransaction](#orcsetdatetimeoftransaction)|Set Date TimeofTransaction (OBR.9)|
|[setEnteredBy](#orcsetenteredby)|Set Entered By (OBR.10)|
|[setEntererAuthorizationMode](#orcsetentererauthorizationmode)|Set Enterer AuthorizationMode (OBR.30)|
|[setEnterersLocation](#orcsetentererslocation)|Set Enterers Location (OBR.13)|
|[setEnteringDevice](#orcsetenteringdevice)|Set Entering Device (OBR.18)|
|[setEnteringOrganization](#orcsetenteringorganization)|Set Entering Organization (OBR.17)|
|[setFillerOrderNumber](#orcsetfillerordernumber)|Set Filler OrderNumber (OBR.3)|
|[setFillersExpectedAvailabilityDateTime](#orcsetfillersexpectedavailabilitydatetime)|Set Fillers ExpectedAvailabilityDateTime (OBR.27)|
|[setOrderControl](#orcsetordercontrol)|Set Order Control (OBR.1)|
|[setOrderControlCodeReason](#orcsetordercontrolcodereason)|Set Order ControlCodeReason (OBR.16)|
|[setOrderEffectiveDateTime](#orcsetordereffectivedatetime)|Set Order EffectiveDateTime (OBR.15)|
|[setOrderStatus](#orcsetorderstatus)|Set Order Status (OBR.5)|
|[setOrderStatusModifier](#orcsetorderstatusmodifier)|Set Order StatusModifier (OBR.25)|
|[setOrderType](#orcsetordertype)|Set Order Type (OBR.29)|
|[setOrderingFacilityAddress](#orcsetorderingfacilityaddress)|Set Ordering FacilityAddress (OBR.22)|
|[setOrderingFacilityName](#orcsetorderingfacilityname)|Set Ordering FacilityName (OBR.21)|
|[setOrderingFacilityPhoneNumber](#orcsetorderingfacilityphonenumber)|Set Ordering FacilityPhoneNumber (OBR.23)|
|[setOrderingProvider](#orcsetorderingprovider)|Set Ordering Provider (OBR.12)|
|[setOrderingProviderAddress](#orcsetorderingprovideraddress)|Set Ordering ProviderAddress (OBR.24)|
|[setParentOrder](#orcsetparentorder)|Set Parent Order (OBR.8)|
|[setParentUniversalServiceIdentifier](#orcsetparentuniversalserviceidentifier)|Set Parent UniversalServiceIdentifier (OBR.31)|
|[setPlacerGroupNumber](#orcsetplacergroupnumber)|Set Placer GroupNumber (OBR.4)|
|[setPlacerOrderNumber](#orcsetplacerordernumber)|Set Placer OrderNumber (OBR.2)|
|[setQuantityTiming](#orcsetquantitytiming)|Set Quantity Timing (OBR.7)|
|[setResponseFlag](#orcsetresponseflag)|Set Response Flag (OBR.6)|
|[setVerifiedBy](#orcsetverifiedby)|Set Verified By (OBR.11)|

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



### ORC::getActionBy  

**Description**

```php
public getActionBy (int $position)
```

Get Action By (OBR.19) 

 

**Parameters**

* `(int) $position`
: Defaults to 19  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getAdvancedBeneficiaryNoticeCode  

**Description**

```php
public getAdvancedBeneficiaryNoticeCode (int $position)
```

Get Advanced BeneficiaryNoticeCode (OBR.20) 

 

**Parameters**

* `(int) $position`
: Defaults to 20  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getAdvancedBeneficiaryNoticeOverrideReason  

**Description**

```php
public getAdvancedBeneficiaryNoticeOverrideReason (int $position)
```

Get Advanced BeneficiaryNoticeOverrideReason (OBR.26) 

 

**Parameters**

* `(int) $position`
: Defaults to 26  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getCallBackPhoneNumber  

**Description**

```php
public getCallBackPhoneNumber (int $position)
```

Get Call BackPhoneNumber (OBR.14) 

 

**Parameters**

* `(int) $position`
: Defaults to 14  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getConfidentialityCode  

**Description**

```php
public getConfidentialityCode (int $position)
```

Get Confidentiality Code (OBR.28) 

 

**Parameters**

* `(int) $position`
: Defaults to 28  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getDateTimeofTransaction  

**Description**

```php
public getDateTimeofTransaction (int $position)
```

Get Date TimeofTransaction (OBR.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getEnteredBy  

**Description**

```php
public getEnteredBy (int $position)
```

Get Entered By (OBR.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getEntererAuthorizationMode  

**Description**

```php
public getEntererAuthorizationMode (int $position)
```

Get Enterer AuthorizationMode (OBR.30) 

 

**Parameters**

* `(int) $position`
: Defaults to 30  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getEnterersLocation  

**Description**

```php
public getEnterersLocation (int $position)
```

Get Enterers Location (OBR.13) 

 

**Parameters**

* `(int) $position`
: Defaults to 13  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getEnteringDevice  

**Description**

```php
public getEnteringDevice (int $position)
```

Get Entering Device (OBR.18) 

 

**Parameters**

* `(int) $position`
: Defaults to 18  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getEnteringOrganization  

**Description**

```php
public getEnteringOrganization (int $position)
```

Get Entering Organization (OBR.17) 

 

**Parameters**

* `(int) $position`
: Defaults to 17  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getFillerOrderNumber  

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


### ORC::getFillersExpectedAvailabilityDateTime  

**Description**

```php
public getFillersExpectedAvailabilityDateTime (int $position)
```

Get Fillers ExpectedAvailabilityDateTime (OBR.27) 

 

**Parameters**

* `(int) $position`
: Defaults to 27  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderControl  

**Description**

```php
public getOrderControl (int $position)
```

Get Order Control (OBR.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderControlCodeReason  

**Description**

```php
public getOrderControlCodeReason (int $position)
```

Get Order ControlCodeReason (OBR.16) 

 

**Parameters**

* `(int) $position`
: Defaults to 16  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderEffectiveDateTime  

**Description**

```php
public getOrderEffectiveDateTime (int $position)
```

Get Order EffectiveDateTime (OBR.15) 

 

**Parameters**

* `(int) $position`
: Defaults to 15  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderStatus  

**Description**

```php
public getOrderStatus (int $position)
```

Get Order Status (OBR.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderStatusModifier  

**Description**

```php
public getOrderStatusModifier (int $position)
```

Get Order StatusModifier (OBR.25) 

 

**Parameters**

* `(int) $position`
: Defaults to 25  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderType  

**Description**

```php
public getOrderType (int $position)
```

Get Order Type (OBR.29) 

 

**Parameters**

* `(int) $position`
: Defaults to 29  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderingFacilityAddress  

**Description**

```php
public getOrderingFacilityAddress (int $position)
```

Get Ordering FacilityAddress (OBR.22) 

 

**Parameters**

* `(int) $position`
: Defaults to 22  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderingFacilityName  

**Description**

```php
public getOrderingFacilityName (int $position)
```

Get Ordering FacilityName (OBR.21) 

 

**Parameters**

* `(int) $position`
: Defaults to 21  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderingFacilityPhoneNumber  

**Description**

```php
public getOrderingFacilityPhoneNumber (int $position)
```

Get Ordering FacilityPhoneNumber (OBR.23) 

 

**Parameters**

* `(int) $position`
: Defaults to 23  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderingProvider  

**Description**

```php
public getOrderingProvider (int $position)
```

Get Ordering Provider (OBR.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getOrderingProviderAddress  

**Description**

```php
public getOrderingProviderAddress (int $position)
```

Get Ordering ProviderAddress (OBR.24) 

 

**Parameters**

* `(int) $position`
: Defaults to 24  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getParentOrder  

**Description**

```php
public getParentOrder (int $position)
```

Get Parent Order (OBR.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getParentUniversalServiceIdentifier  

**Description**

```php
public getParentUniversalServiceIdentifier (int $position)
```

Get Parent UniversalServiceIdentifier (OBR.31) 

 

**Parameters**

* `(int) $position`
: Defaults to 31  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getPlacerGroupNumber  

**Description**

```php
public getPlacerGroupNumber (int $position)
```

Get Placer GroupNumber (OBR.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getPlacerOrderNumber  

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


### ORC::getQuantityTiming  

**Description**

```php
public getQuantityTiming (int $position)
```

Get Quantity Timing (OBR.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getResponseFlag  

**Description**

```php
public getResponseFlag (int $position)
```

Get Response Flag (OBR.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### ORC::getVerifiedBy  

**Description**

```php
public getVerifiedBy (int $position)
```

Get Verified By (OBR.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### ORC::setActionBy  

**Description**

```php
public setActionBy (string|int|array|null $value, int $position)
```

Set Action By (OBR.19) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 19  

**Return Values**

`bool`




<hr />


### ORC::setAdvancedBeneficiaryNoticeCode  

**Description**

```php
public setAdvancedBeneficiaryNoticeCode (string|int|array|null $value, int $position)
```

Set Advanced BeneficiaryNoticeCode (OBR.20) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 20  

**Return Values**

`bool`




<hr />


### ORC::setAdvancedBeneficiaryNoticeOverrideReason  

**Description**

```php
public setAdvancedBeneficiaryNoticeOverrideReason (string|int|array|null $value, int $position)
```

Set Advanced BeneficiaryNoticeOverrideReason (OBR.26) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 26  

**Return Values**

`bool`




<hr />


### ORC::setCallBackPhoneNumber  

**Description**

```php
public setCallBackPhoneNumber (string|int|array|null $value, int $position)
```

Set Call BackPhoneNumber (OBR.14) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 14  

**Return Values**

`bool`




<hr />


### ORC::setConfidentialityCode  

**Description**

```php
public setConfidentialityCode (string|int|array|null $value, int $position)
```

Set Confidentiality Code (OBR.28) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 28  

**Return Values**

`bool`




<hr />


### ORC::setDateTimeofTransaction  

**Description**

```php
public setDateTimeofTransaction (string|int|array|null $value, int $position)
```

Set Date TimeofTransaction (OBR.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### ORC::setEnteredBy  

**Description**

```php
public setEnteredBy (string|int|array|null $value, int $position)
```

Set Entered By (OBR.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### ORC::setEntererAuthorizationMode  

**Description**

```php
public setEntererAuthorizationMode (string|int|array|null $value, int $position)
```

Set Enterer AuthorizationMode (OBR.30) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 30  

**Return Values**

`bool`




<hr />


### ORC::setEnterersLocation  

**Description**

```php
public setEnterersLocation (string|int|array|null $value, int $position)
```

Set Enterers Location (OBR.13) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 13  

**Return Values**

`bool`




<hr />


### ORC::setEnteringDevice  

**Description**

```php
public setEnteringDevice (string|int|array|null $value, int $position)
```

Set Entering Device (OBR.18) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 18  

**Return Values**

`bool`




<hr />


### ORC::setEnteringOrganization  

**Description**

```php
public setEnteringOrganization (string|int|array|null $value, int $position)
```

Set Entering Organization (OBR.17) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 17  

**Return Values**

`bool`




<hr />


### ORC::setFillerOrderNumber  

**Description**

```php
public setFillerOrderNumber (string|int|array|null $value, int $position)
```

Set Filler OrderNumber (OBR.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### ORC::setFillersExpectedAvailabilityDateTime  

**Description**

```php
public setFillersExpectedAvailabilityDateTime (string|int|array|null $value, int $position)
```

Set Fillers ExpectedAvailabilityDateTime (OBR.27) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 27  

**Return Values**

`bool`




<hr />


### ORC::setOrderControl  

**Description**

```php
public setOrderControl (string|int|array|null $value, int $position)
```

Set Order Control (OBR.1) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### ORC::setOrderControlCodeReason  

**Description**

```php
public setOrderControlCodeReason (string|int|array|null $value, int $position)
```

Set Order ControlCodeReason (OBR.16) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 16  

**Return Values**

`bool`




<hr />


### ORC::setOrderEffectiveDateTime  

**Description**

```php
public setOrderEffectiveDateTime (string|int|array|null $value, int $position)
```

Set Order EffectiveDateTime (OBR.15) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 15  

**Return Values**

`bool`




<hr />


### ORC::setOrderStatus  

**Description**

```php
public setOrderStatus (string|int|array|null $value, int $position)
```

Set Order Status (OBR.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### ORC::setOrderStatusModifier  

**Description**

```php
public setOrderStatusModifier (string|int|array|null $value, int $position)
```

Set Order StatusModifier (OBR.25) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 25  

**Return Values**

`bool`




<hr />


### ORC::setOrderType  

**Description**

```php
public setOrderType (string|int|array|null $value, int $position)
```

Set Order Type (OBR.29) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 29  

**Return Values**

`bool`




<hr />


### ORC::setOrderingFacilityAddress  

**Description**

```php
public setOrderingFacilityAddress (string|int|array|null $value, int $position)
```

Set Ordering FacilityAddress (OBR.22) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 22  

**Return Values**

`bool`




<hr />


### ORC::setOrderingFacilityName  

**Description**

```php
public setOrderingFacilityName (string|int|array|null $value, int $position)
```

Set Ordering FacilityName (OBR.21) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 21  

**Return Values**

`bool`




<hr />


### ORC::setOrderingFacilityPhoneNumber  

**Description**

```php
public setOrderingFacilityPhoneNumber (string|int|array|null $value, int $position)
```

Set Ordering FacilityPhoneNumber (OBR.23) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 23  

**Return Values**

`bool`




<hr />


### ORC::setOrderingProvider  

**Description**

```php
public setOrderingProvider (string|int|array|null $value, int $position)
```

Set Ordering Provider (OBR.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />


### ORC::setOrderingProviderAddress  

**Description**

```php
public setOrderingProviderAddress (string|int|array|null $value, int $position)
```

Set Ordering ProviderAddress (OBR.24) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 24  

**Return Values**

`bool`




<hr />


### ORC::setParentOrder  

**Description**

```php
public setParentOrder (string|int|array|null $value, int $position)
```

Set Parent Order (OBR.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### ORC::setParentUniversalServiceIdentifier  

**Description**

```php
public setParentUniversalServiceIdentifier (string|int|array|null $value, int $position)
```

Set Parent UniversalServiceIdentifier (OBR.31) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 31  

**Return Values**

`bool`




<hr />


### ORC::setPlacerGroupNumber  

**Description**

```php
public setPlacerGroupNumber (string|int|array|null $value, int $position)
```

Set Placer GroupNumber (OBR.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### ORC::setPlacerOrderNumber  

**Description**

```php
public setPlacerOrderNumber (string|int|array|null $value, int $position)
```

Set Placer OrderNumber (OBR.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### ORC::setQuantityTiming  

**Description**

```php
public setQuantityTiming (string|int|array|null $value, int $position)
```

Set Quantity Timing (OBR.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### ORC::setResponseFlag  

**Description**

```php
public setResponseFlag (string|int|array|null $value, int $position)
```

Set Response Flag (OBR.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### ORC::setVerifiedBy  

**Description**

```php
public setVerifiedBy (string|int|array|null $value, int $position)
```

Set Verified By (OBR.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />

