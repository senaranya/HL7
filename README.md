<p align="center">
<a href="https://github.com/senaranya/HL7/actions"><img src="https://github.com/senaranya/hl7/actions/workflows/main_ci.yml/badge.svg?branch=master" alt="CI Status"></a>
<a href="https://packagist.org/packages/aranyasen/hl7"><img src="https://poser.pugx.org/aranyasen/hl7/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/aranyasen/hl7"><img src="https://poser.pugx.org/aranyasen/hl7/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/aranyasen/hl7"><img src="https://poser.pugx.org/aranyasen/hl7/license" alt="License"></a>
</p>

**Important: Minimum supported PHP version has been updated to 8.0 <br>
Last supported versions: <br>
-> PHP 7.0 or 7.1 => [1.5.4](https://github.com/senaranya/HL7/tree/1.5.4)<br>
-> PHP 7.2 => [2.0.2](https://github.com/senaranya/HL7/tree/2.0.2)<br>
-> PHP 7.4 => [2.1.7](https://github.com/senaranya/HL7/tree/2.1.7)**

## Introduction

A PHP-based HL7 v2.x Parsing, Generation and Sending library, inspired from the famous Perl Net-HL7 package.

## Installation

```bash
composer require aranyasen/hl7
```

## Usage
### Import library
```php
// First, import classes from the library as needed...
use Aranyasen\HL7; // HL7 factory class
use Aranyasen\HL7\Message; // If Message is used
use Aranyasen\HL7\Segment; // If Segment is used
use Aranyasen\HL7\Segments\MSH; // If MSH is used
// ... and so on
```

### Parsing
```php
// Create a Message object from a HL7 string
$message = HL7::from("MSH|^~\\&|1|")->createMessage(); // Returns Message object

// Or, using Message class...
$message = new Message("MSH|^~\\&|1|\rPID|||abcd|\r"); // Either \n or \r can be used as segment endings

// Get string form of the message
echo $message->toString(true);

// Extracting segments and fields from a Message object...
$message->getSegmentByIndex(1); // Get the first segment
$message->getSegmentsByName('ABC'); // Get an array of all 'ABC' segments
$message->getFirstSegmentInstance('ABC'); // Returns the first ABC segment. Same as $message->getSegmentsByName('ABC')[0];

// Check if a segment is present in the message object
$message->hasSegment('ABC'); // return true or false based on whether PID is present in the $message object

// Check if a message is empty
$message = new Message();
$message->isempty(); // Returns true
```

### Composing new messages
```php
// The class `HL7` can be used to build HL7 object. It is a factory class with various helper methods to help build a hl7.
$message = HL7::build()->createMessage(); // Creates an empty message

// The HL7 factory class provides methods that can be chained together in a fluent fashion
$message = HL7::build()
    ->withComponentSeparator('#')
    ->withFieldSeparator('-')
    ->createMessage();

// Or, using Message class...
$message = new Message();
```
#### Message constructor parameters
```php
// When a message is composed using Message class, there are multiple parameters available to define the properties of the HL7.
// Note: All of these properties are available as fluent methods in HL7 factory class (shown above). So it's recommended to use that for readability

// Creating multiple message objects may have an unexpected side effect: segments start with wrong index values (Check tests/MessageTest for explanation)...
// Use 4th argument as true, or call resetSegmentIndices() on $message object to reset segment indices to 1
$message = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|", null, true, true);
// ... any segments added here will now start index from 1, as expected.
```
```php
// Sometimes you may want to have exact index values, rather than auto-incrementing for each instance of a segment
// Use 5th argument as false...
$hl7String = "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|1||22^BB|\n";
$message = new Message($hl7String, null, true, true, false); $// $message contains both OBXs with given indexes in the string
```
```php
// Create a segment with empty sub-fields retained
$message = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", null, true); // Third argument 'true' forces to keep all sub-fields
$pv1 = $message->getSegmentByIndex(1);
$fields = $pv1->getField(3); // $fields is ['', 'AAAA1', '', '', 'BB']

// Create/send message with segment-ending bar character (|) removed
$message = new Message("MSH|^~\\&|1|\nABC|||xxx\n", ['SEGMENT_ENDING_BAR' => false]);
$message->toString(true); // Returns "MSH|^~\&|1\nABC|||xxx\n"
(new Connection($ip, $port))->send($message); // Sends the message without ending bar-characters (details on Connection below)

// Specify custom values for separators, HL7 version etc.
$message = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", ['SEGMENT_SEPARATOR' => '\r\n', 'HL7_VERSION' => '2.3']);

// Segment with separator character (~) creates sub-arrays containing each sub-segment
$message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1"); // Creates [[3,0], [4,1]]

// To create a single array instead, pass 'true' as 6th argument. This may be used to retain behavior from previous releases
// Notice: Since this leads to a non-standard behavior, it may be removed in future
$message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1", null, false, false, true, true); // Creates ['3', '0~4', '1']
// or
$message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1", doNotSplitRepetition: true); // Creates ['3', '0~4', '1']
```

#### Handling segments and fields
```php
// Once a message object is created, we can now add, insert, set segments and fields.

// Create a MSH segment and add to message object
$msh = new MSH();
$message->addSegment($msh); // Message is: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\n"

// Create a custom segment
$abc = new Segment('ABC');
$abc->setField(1, 'xyz');
$abc->setField(2, 0);
$abc->setField(4, ['']); // Set an empty field at 4th position. 2nd and 3rd positions will be automatically set to empty
$abc->clearField(2); // Clear the value from field 2
$message->setSegment($abc, 1); // Message is now: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\nABC|xyz|\n"

// Create a defined segment (To know which segments are defined in this package, look into Segments/ directory)
// Advantages of defined segments over custom ones (shown above) are 1) Helpful setter methods, 2) Auto-incrementing segment index
$pid = new PID(); // Automatically creates PID segment, and adds segment index at PID.1
$pid->setPatientName([$lastname, $firstname, $middlename, $suffix]); // Use a setter method to add patient's name at standard position (PID.5)
$pid->setField('abcd', 5); // Apart from standard setter methods, you can manually set a value at any position too
unset($pid); // Destroy the segment and decrement the id number. Useful when you want to discard a segment.

// It is possible that segments get added in a way that the Set IDs/Sequence IDs within the message are not in order or leave gaps. To reset all Set/Sequence IDs in the message:

$message->reindexSegments();
```

### Send messages to remote listeners

Side note: In order to run Connection you need to install PHP ext-sockets [https://www.php.net/manual/en/sockets.installation.php](https://www.php.net/manual/en/sockets.installation.php)

```php
$ip = '127.0.0.1'; // An IP
$port = '12001'; // And Port where a HL7 listener is listening
$message = new Message($hl7String); // Create a Message object from your HL7 string

// Create a Socket and get ready to send message. Optionally add timeout in seconds as 3rd argument (default: 10 sec)
$connection = new Connection($ip, $port);
$response = $connection->send($message); // Send to the listener, and get a response back
echo $response->toString(true); // Prints ACK from the listener
```
### ACK
Handle ACK message returned from a remote HL7 listener...
```php
$ack = (new Connection($ip, $port))->send($message); // Send a HL7 to remote listener
$returnString = $ack->toString(true);
if (strpos($returnString, 'MSH') === false) {
    echo "Failed to send HL7 to 'IP' => $ip, 'Port' => $port";
}
$msa = $ack->getFirstSegmentInstance('MSA');
$ackCode = $msa->getAcknowledgementCode();
if ($ackCode[1] === 'A') {
    echo "Received ACK from remote\n";
}
else {
    echo "Received NACK from remote\n";
    echo "Error text: " . $msa->getTextMessage();
}
```
Create an ACK response from a given HL7 message:
```php
$msg = new Message("MSH|^~\\&|1|\rABC|1||^AAAA1^^^BB|", null, true);
$ackResponse = new ACK($msg);
```
Options can be passed while creating ACK object:
```php
$msg = new Message("MSH|^~\\&|1|\rABC|1||^AAAA1^^^BB|", null, true);
$ackResponse = new ACK($msg, null, ['SEGMENT_SEPARATOR' => '\r\n', 'HL7_VERSION' => '2.5']);
```

## APIs
This package exposes a number of public methods for convenient HL7 handling. Some examples are:
1) Considering you have a Message object (say, `$msg = new Message(file_get_contents('somefile.hl7'));`)
```php
    $msg->toFile('/path/to/some.hl7'); // Write to a file
    $msg->isOru(); // Check if it's an ORU
    $msg->isOrm(); // Check if it's an ORM
```

Visit [docs\README](docs/README.md) for details on available APIs

All segment level getter/setter APIs can be used in two ways -
* If a position index isn't provided as argument (1st argument for getters, 2nd for setters), a standard index is used.
`$pid->setPatientName('John Doe')` -> Set patient name at position 5 as per HL7 v2.3 [standard](https://corepointhealth.com/resource-center/hl7-resources/hl7-pid-segment)
`$pid->getPatientAddress()` -> Get patient address from standard 11th position


* To use a custom position index, provide it in the argument:
`$pid->setPatientName('John Doe', 6)` -> Set patient name at 6th position in PID segment
`$pid->getPatientAddress(12)` -> Get patient address from 12th position

### Issues
Bug reports and feature requests can be submitted on the [Github Issue Tracker](https://github.com/senaranya/HL7/issues).

### Contributing
See [CONTRIBUTING.md](CONTRIBUTING.md) for information.
