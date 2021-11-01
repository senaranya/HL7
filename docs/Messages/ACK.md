# Aranyasen\HL7\Messages\ACK  





## Extend:

Aranyasen\HL7\Message

## Methods

| Name | Description |
|------|-------------|
|[setAckCode](#acksetackcode)|Set the acknowledgement code for the acknowledgement.|
|[setErrorMessage](#ackseterrormessage)|Set the error message for acknowledgement.|

## Inherited methods

| Name | Description |
|------|-------------|
|__construct|Constructor for Message. Consider using the HL7 factory to obtain a message instead.|
|addSegment|Append a segment to the end of the message|
|getFirstSegmentInstance|Return the first segment with given name in the message|
|getSegmentAsString|Get the segment identified by index as string, using the messages separators.|
|getSegmentByIndex|Return the segment specified by $index.|
|getSegmentFieldAsString|Get the field identified by $fieldIndex from segment $segmentIndex.|
| [getSegmentIndex](https://secure.php.net/manual/en/aranyasen\hl7\message.getsegmentindex.php) | - |
|getSegments|Return an array containing all segments in the right order.|
|getSegmentsByName|Return an array of all segments with the given name|
|hasSegment|Check if given segment is present in the message object|
|insertSegment|Insert a segment.|
|isAdt|Check if given message is an ADT|
|isEmpty|Check if the message has any data|
|isOrm|Check if given message is an ORM|
|isOru|Check if given message is an ORU|
|isSiu|Check if given message is a SIU|
|removeSegment|Remove a segment from the message|
|removeSegmentByIndex|Remove the segment indexed by $index.|
|removeSegmentsByName|Remove given segment|
|resetSegmentIndices|Reset index attribute of each given segment, so when those are added the indices start from 1|
|segmentToString|Convert Segment object to string|
|setSegment|Set the segment on index.|
|toFile|Write HL7 to a file|
|toString|Return a string representation of this message.|



### ACK::setAckCode  

**Description**

```php
public setAckCode (string $code, string|null $msg)
```

Set the acknowledgement code for the acknowledgement. 

Code should be one of: A, E, R. Codes can be prepended with C or A, denoting enhanced or normal acknowledge mode.  
This denotes: accept, general error and reject respectively. The ACK module will determine the right answer mode  
(normal or enhanced) based upon the request, if not provided. The message provided in $msg will be set in MSA 3. 

**Parameters**

* `(string) $code`
: Code to use in acknowledgement  
* `(string|null) $msg`
: Acknowledgement message  

**Return Values**

`bool`




<hr />


### ACK::setErrorMessage  

**Description**

```php
public setErrorMessage (string $msg)
```

Set the error message for acknowledgement. 

This will also set the error code to either AE or CE, depending on the mode of the incoming message. 

**Parameters**

* `(string) $msg`
: Error message  

**Return Values**

`void`


<hr />

