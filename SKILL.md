# SKILL: aranyasen/hl7

## PURPOSE
PHP library for constructing, parsing, transforming, and transmitting HL7 v2.x messages.

Supports:
- HL7 message creation (programmatic)
- HL7 string parsing
- Segment and field manipulation
- LIS ↔ HIS integration workflows
- Middleware transformation (HL7 ↔ JSON/other formats)
- Sending messages over TCP (MLLP-style)
- Receiving and interpreting ACK/NACK responses

---

## CONSTRUCTION RULE (CRITICAL)

Message objects MUST NOT be instantiated directly.

❌ DO NOT:
```php
new Message($hl7String);
```

✅ ALWAYS USE:
```php
use Aranyasen\HL7;

$message = HL7::build()->create();
```

OR:

```php
$message = HL7::from($hl7String)->create();
```

Reason:
- Ensures correct separators, encoding characters, and parsing behavior
- Prevents inconsistent internal state

---

## CORE CONCEPTS

### Message
Represents a full HL7 message:
- Ordered collection of Segment objects
- Responsible for parsing, serialization, and segment management

---

### Segment
Represents an HL7 segment (e.g., MSH, PID, OBX)

Types:
- Generic: `Segment`
- Typed: `Segments\PID`, `Segments\MSH`, etc. (preferred)

Predefined typed classes (30): `AIG AIL AIP DG1 EQU EVN FHS FTS GT1 IN1 IN3 MSA MRG MSH
NK1 NTE OBR OBX ORC PD1 PID PV1 PV2 RGS RXA RXR SAC SCH TQ1 TXA` — any other 3-letter
segment name parses to the generic `Segment`.

---

### HL7 (Factory)
Entry point for creating messages:
- Configures separators and parsing rules
- Provides safe construction methods

---

### Connection
Handles TCP communication (MLLP-style):
- Sends HL7 messages
- Receives ACK/NACK responses

---

### ACK
Builder for acknowledgment messages (HL7 server use):
- `new ACK($request, $requestMsh?)` — MSH copied from the request; when `$requestMsh` is supplied, sending/receiving are swapped (MSH.3↔5, MSH.4↔6) and MSA.2 = request MSH.10
- `setAckCode()` / `setErrorMessage()` set the MSA.1 code and MSA.3 message
- Normal mode (AA/…) vs enhanced mode (CA/…) selected automatically from the request's MSH.15/16
- Responses received from `Connection::send()` are regular `Message` objects, not `ACK`

---

## USAGE MODES

### 1. Simple Mode (default)
- Focus: ease of use
- Suitable for most integrations
- Uses helper methods and typed segments

---

### 2. Strict HL7 Mode (advanced)
- Focus: spec correctness
- Requires careful handling of:
  - Field positions
  - Components (`^`)
  - Repetitions (`~`)
  - Encoding characters

---

## INSTALLATION

```bash
composer require aranyasen/hl7
```

Requirements:
- PHP >= 8.2
- ext-mbstring (required)
- ext-sockets (optional — only needed for `Connection`; without it, `HL7ConnectionException` is thrown)

---

## QUICK START

### Parse HL7 message

```php
use Aranyasen\HL7;

// HL7::from() returns the factory; ->create() returns the Message
$message = HL7::from($rawHl7)->create();
```
---

### Create new message

```php
use Aranyasen\HL7;

// build() starts from defaults; createMessage() adds a generated MSH
$message = HL7::build()
    ->withFieldSeparator('|')
    ->withComponentSeparator('^')
    ->createMessage();
```

---

### Factory options (all fluent, return the factory)

| Option | Effect | Default |
|---|---|---|
| `withFieldSeparator` / `withComponentSeparator` / `withSubcomponentSeparator` / `withRepetitionSeparator` / `withEscapeCharacter` | Override a separator (single character, else `HL7Exception`) | `\|` `^` `&` `~` `\` |
| `withSegmentSeparator` | Segment separator — single character or CRLF | literal `\n` |
| `withSegmentEndingFieldSeparator(bool)` | Trailing field separator on each segment | `true` |
| `withHL7Version` | MSH.12 | `2.3` |
| `keepEmptySubfields(bool)` | Keep empty component positions | `false` |
| `resetIndices(bool)` | Reset all segment ID counters at build time | `false` |
| `autoIncrementIndices(bool)` | Auto-assign Set IDs while parsing | `true` |

---

## COMMON TASKS

### Get segments

```php
$message->getSegmentByIndex(1);
$message->getSegmentsByName('PID');
$message->getFirstSegmentInstance('PID');
$message->hasSegment('PID');
```

---

### Add segment

```php
use Aranyasen\HL7\Segment;

$segment = new Segment('ABC');
$segment->setField(1, 'value');

$message->addSegment($segment);
```

---

### Use typed segment (preferred)

```php
use Aranyasen\HL7\Segments\PID;

$pid = new PID();
$pid->setPatientName(['Doe', 'John']);

$message->addSegment($pid);
```

---

### Modify fields

```php
$segment->setField(2, 'value');
$value = $segment->getField(2);

