# Aranyasen\HL7\Segments\FTS  

FTS: File Trailer Segment
Ref: https://hl7-definition.caristix.com/v2/HL7v2.3/Segments/FTS



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getFileBatchCount](#ftsgetfilebatchcount)|Get File Batch Count (FTS.1)|
|[getFileTrailerComment](#ftsgetfiletrailercomment)|Get File Trailer Comment (FTS.2)|
|[setFileBatchCount](#ftssetfilebatchcount)|Set File Batch Count (FTS.1)|
|[setFileTrailerComment](#ftssetfiletrailercomment)|Set File Trailer Comment (FTS.2)|

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



### FTS::getFileBatchCount  

**Description**

```php
public getFileBatchCount (int $position)
```

Get File Batch Count (FTS.1) 

 

**Parameters**

* `(int) $position`
: Defaults to 1  

**Return Values**

`array|string|int|null`




<hr />


### FTS::getFileTrailerComment  

**Description**

```php
public getFileTrailerComment (int $position)
```

Get File Trailer Comment (FTS.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### FTS::setFileBatchCount  

**Description**

```php
public setFileBatchCount (string|int|array|null $value, int $position)
```

Set File Batch Count (FTS.1) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 1  

**Return Values**

`bool`




<hr />


### FTS::setFileTrailerComment  

**Description**

```php
public setFileTrailerComment (string|int|array|null $value, int $position)
```

Set File Trailer Comment (FTS.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />

