# Aranyasen\HL7\Segments\ORC  

ORC segment class
Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7%20v2.5.1&segment=ORC



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getActionBy](#orcgetactionby)|Get Action By (ORC.19)|
|[getAdvancedBeneficiaryNoticeCode](#orcgetadvancedbeneficiarynoticecode)|Get Advanced Beneficiary Notice Code (ORC.20)|
|[getAdvancedBeneficiaryNoticeOverrideReason](#orcgetadvancedbeneficiarynoticeoverridereason)|Get Advanced Beneficiary Notice Override Reason (ORC.26)|
|[getCallBackPhoneNumber](#orcgetcallbackphonenumber)|Get Call Back Phone Number (ORC.14)|
|[getConfidentialityCode](#orcgetconfidentialitycode)|Get Confidentiality Code (ORC.28)|
|[getDateTimeofTransaction](#orcgetdatetimeoftransaction)|Get Date Timeof Transaction (ORC.9)|
|[getEnteredBy](#orcgetenteredby)|Get Entered By (ORC.10)|
|[getEntererAuthorizationMode](#orcgetentererauthorizationmode)|Get Enterer Authorization Mode (ORC.30)|
|[getEnterersLocation](#orcgetentererslocation)|Get Enterers Location (ORC.13)|
|[getEnteringDevice](#orcgetenteringdevice)|Get Entering Device (ORC.18)|
|[getEnteringOrganization](#orcgetenteringorganization)|Get Entering Organization (ORC.17)|
|[getFillerOrderNumber](#orcgetfillerordernumber)|Get Filler Order Number (ORC.3)|
|[getFillersExpectedAvailabilityDateTime](#orcgetfillersexpectedavailabilitydatetime)|Get Fillers Expected Availability Date Time (ORC.27)|
|[getOrderControl](#orcgetordercontrol)|Get Order Control (ORC.1)|
|[getOrderControlCodeReason](#orcgetordercontrolcodereason)|Get Order Control Code Reason (ORC.16)|
|[getOrderEffectiveDateTime](#orcgetordereffectivedatetime)|Get Order Effective Date Time (ORC.15)|
|[getOrderStatus](#orcgetorderstatus)|Get Order Status (ORC.5)|
|[getOrderStatusModifier](#orcgetorderstatusmodifier)|Get Order Status Modifier (ORC.25)|
|[getOrderType](#orcgetordertype)|Get Order Type (ORC.29)|
|[getOrderingFacilityAddress](#orcgetorderingfacilityaddress)|Get Ordering Facility Address (ORC.22)|
|[getOrderingFacilityName](#orcgetorderingfacilityname)|Get Ordering Facility Name (ORC.21)|
|[getOrderingFacilityPhoneNumber](#orcgetorderingfacilityphonenumber)|Get Ordering Facility Phone Number (ORC.23)|
|[getOrderingProvider](#orcgetorderingprovider)|Get Ordering Provider (ORC.12)|
|[getOrderingProviderAddress](#orcgetorderingprovideraddress)|Get Ordering Provider Address (ORC.24)|
|[getParentOrder](#orcgetparentorder)|Get Parent Order (ORC.8)|
|[getParentUniversalServiceIdentifier](#orcgetparentuniversalserviceidentifier)|Get Parent Universal Service Identifier (ORC.31)|
|[getPlacerGroupNumber](#orcgetplacergroupnumber)|Get Placer Group Number (ORC.4)|
|[getPlacerOrderNumber](#orcgetplacerordernumber)|Get Placer Order Number (ORC.2)|
|[getQuantityTiming](#orcgetquantitytiming)|Get Quantity Timing (ORC.7)|
|[getResponseFlag](#orcgetresponseflag)|Get Response Flag (ORC.6)|
|[getVerifiedBy](#orcgetverifiedby)|Get Verified By (ORC.11)|
|[setActionBy](#orcsetactionby)|Set Action By (ORC.19)|
|[setAdvancedBeneficiaryNoticeCode](#orcsetadvancedbeneficiarynoticecode)|Set Advanced Beneficiary Notice Code (ORC.20)|
|[setAdvancedBeneficiaryNoticeOverrideReason](#orcsetadvancedbeneficiarynoticeoverridereason)|Set Advanced Beneficiary Notice Override Reason (ORC.26)|
|[setCallBackPhoneNumber](#orcsetcallbackphonenumber)|Set Call Back Phone Number (ORC.14)|
|[setConfidentialityCode](#orcsetconfidentialitycode)|Set Confidentiality Code (ORC.28)|
|[setDateTimeofTransaction](#orcsetdatetimeoftransaction)|Set Date Timeof Transaction (ORC.9)|
|[setEnteredBy](#orcsetenteredby)|Set Entered By (ORC.10)|
|[setEntererAuthorizationMode](#orcsetentererauthorizationmode)|Set Enterer Authorization Mode (ORC.30)|
|[setEnterersLocation](#orcsetentererslocation)|Set Enterers Location (ORC.13)|
|[setEnteringDevice](#orcsetenteringdevice)|Set Entering Device (ORC.18)|
|[setEnteringOrganization](#orcsetenteringorganization)|Set Entering Organization (ORC.17)|
|[setFillerOrderNumber](#orcsetfillerordernumber)|Set Filler Order Number (ORC.3)|
|[setFillersExpectedAvailabilityDateTime](#orcsetfillersexpectedavailabilitydatetime)|Set Fillers Expected Availability Date Time (ORC.27)|
|[setOrderControl](#orcsetordercontrol)|Set Order Control (ORC.1)|
|[setOrderControlCodeReason](#orcsetordercontrolcodereason)|Set Order Control Code Reason (ORC.16)|
|[setOrderEffectiveDateTime](#orcsetordereffectivedatetime)|Set Order Effective Date Time (ORC.15)|
|[setOrderStatus](#orcsetorderstatus)|Set Order Status (ORC.5)|
|[setOrderStatusModifier](#orcsetorderstatusmodifier)|Set Order Status Modifier (ORC.25)|
|[setOrderType](#orcsetordertype)|Set Order Type (ORC.29)|
|[setOrderingFacilityAddress](#orcsetorderingfacilityaddress)|Set Ordering Facility Address (ORC.22)|
|[setOrderingFacilityName](#orcsetorderingfacilityname)|Set Ordering Facility Name (ORC.21)|
|[setOrderingFacilityPhoneNumber](#orcsetorderingfacilityphonenumber)|Set Ordering Facility Phone Number (ORC.23)|
|[setOrderingProvider](#orcsetorderingprovider)|Set Ordering Provider (ORC.12)|
|[setOrderingProviderAddress](#orcsetorderingprovideraddress)|Set Ordering Provider Address (ORC.24)|
|[setParentOrder](#orcsetparentorder)|Set Parent Order (ORC.8)|
|[setParentUniversalServiceIdentifier](#orcsetparentuniversalserviceidentifier)|Set Parent Universal Service Identifier (ORC.31)|
|[setPlacerGroupNumber](#orcsetplacergroupnumber)|Set Placer Group Number (ORC.4)|
|[setPlacerOrderNumber](#orcsetplacerordernumber)|Set Placer Order Number (ORC.2)|
|[setQuantityTiming](#orcsetquantitytiming)|Set Quantity Timing (ORC.7)|
|[setResponseFlag](#orcsetresponseflag)|Set Response Flag (ORC.6)|
|[setVerifiedBy](#orcsetverifiedby)|Set Verified By (ORC.11)|

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

Get Action By (ORC.19) 

 

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

Get Advanced Beneficiary Notice Code (ORC.20) 

 

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

Get Advanced Beneficiary Notice Override Reason (ORC.26) 

 

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

Get Call Back Phone Number (ORC.14) 

 

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

Get Confidentiality Code (ORC.28) 

 

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

Get Date Timeof Transaction (ORC.9) 

 

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

Get Entered By (ORC.10) 

 

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

Get Enterer Authorization Mode (ORC.30) 

 

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

Get Enterers Location (ORC.13) 

 

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

Get Entering Device (ORC.18) 

 

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

Get Entering Organization (ORC.17) 

 

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

Get Filler Order Number (ORC.3) 

 

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

Get Fillers Expected Availability Date Time (ORC.27) 

 

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

Get Order Control (ORC.1) 

 

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

Get Order Control Code Reason (ORC.16) 

 

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

Get Order Effective Date Time (ORC.15) 

 

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

Get Order Status (ORC.5) 

 

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

Get Order Status Modifier (ORC.25) 

 

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

Get Order Type (ORC.29) 

 

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

Get Ordering Facility Address (ORC.22) 

 

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

Get Ordering Facility Name (ORC.21) 

 

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

Get Ordering Facility Phone Number (ORC.23) 

 

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

Get Ordering Provider (ORC.12) 

 

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

Get Ordering Provider Address (ORC.24) 

 

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

Get Parent Order (ORC.8) 

 

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

Get Parent Universal Service Identifier (ORC.31) 

 

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

Get Placer Group Number (ORC.4) 

 

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

Get Placer Order Number (ORC.2) 

 

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

Get Quantity Timing (ORC.7) 

 

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

Get Response Flag (ORC.6) 

 

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

Get Verified By (ORC.11) 

 

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

Set Action By (ORC.19) 

 

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

Set Advanced Beneficiary Notice Code (ORC.20) 

 

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

Set Advanced Beneficiary Notice Override Reason (ORC.26) 

 

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

Set Call Back Phone Number (ORC.14) 

 

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

Set Confidentiality Code (ORC.28) 

 

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

Set Date Timeof Transaction (ORC.9) 

 

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

Set Entered By (ORC.10) 

 

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

Set Enterer Authorization Mode (ORC.30) 

 

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

Set Enterers Location (ORC.13) 

 

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

Set Entering Device (ORC.18) 

 

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

Set Entering Organization (ORC.17) 

 

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

Set Filler Order Number (ORC.3) 

 

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

Set Fillers Expected Availability Date Time (ORC.27) 

 

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

Set Order Control (ORC.1) 

 

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

Set Order Control Code Reason (ORC.16) 

 

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

Set Order Effective Date Time (ORC.15) 

 

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

Set Order Status (ORC.5) 

 

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

Set Order Status Modifier (ORC.25) 

 

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

Set Order Type (ORC.29) 

 

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

Set Ordering Facility Address (ORC.22) 

 

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

Set Ordering Facility Name (ORC.21) 

 

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

Set Ordering Facility Phone Number (ORC.23) 

 

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

Set Ordering Provider (ORC.12) 

 

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

Set Ordering Provider Address (ORC.24) 

 

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

Set Parent Order (ORC.8) 

 

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

Set Parent Universal Service Identifier (ORC.31) 

 

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

Set Placer Group Number (ORC.4) 

 

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

Set Placer Order Number (ORC.2) 

 

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

Set Quantity Timing (ORC.7) 

 

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

Set Response Flag (ORC.6) 

 

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

Set Verified By (ORC.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />

