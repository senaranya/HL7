## Introduction

This is a PHP-based HL7 Parsing, Generation and Sending library, inspired from the famous Perl Net-HL7 package.

## Installation

```bash
composer require aranyasen/hl7:"dev-master"
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
// TODO

## APIs
// TODO