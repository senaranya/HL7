# Aranyasen\HL7\Message  

Class specifying the HL7 message, both request and response.

In general one needn't create an instance of the Message class directly, but use the HL7 factory class to create one.
When adding segments, note that the segment index starts at 0, so to get the first segment, do
```php $msg->getSegmentByIndex(0) ```

The segment separator defaults to \015. To change this, set the global variable $SEGMENT_SEPARATOR.  





## Methods

| Name | Description |
|------|-------------|
|[__construct](#message__construct)|Constructor for Message. Consider using the HL7 factory to obtain a message instead.|
|[addSegment](#messageaddsegment)|Append a segment to the end of the message|
|[getFirstSegmentInstance](#messagegetfirstsegmentinstance)|Return the first segment with given name in the message|
|[getSegmentAsString](#messagegetsegmentasstring)|Get the segment identified by index as string, using the messages separators.|
|[getSegmentByIndex](#messagegetsegmentbyindex)|Return the segment specified by $index.|
|[getSegmentFieldAsString](#messagegetsegmentfieldasstring)|Get the field identified by $fieldIndex from segment $segmentIndex.|
|[getSegmentIndex](#messagegetsegmentindex)||
|[getSegments](#messagegetsegments)|Return an array containing all segments in the right order.|
|[getSegmentsByName](#messagegetsegmentsbyname)|Return an array of all segments with the given name|
|[hasSegment](#messagehassegment)|Check if given segment is present in the message object|
|[insertSegment](#messageinsertsegment)|Insert a segment.|
|[isAdt](#messageisadt)|Check if given message is an ADT|
|[isEmpty](#messageisempty)|Check if the message has any data|
|[isOrm](#messageisorm)|Check if given message is an ORM|
|[isOru](#messageisoru)|Check if given message is an ORU|
|[isSiu](#messageissiu)|Check if given message is a SIU|
|[removeSegment](#messageremovesegment)|Remove a segment from the message|
|[removeSegmentByIndex](#messageremovesegmentbyindex)|Remove the segment indexed by $index.|
|[removeSegmentsByName](#messageremovesegmentsbyname)|Remove given segment|
|[resetSegmentIndices](#messageresetsegmentindices)|Reset index attribute of each given segment, so when those are added the indices start from 1|
|[segmentToString](#messagesegmenttostring)|Convert Segment object to string|
|[setSegment](#messagesetsegment)|Set the segment on index.|
|[toFile](#messagetofile)|Write HL7 to a file|
|[toString](#messagetostring)|Return a string representation of this message.|




### Message::__construct  

**Description**

```php
public __construct (string|null $msgStr, array|null $hl7Globals, bool $keepEmptySubFields, bool $resetIndices, bool $autoIncrementIndices, bool|null $doNotSplitRepetition)
```

Constructor for Message. Consider using the HL7 factory to obtain a message instead. 

The constructor takes an optional string argument that is a string representation of a HL7 message. If the  
string representation is not a valid HL7 message. according to the specifications, undef is returned instead of  
a new instance. This means that segments should be separated within the message with the segment separator  
(defaults to \015) or a newline, and segments should be syntactically correct. When using the string argument  
constructor, make sure that you have escaped any characters that would have special meaning in PHP.  
  
The control characters and field separator will take the values from the MSH segment, if set. Otherwise defaults  
will be used. Changing the MSH fields specifying the field separator and control characters after the MSH has  
been added to the message will result in setting these values for the message.  
  
If the message couldn't be created, for example due to a erroneous HL7 message string, an error is raised. 

**Parameters**

* `(string|null) $msgStr`
* `(array|null) $hl7Globals`
: Set control characters or HL7 properties. e.g., ['HL7_VERSION' => '2.5']  
* `(bool) $keepEmptySubFields`
: Set this to true to retain empty sub-fields  
* `(bool) $resetIndices`
: Reset Indices of each segment to 1.  
* `(bool) $autoIncrementIndices`
: True: auto-increment for each instance of same segment.  
* `(bool|null) $doNotSplitRepetition`
: If true, repeated segments will be in single array instead of sub-arrays.  
Note: Since this is non-standard, it may be removed in future!  

**Return Values**

`void`


**Throws Exceptions**


`\HL7Exception`


<hr />


### Message::addSegment  

**Description**

```php
public addSegment (\Segment $segment)
```

Append a segment to the end of the message 

 

**Parameters**

* `(\Segment) $segment`

**Return Values**

`bool`




<hr />


### Message::getFirstSegmentInstance  

**Description**

```php
public getFirstSegmentInstance (string $segment)
```

Return the first segment with given name in the message 

 

**Parameters**

* `(string) $segment`
: name of the segment to return  

**Return Values**

`mixed|null`




<hr />


### Message::getSegmentAsString  

**Description**

```php
public getSegmentAsString (int $index)
```

Get the segment identified by index as string, using the messages separators. 

 

**Parameters**

* `(int) $index`
: Index for segment to get  

**Return Values**

`string|null`

> String representation of segment


<hr />


### Message::getSegmentByIndex  

**Description**

```php
public getSegmentByIndex (int $index)
```

Return the segment specified by $index. 

Note: Segment count within the message starts at 0. 

**Parameters**

* `(int) $index`
: Index where segment is inserted  

**Return Values**

`\Segment`




<hr />


### Message::getSegmentFieldAsString  

**Description**

```php
public getSegmentFieldAsString (int $segmentIndex, int $fieldIndex)
```

Get the field identified by $fieldIndex from segment $segmentIndex. 

Returns empty string if field is not set. 

**Parameters**

* `(int) $segmentIndex`
: Index for segment to get  
* `(int) $fieldIndex`
: Index for field to get  

**Return Values**

`null|string`

> String representation of field


<hr />


### Message::getSegmentIndex  

**Description**

```php
 getSegmentIndex (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### Message::getSegments  

**Description**

```php
public getSegments (void)
```

Return an array containing all segments in the right order. 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`array`

> List of all segments


<hr />


### Message::getSegmentsByName  

**Description**

```php
public getSegmentsByName (string $name)
```

Return an array of all segments with the given name 

 

**Parameters**

* `(string) $name`
: Segment name  

**Return Values**

`array`

> List of segments identified by name


<hr />


### Message::hasSegment  

**Description**

```php
public hasSegment (string $segment)
```

Check if given segment is present in the message object 

 

**Parameters**

* `(string) $segment`

**Return Values**

`bool`




<hr />


### Message::insertSegment  

**Description**

```php
public insertSegment (\Segment $segment, null|int $index)
```

Insert a segment. 

 

**Parameters**

* `(\Segment) $segment`
* `(null|int) $index`
: Index where segment is inserted  

**Return Values**

`void`


**Throws Exceptions**


`\InvalidArgumentException`


<hr />


### Message::isAdt  

**Description**

```php
public isAdt (void)
```

Check if given message is an ADT 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`bool`




<hr />


### Message::isEmpty  

**Description**

```php
public isEmpty (void)
```

Check if the message has any data 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`bool`




<hr />


### Message::isOrm  

**Description**

```php
public isOrm (void)
```

Check if given message is an ORM 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`bool`




<hr />


### Message::isOru  

**Description**

```php
public isOru (void)
```

Check if given message is an ORU 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`bool`




<hr />


### Message::isSiu  

**Description**

```php
public isSiu (void)
```

Check if given message is a SIU 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`bool`




<hr />


### Message::removeSegment  

**Description**

```php
public removeSegment (\Segment $segment, bool $reIndex)
```

Remove a segment from the message 

 

**Parameters**

* `(\Segment) $segment`
* `(bool) $reIndex`
: After deleting, re-index remaining segments of same name  

**Return Values**

`void`


<hr />


### Message::removeSegmentByIndex  

**Description**

```php
public removeSegmentByIndex (int $index)
```

Remove the segment indexed by $index. 

If it doesn't exist, nothing happens, if it does, all segments  
after this one will be moved one index up. 

**Parameters**

* `(int) $index`
: Index where segment is removed  

**Return Values**

`bool`




<hr />


### Message::removeSegmentsByName  

**Description**

```php
public removeSegmentsByName (string $segmentName)
```

Remove given segment 

 

**Parameters**

* `(string) $segmentName`

**Return Values**

`int`

> Count of segments removed


<hr />


### Message::resetSegmentIndices  

**Description**

```php
public resetSegmentIndices (void)
```

Reset index attribute of each given segment, so when those are added the indices start from 1 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`




<hr />


### Message::segmentToString  

**Description**

```php
public segmentToString (\Segment $seg)
```

Convert Segment object to string 

 

**Parameters**

* `(\Segment) $seg`

**Return Values**

`string`




<hr />


### Message::setSegment  

**Description**

```php
public setSegment (\Segment $segment, int $index)
```

Set the segment on index. 

If index is out of range, or not provided, do nothing. Setting MSH on index 0 will re-validate field separator,  
control characters and hl7 version, based on MSH(1), MSH(2) and MSH(12). 

**Parameters**

* `(\Segment) $segment`
* `(int) $index`
: Index where segment is set  

**Return Values**

`bool`




**Throws Exceptions**


`\InvalidArgumentException`


<hr />


### Message::toFile  

**Description**

```php
public toFile (string $filename)
```

Write HL7 to a file 

 

**Parameters**

* `(string) $filename`

**Return Values**

`void`


**Throws Exceptions**


`\HL7Exception`


<hr />


### Message::toString  

**Description**

```php
public toString (bool $pretty)
```

Return a string representation of this message. 

This can be used to send the message over a socket to an HL7 server. To print to other output, use the $pretty  
argument as some true value. This will not use the default segment separator, but '\n' instead. 

**Parameters**

* `(bool) $pretty`
: Whether to use \n as separator or default (\r).  

**Return Values**

`mixed`

> String representation of HL7 message


**Throws Exceptions**


`\HL7Exception`


<hr />