$segment->clearField(2);
```

---

### Reindex segments

```php
$message->reindexSegments();
```

- Reassigns Set IDs (field 1) sequentially (1…n) per segment name, in message order, for every segment that has a `setID`.
- Required after: manual Set ID modification, or when gaps remain after removals.
- NOT required for plain adds — predefined segments (PID, OBR, OBX, …) auto-assign Set IDs via per-class static counters.
- Removals: `removeSegment($segment, reIndex: true)` renumbers remaining same-name segments.
- Resetting counters: `HL7::build()->resetIndices()` (at build time) or `$message->resetSegmentIndices()`.

Note: the static ID counters persist across messages within a single process — building
multiple messages without `resetIndices()` continues IDs across messages (documented behavior).

---

### Write to file

```php
$message->toFile('/path/to/file.hl7');
```

---

## HL7 WORKFLOWS

### LIS → HIS (Lab Result)

- Message type: ORU^R01
- Key segments:
  - MSH (header)
  - PID (patient)
  - OBR (order)
  - OBX (results)

```php
$message = HL7::from($raw);

$pid = $message->getFirstSegmentInstance('PID');
$obr = $message->getFirstSegmentInstance('OBR');
$obxSegments = $message->getSegmentsByName('OBX');
```

---

### HIS → LIS (Order)

- Message type: ORM^O01

```php
use Aranyasen\HL7\Segments\PID;

$message = HL7::build()->createMessage();

$pid = new PID();
$pid->setPatientName(['Doe', 'John']);

$message->addSegment($pid);
```

---

## MIDDLEWARE TRANSFORMATION

### HL7 → JSON

```php
$message = HL7::from($rawHl7);

$pid = $message->getFirstSegmentInstance('PID');

$data = [
    'patient_id' => $pid->getField(3),
    'name' => $pid->getField(5),
];
```

---

### JSON → HL7

```php
$message = HL7::build()->createMessage();

$pid = new \Aranyasen\HL7\Segments\PID();
$pid->setPatientName(['Doe', 'John']);

$message->addSegment($pid);
```

---

## SENDING MESSAGES (MLLP)

```php
use Aranyasen\HL7\Connection;

$conn = new Connection($ip, $port, timeout: 10); // timeout in seconds, default 10
$response = $conn->send($message);      // ?Message — parsed response (ACK)
$conn->send($message, noWait: true);    // fire-and-forget — returns null
```

- MLLP framing: `\x0b` (VT) + message + `\x1a\x0d` (FS CR)
- Throws `HL7ConnectionException` on connect failure, or when no (or only partial) response arrives within the timeout
- One connection can be reused for multiple `send()` calls

---

## ACK HANDLING

ACK messages contain an MSA segment.

### Acknowledgement codes

Normal mode (request without MSH.15/16):
- AA = Application Accept
- AE = Application Error
- AR = Application Reject

Enhanced mode (request MSH.15 or MSH.16 set):
- CA / CE / CR = Accept / Error / Reject

---

### Example

```php
$ack = (new Connection($ip, $port))->send($message);

$msa = $ack->getFirstSegmentInstance('MSA');
$code = $msa->getAcknowledgementCode();
// normal mode: codes start with 'A'; enhanced mode (request MSH.15/16) starts with 'C'
if (str_starts_with($code, 'A')) {
    // success
} else {
    // failure
}
```

---

### Building an ACK (server side)

```php
use Aranyasen\HL7\Messages\ACK;

$ack = new ACK($request, $requestMsh); // MSH copy + swap; MSA.2 = request MSH.10
$ack->setAckCode('A');                 // → AA (normal) / CA (enhanced)
$ack->setErrorMessage('Rejected');     // → AE (or CE); MSA.3 = message
```

Send the built `$ack` with `Connection::send()` like any other message.

---

## BEST PRACTICES

- ALWAYS use `HL7::build()` or `HL7::from()`
- Prefer typed segments over generic `Segment`
- Reindex after manual Set ID changes (see Reindex segments)
- Validate ACK responses in production
- Keep segment order compliant with HL7 standards
- Explicitly handle repeating fields when needed

---

## DEPRECATED (still works, avoid)

- Direct `new Message(…)` — use the `HL7` factory instead
- `Message::setSegment($s, $i)` — use `insertSegment($s, $i, $replace)`
- `doNotSplitRepetition` — non-standard; documented as removable
- `hl7Globals` key `SEGMENT_ENDING_BAR` — alias of `WITH_SEGMENT_ENDING_FIELD_SEPARATOR`

---

## EDGE CASES

- Repeating fields (`~`) produce arrays
- Missing subcomponents may be omitted
- Set IDs (field 1) may drift after manual changes or removals → `reindexSegments()`
- Separator configuration impacts parsing correctness

---

## ERROR HANDLING

Closed exception contract — the library only throws these two types:
- `Aranyasen\Exceptions\HL7Exception` — protocol/model errors (invalid control segment, non-single-char separator, MSH-first / index-0 violations, invalid segment name, `PID::setSex` outside HL7 Table 0001, empty `toString()`, un-writable `toFile()` target)
- `Aranyasen\Exceptions\HL7ConnectionException` — socket errors (ext-sockets missing, connect failure, no response or partial response within timeout)

- Parsing an invalid control segment (first segment) throws — it does NOT return a partial structure
- Missing required segments do not throw at parse time — verify with `hasSegment()`
- Socket failures during transmission must be handled
- ACK responses must always be validated

---

## PERFORMANCE NOTES

- Large HL7 messages increase memory usage
- Frequent reindexing is O(n)
- Avoid repeated parsing of the same message

---

## VERSION COMPATIBILITY

- PHP >= 8.2
- Supports HL7 v2.x

---

## INTERNAL ARCHITECTURE

- Message = ordered segment collection
- Segment = indexed field structure
- HL7 factory = configuration + safe construction
- Connection = transport layer abstraction

---

## DO NOT

- Do not instantiate Message directly
- Do not ignore ACK validation
- Do not assume segment order without verification
- Do not mix manual and automatic indexing carelessly
- Do not rely on deprecated configuration or behaviors
