# Aranyasen\HL7\Segments\NTE  

NTE segment class
Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-nte-notes-comments



## Extend:

Aranyasen\HL7\Segment

## Methods

| Name | Description |
|------|-------------|
|[getComment](#ntegetcomment)||
|[getCommentType](#ntegetcommenttype)||
|[getID](#ntegetid)||
|[getSourceOfComment](#ntegetsourceofcomment)||
|[setComment](#ntesetcomment)||
|[setCommentType](#ntesetcommenttype)||
|[setID](#ntesetid)||
|[setSourceOfComment](#ntesetsourceofcomment)||

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



### NTE::getComment  

**Description**

```php
public getComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### NTE::getCommentType  

**Description**

```php
public getCommentType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### NTE::getID  

**Description**

```php
public getID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### NTE::getSourceOfComment  

**Description**

```php
public getSourceOfComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### NTE::setComment  

**Description**

```php
public setComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### NTE::setCommentType  

**Description**

```php
public setCommentType (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### NTE::setID  

**Description**

```php
public setID (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**




### NTE::setSourceOfComment  

**Description**

```php
public setSourceOfComment (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**



