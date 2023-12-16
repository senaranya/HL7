# Aranyasen\HL7\Segments\NTE  

NTE segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-nte-notes-comments



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[__destruct](#nte__destruct)||
|[getComment](#ntegetcomment)|Get Comment (OBR.3)|
|[getCommentType](#ntegetcommenttype)|Get Comment Type (OBR.4)|
|[getID](#ntegetid)|Get ID (OBR.1)|
|[getSourceOfComment](#ntegetsourceofcomment)|Get Source OfComment (OBR.2)|
|[resetIndex](#nteresetindex)|Reset index of this segment|
|[setComment](#ntesetcomment)|Set Comment (OBR.3)|
|[setCommentType](#ntesetcommenttype)|Set Comment Type (OBR.4)|
|[setID](#ntesetid)||
|[setSourceOfComment](#ntesetsourceofcomment)|Set Source OfComment (OBR.2)|

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



### NTE::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NTE::getComment  

**Description**

```php
public getComment (int $position)
```

Get Comment (OBR.3) 

 

**Parameters**

* `(int) $position`
: Defaults to 3  

**Return Values**

`array|string|int|null`




<hr />


### NTE::getCommentType  

**Description**

```php
public getCommentType (int $position)
```

Get Comment Type (OBR.4) 

 

**Parameters**

* `(int) $position`
: Defaults to 4  

**Return Values**

`array|string|int|null`




<hr />


### NTE::getID  

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


### NTE::getSourceOfComment  

**Description**

```php
public getSourceOfComment (int $position)
```

Get Source OfComment (OBR.2) 

 

**Parameters**

* `(int) $position`
: Defaults to 2  

**Return Values**

`array|string|int|null`




<hr />


### NTE::resetIndex  

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


### NTE::setComment  

**Description**

```php
public setComment (string|int|array|null $value, int $position)
```

Set Comment (OBR.3) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 3  

**Return Values**

`bool`




<hr />


### NTE::setCommentType  

**Description**

```php
public setCommentType (string|int|array|null $value, int $position)
```

Set Comment Type (OBR.4) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 4  

**Return Values**

`bool`




<hr />


### NTE::setID  

**Description**

```php
 setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### NTE::setSourceOfComment  

**Description**

```php
public setSourceOfComment (string|int|array|null $value, int $position)
```

Set Source OfComment (OBR.2) 

 

**Parameters**

* `(string|int|array|null) $value`
* `(int) $position`
: Defaults to 2  

**Return Values**

`bool`




<hr />

