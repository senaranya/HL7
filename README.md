<p align="center">
<a href="https://travis-ci.org/senaranya/HL7"><img src="https://travis-ci.org/senaranya/HL7.svg?branch=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/aranyasen/hl7"><img src="https://poser.pugx.org/aranyasen/hl7/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/aranyasen/hl7"><img src="https://poser.pugx.org/aranyasen/hl7/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/aranyasen/hl7"><img src="https://poser.pugx.org/aranyasen/hl7/license" alt="License"></a>
</p>

## Introduction

A PHP-based HL7 v2.x Parsing, Generation and Sending library, inspired from the famous Perl Net-HL7 package.

## Installation

```bash
composer require aranyasen/hl7
```

## Usage
### Parsing
```php
// Create a Message object from a HL7 string
$msg = new Message("MSH|^~\\&|1|\rPID|||abcd|\r"); // Either \n or \r can be used as segment endings
$pid = $msg->getSegmentByIndex(1);
echo $pid->getField(3); // prints 'abcd'
echo $msg->toString(true); // Prints entire HL7 string
```

### Creating new messages
```php
// Create an empty Message object, and populate MSH and PID segments... 
$msg = new Message();
$msh = new MSH();
$msg->addSegment($msh); // Message is: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\n"

// Create any custom segment
$abc = new Segment('ABC');
$abc->setField(1, 'xyz');
$abc->setField(4, ['']); // Set an empty field at 4th position. 2nd and 3rd positions will be automatically set to empty
$msg->setSegment($abc, 1); // Message is now: "MSH|^~\&|||||20171116140058|||2017111614005840157||2.3|\nABC|xyz|\n"

// Create a defined segment (To know which segments are defined in this package, look into Segments/ directory)
// Advantages of defined segments over custom ones (shown above) are 1) Helpful setter methods, 2) Auto-incrementing segment index 
$pid = new PID(); // Automatically creates PID segment, and adds segment index at PID.1
$pid->setPatientName([$lastname, $firstname, $middlename, $suffix]); // Use a setter method to add patient's name at standard position (PID.5)
$pid->setField('abcd', 5); // Apart from standard setter methods, you can manually set a value at any position too

// Create a segment with empty sub-fields retained
$msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", null, true); // Third argument 'true' forces to keep all sub fields
$pv1 = $msg->getSegmentByIndex(1);
$fields = $pv1->getField(3); // $fields is ['', 'AAAA1', '', '', 'BB']
```

### Send messages to remote listeners
```php
$ip = '127.0.0.1'; // An IP
$port = '12001'; // And Port where a HL7 listener is listening
$message = new Message($hl7String); // Create a Message object from your HL7 string 
$connection = new Connection($ip, $port); // Create a Socket and get ready to send message 
$response = $connection->send($message); // Send to the listener, and get a response back
echo $reponse->toString(true); // Prints ACK from the listener 
```

## APIs
Visit [docs\README](docs/README.md) for details on available APIs

All segment level getter/setter APIs can be used in two ways - 
* If a position index isn't provided as argument (1st argument for getters, 2nd for setters), a standard index is used.  
`$pid->setPatientName('John Doe')` -> Set patient name at position 5 as per HL7 v2.3 [standard](https://corepointhealth.com/resource-center/hl7-resources/hl7-pid-segment)  
`$pid->getPatientAddress()` -> Get patient address from standard 11th position


* To use a custom position index, provide it in the argument:  
`$pid->setPatientName('John Doe', 6)` -> Set patient name at 6th position in PID segment  
`$pid->getPatientAddress(12)` -> Get patient address from 12th position  

### TODOs
* Data Validation
* Search by regex and return segment/field/index
* Define more segments