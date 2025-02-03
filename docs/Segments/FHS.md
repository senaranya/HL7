# Aranyasen\HL7\Segments\FHS  

FHS: File Header Segment
Ref: https://hl7-definition.caristix.com/v2/HL7v2.3/Segments/FHS



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getFileControlId](#fhsgetfilecontrolid)|Get File Control Id (FHS.11)|
|[getFileCreationDateTime](#fhsgetfilecreationdatetime)|Get File Creation Date Time (FHS.7)|
|[getFileEncodingCharacters](#fhsgetfileencodingcharacters)|Get File Encoding Characters (FHS.2)|
|[getFileFieldSeparator](#fhsgetfilefieldseparator)|Get File Field Separator (FHS.1)|
|[getFileHeaderComment](#fhsgetfileheadercomment)|Get File Header Comment (FHS.10)|
|[getFileNameId](#fhsgetfilenameid)|Get File Name Id (FHS.9)|
|[getFileRecievingApplication](#fhsgetfilerecievingapplication)|Get File Recieving Application (FHS.5)|
|[getFileRecievingFacility](#fhsgetfilerecievingfacility)|Get File Recieving Facility (FHS.6)|
|[getFileSecurity](#fhsgetfilesecurity)|Get File Security (FHS.8)|
|[getFileSendingApplication](#fhsgetfilesendingapplication)|Get File Sending Application (FHS.3)|
|[getFileSendingFacility](#fhsgetfilesendingfacility)|Get File Sending Facility (FHS.4)|
|[getReferenceFileControlId](#fhsgetreferencefilecontrolid)|Get Reference File Control Id (FHS.12)|
|[setFileControlId](#fhssetfilecontrolid)|Set File Control Id (FHS.11)|
|[setFileCreationDateTime](#fhssetfilecreationdatetime)|Set File Creation Date Time (FHS.7)|
|[setFileEncodingCharacters](#fhssetfileencodingcharacters)|Set File Encoding Characters (FHS.2)|
|[setFileFieldSeparator](#fhssetfilefieldseparator)|Set File Field Separator (FHS.1)|
|[setFileHeaderComment](#fhssetfileheadercomment)|Set File Header Comment (FHS.10)|
|[setFileNameId](#fhssetfilenameid)|Set File Name Id (FHS.9)|
|[setFileRecievingApplication](#fhssetfilerecievingapplication)|Set File Recieving Application (FHS.5)|
|[setFileRecievingFacility](#fhssetfilerecievingfacility)|Set File Recieving Facility (FHS.6)|
|[setFileSecurity](#fhssetfilesecurity)|Set File Security (FHS.8)|
|[setFileSendingApplication](#fhssetfilesendingapplication)|Set File Sending Application (FHS.3)|
|[setFileSendingFacility](#fhssetfilesendingfacility)|Set File Sending Facility (FHS.4)|
|[setReferenceFileControlId](#fhssetreferencefilecontrolid)|Set Reference File Control Id (FHS.12)|

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



### FHS::getFileControlId  

**Description**

```php
public getFileControlId (int $position)
```

Get File Control Id (FHS.11) 

 

**Parameters**

* `(int) $position`
: Defaults to 11  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileCreationDateTime  

**Description**

```php
public getFileCreationDateTime (int $position)
```

Get File Creation Date Time (FHS.7) 

 

**Parameters**

* `(int) $position`
: Defaults to 7  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileEncodingCharacters  

**Description**

```php
public getFileEncodingCharacters (int $position)
```

Get File Encoding Characters (FHS.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileFieldSeparator  

**Description**

```php
public getFileFieldSeparator (int $position)
```

Get File Field Separator (FHS.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileHeaderComment  

**Description**

```php
public getFileHeaderComment (int $position)
```

Get File Header Comment (FHS.10) 

 

**Parameters**

* `(int) $position`
: Defaults to 10  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileNameId  

**Description**

```php
public getFileNameId (int $position)
```

Get File Name Id (FHS.9) 

 

**Parameters**

* `(int) $position`
: Defaults to 9  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileRecievingApplication  

**Description**

```php
public getFileRecievingApplication (int $position)
```

Get File Recieving Application (FHS.5) 

 

**Parameters**

* `(int) $position`
: Defaults to 5  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileRecievingFacility  

**Description**

```php
public getFileRecievingFacility (int $position)
```

Get File Recieving Facility (FHS.6) 

 

**Parameters**

* `(int) $position`
: Defaults to 6  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileSecurity  

**Description**

```php
public getFileSecurity (int $position)
```

Get File Security (FHS.8) 

 

**Parameters**

* `(int) $position`
: Defaults to 8  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileSendingApplication  

**Description**

```php
public getFileSendingApplication (int $position)
```

Get File Sending Application (FHS.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getFileSendingFacility  

**Description**

```php
public getFileSendingFacility (int $position)
```

Get File Sending Facility (FHS.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### FHS::getReferenceFileControlId  

**Description**

```php
public getReferenceFileControlId (int $position)
```

Get Reference File Control Id (FHS.12) 

 

**Parameters**

* `(int) $position`
: Defaults to 12  

**Return Values**

`array|string|int|null`




<hr />


### FHS::setFileControlId  

**Description**

```php
public setFileControlId (string|int|array|null $value, int $position)
```

Set File Control Id (FHS.11) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 11  

**Return Values**

`bool`




<hr />


### FHS::setFileCreationDateTime  

**Description**

```php
public setFileCreationDateTime (string|int|array|null $value, int $position)
```

Set File Creation Date Time (FHS.7) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 7  

**Return Values**

`bool`




<hr />


### FHS::setFileEncodingCharacters  

**Description**

```php
public setFileEncodingCharacters (string|int|array|null $value, int $position)
```

Set File Encoding Characters (FHS.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />


### FHS::setFileFieldSeparator  

**Description**

```php
public setFileFieldSeparator (string|int|array|null $value, int $position)
```

Set File Field Separator (FHS.1) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### FHS::setFileHeaderComment  

**Description**

```php
public setFileHeaderComment (string|int|array|null $value, int $position)
```

Set File Header Comment (FHS.10) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 10  

**Return Values**

`bool`




<hr />


### FHS::setFileNameId  

**Description**

```php
public setFileNameId (string|int|array|null $value, int $position)
```

Set File Name Id (FHS.9) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 9  

**Return Values**

`bool`




<hr />


### FHS::setFileRecievingApplication  

**Description**

```php
public setFileRecievingApplication (string|int|array|null $value, int $position)
```

Set File Recieving Application (FHS.5) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 5  

**Return Values**

`bool`




<hr />


### FHS::setFileRecievingFacility  

**Description**

```php
public setFileRecievingFacility (string|int|array|null $value, int $position)
```

Set File Recieving Facility (FHS.6) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 6  

**Return Values**

`bool`




<hr />


### FHS::setFileSecurity  

**Description**

```php
public setFileSecurity (string|int|array|null $value, int $position)
```

Set File Security (FHS.8) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 8  

**Return Values**

`bool`




<hr />


### FHS::setFileSendingApplication  

**Description**

```php
public setFileSendingApplication (string|int|array|null $value, int $position)
```

Set File Sending Application (FHS.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### FHS::setFileSendingFacility  

**Description**

```php
public setFileSendingFacility (string|int|array|null $value, int $position)
```

Set File Sending Facility (FHS.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### FHS::setReferenceFileControlId  

**Description**

```php
public setReferenceFileControlId (string|int|array|null $value, int $position)
```

Set Reference File Control Id (FHS.12) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 12  

**Return Values**

`bool`




<hr />

