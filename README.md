## Introduction

This is a PHP-based HL7 Parsing, Generation and Sending library, inspired from the famous Perl Net-HL7 package.

## Installation

```bash
composer require aranyasen/hl7
```

## Usage
### Parsing messages
```php
// Create a Message object from a HL7 string
$msg = new Message("MSH|^~\\&|1|\rPID|||abcd|\r"); // Either \n or \r can be used as segment endings
$pid = $msg->getSegmentByIndex(1);
echo $pid->getField(3); // prints 'abcd'
echo $msg->toString(true); // Prints entire HL7 string
```
### Creating messages

```php
// Create an empty Message object, and populate MSH and PID segments... 
$msg = new Message();
$msh = new MSH();
$msg->addSegment($msh); // Message is: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\n"

$pid = new Segment('PID');
$pid->setField(1, 'abcd');
$msg->setSegment($pid, 1); // Message is now: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\nPID|abcd|\n"
```

### Send messages
```php
$ip = '127.0.0.1'; // An IP
$port = '12001'; // And Port where a HL7 listener is listening
$message = new Message($hl7String); // Create a Message object from your HL7 string 
$connection = new Connection($ip, $port); // Create a Socket and get ready to send message 
$response = $connection->send($message); // Send to the listener, and get a response back
echo $reponse->toString(true); // Prints ACK from the listener 
```

## APIs
// TODO (Generate from docblocks)

### Enhancements planned
* Getter methods to read specific data - getOutsidePID(), getProcedureCode() etc.
* Data Validation
* Search by regex and return segment/field/index

// TODO: Add tests for MSH class, Add tests for Communication class
