# System Specification & Requirements Document (`spec.md`)

Package: `aranyasen/hl7` (namespace `Aranyasen\`, PSR-4 → `src/`)
Purpose: create, parse, and send HL7 v2 messages over MLLP/TCP.
Current line: **4.x** (PHP 8.2+). License: MIT.

> This file is the single source of truth for functional and non-functional
> requirements and the mandatory test scenarios (see `AGENTS.md`). Behavior
> statements describe the implemented contract; **SHALL** denotes a
> requirement that must hold for all future changes.

---

## 1. Executive Overview & System Purpose

- **System Name**: HL7 — PHP HL7 v2 parser, generator, and sender (`aranyasen/hl7`, 4.x).
- **Target Audience / Primary Users**: PHP developers integrating with HL7 v2 messaging systems (EHR/LIS/PACS interfaces, hospital message brokers, MLLP endpoints). Two roles: *message clients* (parse/compose/send requests, read ACKs) and *HL7 server builders* (parse incoming requests, generate ACK/NACK responses).
- **Core Value Proposition**: A dependency-light PHP library to create, parse, and send HL7 v2 messages — a fluent factory for composition, a structured object model (message → segments → fields → components → subcomponents) for parsing, and an MLLP/TCP client for transport — originally inspired by the Net-HL7 Perl package.
- **Architectural Constraints & Stack**:
  - PHP **>= 8.2**; `ext-mbstring` required (charset conversion in `Connection::send`); `ext-sockets` optional (feature-gated to `Connection`).
  - No framework, no database, no runtime third-party dependencies (see `NFR-COMPAT-02`).
  - PSR-4 autoloading (`Aranyasen\` → `src/`), PSR-12 code style, `declare(strict_types=1)` in every source file.
  - Test/quality stack: PHPUnit ^11.5, PHPCS (`composer lint`), `phpdoc-md` (API docs), CI workflow `main_ci.yml` (see §2 and §4).

---

## 2. Architectural Boundaries & Conventions

### Domain Entities & Models

```
HL7 (factory, src/HL7.php)
  └─ create() / createMessage() → Message (src/HL7/Message.php)
        ├─ uses SegmentManagerTrait      (segment CRUD, lookup, serialization)
        ├─ uses MessageHelpersTrait      (isOru/isOrm/isAdt/isSiu, toFile, isEmpty)
        ├─ holds Segment[]
        └─ Segment (src/HL7/Segment.php)
              └─ Segments\* (MSH, PID, OBR, MSA, … 30 predefined classes)
Connection (src/HL7/Connection.php)  — MLLP/TCP client, consumes/produces Message
ACK (src/HL7/Messages/ACK.php)       — extends Message; builds acknowledgment
Exceptions: HL7Exception, HL7ConnectionException (both extend \Exception)
Request, Response                      — empty legacy placeholders (no behavior;
                                         candidates for removal)
```

- `HL7` (factory): entry point; holds `hl7Globals` config + optional HL7 input string; produces `Message`/`MSH` instances.
- `Message`: ordered `Segment[]` plus separator state (`segmentSeparator`, `withSegmentEndingFieldSeparator`, `fieldSeparator`, `componentSeparator`, `subcomponentSeparator`, `repetitionSeparator`, `escapeChar`, `hl7Version`, `doNotSplitRepetition`). Parses HL7 strings and serializes back.
- `Segment`: `fields` array where index 0 = segment name (immutable via `setField`); 1-based field indexing per HL7.
- `Segments\*`: 30 predefined segment classes with named accessors and (for sequenced segments) auto-incrementing `static $setId`.
- `Connection`: stateful TCP socket (`\013`…`\034\015` MLLP framing); produces parsed `Message` responses.
- `ACK`: two-segment (MSH, MSA) acknowledgment message; normal vs enhanced acknowledgement mode.
- `HL7Exception` / `HL7ConnectionException`: the only exception types the library throws (both extend `\Exception`).

### Object Model Invariants

1. **MSH-first**: the first segment of a `Message` SHALL be `MSH`.
2. **Field numbering**: segment fields are 1-based per HL7; index 0 stores the
   segment name and is immutable via `setField`.
   Exception: for `MSH`, field 1 *is* the field separator itself; MSH fields
   therefore count from 1 as separator, 2 as control characters, 3… normally.
3. **Control-character inheritance**: MSH.1 (field separator) and MSH.2
   (4 control chars: component, repetition, escape, subcomponent) are the
   authoritative separators for the whole message. Whenever MSH is added to,
   replaced at, or parsed as position 0, `Message::resetCtrl()` re-reads
   MSH.1, MSH.2 and MSH.12 (HL7 version) into the message state.
4. **Composite field shape**: a field with repetitions (`~`) parses to an array
   of repetitions; a repetition with components (`^`) parses to an array; a
   component with subcomponents (`&`) parses to a nested array. Plain scalar
   fields remain scalar.
5. **Auto-incrementing Set IDs**: predefined segment classes maintain a
   `static $setId` starting at 1; the constructor assigns
   `setID($setId++)` when auto-increment is enabled, and `__destruct`
   decrements it. `resetIndex()` (static) and `Message::resetSegmentIndices()`
   (scans `src/HL7/Segments/*.php`) reset counters. This static state is the
   known cross-message side effect: building several messages in one process
   without resetting continues IDs across messages — callers must use
   `HL7::…->resetIndices()->create()` or `$message->resetSegmentIndices()`.
6. **Segment class auto-discovery**: when parsing, `Message::getSegmentClass()`
   instantiates `Aranyasen\HL7\Segments\{NAME}` when that class exists, else a
   generic `Segment`. For MSH the field separator is re-injected as field 1.

Predefined segment classes (30): `AIG AIL AIP DG1 EQU EVN FHS FTS GT1 IN1 IN3
MSA MRG MSH NK1 NTE OBR OBX ORC PD1 PID PV1 PV2 RGS RXA RXR SAC SCH TQ1 TXA`.
Any other 3-letter segment name is supported via the generic `Segment` class.

### File Structure & Organization

- Code must adhere to the repository layout: `src/` (library, PSR-4 `Aranyasen\`), `tests/` (PSR-4 `Aranyasen\HL7\Tests\`), `docs/` (generated API docs), `vendor/` (installed deps), config at repo root (`composer.json`, `phpunit.xml`, `phpcs.xml`, `.phpdoc-md`).
- Tooling: `composer test` (PHPUnit with `--coverage-text --testdox`), `composer lint` (PHPCS via `phpcs.phar`), optional `phpinsights`, `vendor/bin/phpdoc-md` for API docs.

Technical requirements table (binding):

| Item | Requirement |
|---|---|
| PHP runtime | >= 8.2 |
| Required extension | `ext-mbstring` (charset conversion in `Connection::send`) |
| Optional extension | `ext-sockets` (only for `Connection`; absence must throw `HL7ConnectionException` at construction, not fatal) |
| Dev dependencies | `phpunit/phpunit ^11.5`, `ext-pcntl`, `ext-sockets` |
| Autoloading | PSR-4: `Aranyasen\` → `src/`; tests under `Aranyasen\HL7\Tests\` → `tests/` |
| Code style | PSR-12 enforced via PHPCS (`phpcs.xml`, `composer lint`); `declare(strict_types=1)` in every source file |
| API docs | PHPDoc required on public API; `docs/` generated with `phpdoc-md` (`.phpdoc-md`) |
| Tooling | `composer test` (PHPUnit, coverage, testdox); `composer lint`; optional `phpinsights` |

### Dependencies & External Services

- PHP core standard library + `ext-mbstring` (required).
- `ext-sockets` — optional, used solely by `Connection`; its absence is a caught, typed failure (`HL7ConnectionException`), never a fatal error.
- External service: a remote **MLLP HL7 listener** (TCP) that the `Connection` client talks to; the library performs no other network I/O.
- No third-party Composer packages at runtime.

### Change Process / Definition of Done (per change)

1. Change implemented in `src/`; all callers of changed contracts migrated (clean cutover; no shims beyond documented deprecations).
2. Happy-path and negative tests added/updated per §5 for the touched behavior.
3. `composer test` and `composer lint` pass.
4. Public API docs (PHPDoc / `docs/`) updated if the public surface changed.
5. `README.md` / `UPGRADE.md` updated for user-visible or breaking changes.
6. Branch created/finished with `git flow` per `AGENTS.md`.

---

## 3. Functional Requirements

### 3.1 `HL7` factory (`src/HL7.php`)

- **Description**: Fluent factory — the primary, non-deprecated entry point for creating `Message` and `MSH` objects with configurable separators, version, and parsing behavior.
- **User Story**: As a developer building HL7 messages, I want a fluent builder with overridable defaults, so that I can compose or parse messages without touching low-level constructor arguments.
- **Inputs**:
  - `hl7String` (`string`, optional, via `from()`): raw HL7 message text to parse.
  - separator values (`string`): single character, except segment separator which may be CRLF.
  - flags (`bool`): `keepEmptySubfields`, `resetIndices`, `autoIncrementIndices`, `doNotSplitRepetition`, `withSegmentEndingFieldSeparator`.
  - `hl7Version` (`string`): e.g. `2.3`, `2.5`.
- **Outputs**:
  - `create()` / `createMessage()` → `Message`.
  - `createMSH()` → `MSH`.
  - All fluent setters → the same factory instance (chainable).
- **Pre-conditions**: none (factory is stateless across instances).
- **Post-conditions**: produced `Message` carries the factory's `hl7Globals` as its effective defaults.

| Requirement ID | Requirement |
|---|---|
| `FR-FA-01` | `HL7::build()` returns a factory pre-configured with defaults (see table below). `HL7::from(string $hl7)` returns a factory carrying that string. |
| `FR-FA-02` | `create()` (alias of `createMessage()`) returns a `Message`. With `build()`, the message contains a single generated `MSH`. With `from($s)`, the message is parsed from `$s`. |
| `FR-FA-03` | `createMSH()` returns an `MSH` built from the factory's globals. |
| `FR-FA-04` | Fluent setters return the same factory instance: `withFieldSeparator`, `withComponentSeparator`, `withSubcomponentSeparator`, `withRepetitionSeparator`, `withEscapeCharacter`, `withSegmentEndingFieldSeparator(bool)`, `withSegmentSeparator`, `withHL7Version`, `keepEmptySubfields(bool)`, `resetIndices(bool)`, `autoIncrementIndices(bool)`, `doNotSplitRepetition(bool)`. |
| `FR-FA-05` | Separator setters except `withSegmentSeparator` SHALL accept exactly one character; any other length SHALL throw `HL7Exception` ("Parameter should be a single character…"). |
| `FR-FA-06` | `withSegmentSeparator()` SHALL accept one character **or** CRLF. The 2-character literal sequences `\r\n` / `\n` / `\r` are normalized to the real control characters before validation; any other multi-character value SHALL throw `HL7Exception`. |
| `FR-FA-07` | The factory SHALL apply its globals as the `Message`'s `hl7Globals`, overriding defaults. |

Factory / message defaults:

| Key | Default |
|---|---|
| `SEGMENT_SEPARATOR` | literal `\n` (backslash-n); `toString(true)` renders it as a real newline |
| `WITH_SEGMENT_ENDING_FIELD_SEPARATOR` | `true` |
| `FIELD_SEPARATOR` | `\|` |
| `COMPONENT_SEPARATOR` | `^` |
| `SUBCOMPONENT_SEPARATOR` | `&` |
| `REPETITION_SEPARATOR` | `~` |
| `ESCAPE_CHARACTER` | `\` |
| `HL7_VERSION` | `2.3` |

### 3.2 `Message` (`src/HL7/Message.php`)

- **Description**: The HL7 message object — parses HL7 strings into the segment object model and serializes back to wire/pretty strings.
- **User Story**: As a developer, I want HL7 strings and message objects to be interchangeable, so that I can read, modify, and re-emit messages.
- **Inputs**:
  - `msgString` (`?string`): HL7 message text; segments separated by `\n`, `\r`, or the configured segment separator.
  - `hl7Globals` (`?array`): keys `SEGMENT_SEPARATOR`, `WITH_SEGMENT_ENDING_FIELD_SEPARATOR` (alias `SEGMENT_ENDING_BAR`), `FIELD_SEPARATOR`, `COMPONENT_SEPARATOR`, `SUBCOMPONENT_SEPARATOR`, `REPETITION_SEPARATOR`, `ESCAPE_CHARACTER`, `HL7_VERSION`.
  - `keepEmptySubFields` (`bool`, default `false`); `resetIndices` (`bool`, default `false`); `autoIncrementIndices` (`bool`, default `true`); `doNotSplitRepetition` (`?bool`, default `null`).
- **Outputs**: `toString(bool $pretty=false)` → serialized string; segment/field access per §3.4.
- **Pre-conditions**: input string's first segment must satisfy the control-segment validation (`FR-ME-02`).
- **Post-conditions**: message holds parsed segments in order; separator state reflects MSH.1/MSH.2/MSH.12 (invariant 3).

| Requirement ID | Requirement |
|---|---|
| `FR-ME-01` | Constructor signature: `__construct(?string $msgString, ?array $hl7Globals, bool $keepEmptySubFields=false, bool $resetIndices=false, bool $autoIncrementIndices=true, ?bool $doNotSplitRepetition=null)`. Direct instantiation is **deprecated** (use the `HL7` factory); the deprecation must remain until removed. |
| `FR-ME-02` | Parsing splits the input on `\n`, `\r`, and the configured segment separator; empty fragments are dropped. The first fragment SHALL be validated as a control segment: `^[A-Z0-9]{3}` followed by 6 separator/control characters, and the 7th character (control field) SHALL equal the field separator, else `HL7Exception` ("invalid control segment" / "field separator invalid"). |
| `FR-ME-03` | MSH.1/MSH.2 control characters parsed from the first segment override the configured separators for the whole message. |
| `FR-ME-04` | Fields are decomposed recursively: repetition → array; component → array; subcomponent → nested array. A field with a single value at each level stays scalar. |
| `FR-ME-05` | Without `keepEmptySubFields`, empty components/subcomponents are dropped (e.g. `^A^^^B` → `['', 'A', '', '', 'B']` only if kept; otherwise compressed). With it, positions are preserved exactly. |
| `FR-ME-06` | With `doNotSplitRepetition(true)`, repetition separators are NOT split: `3^0~4^1` → `['3', '0~4', '1']` (non-standard; documented as removable in future). |
| `FR-ME-07` | `toString(bool $pretty=false)` returns the serialized message. It SHALL re-apply `resetCtrl()` from segment 0 first. Empty messages SHALL throw `HL7Exception` ("Message contains no data…"). |
| `FR-ME-08` | When `WITH_SEGMENT_ENDING_FIELD_SEPARATOR` is false, the trailing field separator of every serialized segment SHALL be stripped. |
| `FR-ME-09` | `toString(true)` renders the segment separator with real `\r`/`\n` characters (the "pretty"/wire-safe form); `toString(false)` emits the configured separator as stored. |
| `FR-ME-10` | When `resetIndices(true)` is passed at construction, all predefined segment counters are reset before parsing. |
| `FR-ME-11` | MSH.12 updates the message's `hl7Version` (arrays joined with the component separator) during parsing and `resetCtrl`. |

### 3.3 `Segment` (`src/HL7/Segment.php`)

- **Description**: Base class for all segments; generic field storage with 1-based indexing, gap filling, and composite (array) field values.
- **User Story**: As a developer, I want a uniform field API for standard and custom segments, so that I can set/get arbitrary positions without per-segment code.
- **Inputs**: `name` (`string`): exactly 3 uppercase ASCII characters; `fields` (`?array`): initial field values keyed from 0 (stored from index 1).
- **Outputs**: `getField` → `string|int|array|null`; `setField` → `bool` (success); `size()` → `int`; `getFields(from,to)` → `array`.
- **Pre-conditions**: none.
- **Post-conditions**: `fields[0]` always holds the immutable segment name.

| Requirement ID | Requirement |
|---|---|
| `FR-SE-01` | Constructor `(string $name, ?array $fields=null)`; name SHALL be exactly 3 uppercase ASCII characters, else `HL7Exception`. |
| `FR-SE-02` | `fields[0]` stores the name. `setField(0, …)` SHALL have no effect (returns `false`). |
| `FR-SE-03` | `setField(int $index, string\|int\|array\|null $value='')`: fills any gap between the current last field and `$index` with `''`; empty values (per `isValueEmpty`) are rejected with `false`. The string `"0"` and int `0` SHALL be accepted as non-empty. |
| `FR-SE-04` | `getField($index)` returns `string|int|array|null`; unset → `null`. `clearField($index)` sets the field to `null`. |
| `FR-SE-05` | `getFields($from=0, ?int $to=null)` returns a slice of the fields array. `size()` = field count excluding the name. `getName()` = `fields[0]`. |

### 3.4 Segment management (`SegmentManagerTrait`, used by `Message`)

- **Description**: Segment CRUD, lookup (by index/name/class), serialization, and reindexing for the message's segment list.
- **User Story**: As a developer, I want robust positional and name-based segment operations, so that I can insert, replace, remove, and find segments safely.
- **Inputs**: `Segment` instances; integer indices (0-based segment positions); segment class names (must extend `Segment`).
- **Outputs**: mutated segment list; lookup results (`?Segment`, `array<Segment>`, `?int`, `bool`, `int` counts, `?string` serialized forms).
- **Pre-conditions**: message exists; for index 0 operations, MSH rules apply (invariant 1).
- **Post-conditions**: segment order reflects operations; internal list may hold gaps after removals (fix with `rekeySegmentsInArray()`).

| Requirement ID | Requirement |
|---|---|
| `FR-SM-01` | `addSegment($s)`: appends. If it would be the first segment, `$s` SHALL be MSH (else `HL7Exception` "First segment added to an empty Message should be MSH"); adding MSH first triggers `resetCtrl`. |
| `FR-SM-02` | `insertSegment($s, ?int $index=null, bool $replace=false)`: only MSH may go to index 0; inserting MSH at 0 when an MSH already exists requires `$replace=true` (else `HL7Exception`); index beyond segment count SHALL throw `HL7Exception`. Replacing at index 0 re-runs `resetCtrl`. |
| `FR-SM-03` | `setSegment($s, $index)` (deprecated — use `insertSegment`) and `replaceSegment($s, $index)` (in-place replace) remain available. |
| `FR-SM-04` | Lookup: `getSegmentByIndex($i)` (0-based, `null` out of range), `getSegmentIndex($s)`, `getSegmentsByName($name)` (exact name match, in message order), `hasSegment($name)` (case-insensitive input), `getFirstSegmentInstance($name)`. |
| `FR-SM-05` | Class-based: `getSegmentsByClass($class)`, `hasSegmentOfClass` / `hasSegmentByClass`, `getFirstSegmentInstanceByClass`, `removeSegmentsByClass` — all SHALL throw `HL7Exception` for a class that is not a `Segment` subclass. |
| `FR-SM-06` | Removal: `removeSegment($s, bool $reIndex=false)` (with `$reIndex`, renumbers field 1 of remaining same-name segments from 1), `removeSegmentByIndex($i)`, `removeSegmentsByName($name)` (returns count removed). |
| `FR-SM-07` | `segmentToString($s)` serializes one segment using the message's separators (MSH starts emitting fields from 2). `getSegmentAsString($i)` / `getSegmentFieldAsString($i,$j)` return `null` for missing segments/fields. |
| `FR-SM-08` | `reindexSegments()`: for every segment that has `setID`, reassigns sequential IDs (1…n) per segment name in message order. |
| `FR-SM-09` | `rekeySegmentsInArray()`: re-keys the internal segment list to be gap-free. `resetSegmentIndices()`: calls `resetIndex()` on every predefined segment class found in `src/HL7/Segments/`. |

### 3.5 Message helpers (`MessageHelpersTrait`, used by `Message`)

- **Description**: Convenience checks and file output for a `Message`.
- **User Story**: As a developer, I want quick message-type checks and file export, so that routing and persistence are one-liners.
- **Inputs**: message type predicates read MSH.9; `toFile($filename)` takes a writable path.
- **Outputs**: `bool` predicates; `toFile` writes `toString(true)` content.
- **Pre-conditions**: `isOru/isOrm/isAdt/isSiu` require an MSH segment present.
- **Post-conditions**: `toFile` leaves a parseable file on success.

| Requirement ID | Requirement |
|---|---|
| `FR-MH-01` | `toFile($filename)` writes `toString(true)`; SHALL throw `HL7Exception` if the file cannot be written. |
| `FR-MH-02` | `isOru()` / `isOrm()` / `isAdt()` / `isSiu()` inspect MSH.9's message type component (substring match). |
| `FR-MH-03` | `isEmpty()` is true when the message has no segments. |

### 3.6 Predefined segments (`src/HL7/Segments/`)

- **Description**: 30 HL7-standard segment classes extending `Segment` with named accessors at standard positions, plus special MSH behavior and (for sequenced segments) auto-incrementing Set IDs.
- **User Story**: As a developer, I want named, position-aware accessors (e.g. `setPatientName`), so that I don't have to memorize HL7 field numbers.
- **Inputs**: per-field values (`string|int|array`), each with an optional `position` override (default = HL7 standard position).
- **Outputs**: accessor returns (`string|int|array|bool|null`); `setID/getID` for sequenced segments.
- **Pre-conditions**: segment name fixed per class (constructor).
- **Post-conditions**: field state updated at standard or overridden position; MSH changes propagate to message separators (invariant 3).

| Requirement ID | Requirement |
|---|---|
| `FR-PG-01` | Every predefined segment exposes `setID/getID` at the standard position plus named `setX($value, int $position=default)` / `getX(int $position=default)` accessors mapping to the HL7 v2 standard field positions; the optional position argument allows overriding the standard position. |
| `FR-PG-02` | `MSH`: fields 1 and 2 are protected — `setField(1, …)` SHALL be rejected unless the value is exactly 1 character (field separator); `setField(2, …)` unless exactly 4 characters (control characters). Constructing without fields SHALL fill MSH.1, MSH.2, MSH.7 (current `YmdHis`), MSH.10 (`MSH.7` + random 5 digits), MSH.12 from `hl7Globals` (or the built-in defaults `|`, `^~\&`, `2.3`). |
| `FR-PG-03` | `MSH::setMessageType($v)` SHALL preserve an existing trigger event (2nd component) and vice versa for `setTriggerEvent($v)`. `getMessageType()` returns the 1st component as string; `getTriggerEvent()` returns the 2nd component or `false`. |
| `FR-PG-04` | Auto-incrementing Set IDs (invariant 5) apply to segments that define `static $setId` (e.g. PID, OBR, OBX, ORC, DG1, IN1, …), including decrement on destruct. |
| `FR-PG-05` | `PID::setSex($v)` SHALL validate against HL7 Table 0001 `A,F,M,N,O,U` and throw `HL7Exception` otherwise. (Only segment-level value validation in the library.) |
| `FR-PG-06` | `MSA` accessors: acknowledgement code (1), message control ID (2), text message (3), expected sequence number (4), delayed acknowledgement type (5), error condition (6). |

### 3.7 `Connection` (MLLP/TCP client, `src/HL7/Connection.php`)

- **Description**: TCP socket client speaking MLLP to a remote HL7 listener; sends a `Message` frame and parses the framed response.
- **User Story**: As a developer, I want a one-call send with typed failures, so that integration with an MLLP endpoint is trivial and errors are catchable.
- **Inputs**: `host` (`string`), `port` (`int`), `timeout` (`int` seconds, default 10); per-send: `Message`, `responseCharEncoding` (`string`, default `UTF-8`), `noWait` (`bool`, default `false`).
- **Outputs**: `send()` → `?Message` (parsed response, or `null` when `noWait=true`); `getSocket()` → raw `Socket`.
- **Pre-conditions**: `ext-sockets` loaded; target listener reachable (else typed exception).
- **Post-conditions**: socket remains open for further `send()` calls; closed on `close()`/destructor.

| Requirement ID | Requirement |
|---|---|
| `FR-CN-01` | `__construct(string $host, int $port, int $timeout=10)`. Requires `ext-sockets`; absence SHALL throw `HL7ConnectionException`. Failed socket creation/option-setting/connect SHALL throw `HL7ConnectionException` including `socket_strerror`. |
| `FR-CN-02` | MLLP framing: frame = `"\013" . $message->toString(true) . "\034\015"` (VT prefix, FS+CR suffix). |
| `FR-CN-03` | `send(Message $msg, string $responseCharEncoding='UTF-8', bool $noWait=false): ?Message`. Write failure SHALL throw `HL7Exception`. `$noWait=true` SHALL return `null` without reading. |
| `FR-CN-04` | Response reading: 1024-byte reads until the suffix appears at end of buffer. No data within `$timeout` seconds SHALL throw `HL7ConnectionException` ("No response received…"); data received but suffix not seen within timeout SHALL throw `HL7ConnectionException` ("Response partially received…"). |
| `FR-CN-05` | The returned `Message` is built from the response with prefix/suffix stripped and charset converted via `mb_convert_encoding` to `$responseCharEncoding`; parsing uses `keepEmptySubFields=true, resetIndices=true`. |
| `FR-CN-06` | The socket is closed on `close()` / destructor. One connection object SHALL be reusable for multiple `send()` calls. |

### 3.8 `ACK` (`src/HL7/Messages/ACK.php`)

- **Description**: Acknowledgment message builder for HL7 server use — derives an ACK/NACK from an incoming request with correct normal/enhanced mode, MSH echoing/swapping, and MSA codes.
- **User Story**: As an HL7 server implementer, I want a ready ACK response for any received message, so that I can confirm receipt without hand-building MSH/MSA.
- **Inputs**: `req` (`?Message`): the incoming request; `reqMsh` (`?MSH`): the request's MSH (enables send/recv swap + control ID echo); `hl7Globals` (`?array`): separator/version overrides.
- **Outputs**: an `ACK` (extends `Message`) with MSH + MSA; `setAckCode`/`setErrorMessage` mutate MSA.1/MSA.3.
- **Pre-conditions**: none (works with or without a request).
- **Post-conditions**: MSH.9 = `ACK`; MSA.1 carries a mode-prefixed code; MSA.2 echoes the request control ID when `reqMsh` is given.

| Requirement ID | Requirement |
|---|---|
| `FR-AC-01` | `new ACK(?Message $req=null, ?MSH $reqMsh=null, ?array $hl7Globals=null)` produces a two-segment message (MSH, MSA). |
| `FR-AC-02` | MSH is copied from the request's MSH; when `$reqMsh` is supplied, sending/receiving application & facility are swapped (MSH.3↔5, MSH.4↔6) and MSA.2 is set to the request's MSH.10. MSH.9 is forced to `ACK`. |
| `FR-AC-03` | Acknowledgement mode: enhanced (`E`) when the request MSH has field 15 or 16 (→ MSA.1 = `CA`), otherwise normal (`N`, → MSA.1 = `AA`). |
| `FR-AC-04` | `setAckCode(string $code, ?string $msg=null)`: single-character codes are prefixed with the mode letter (`C` enhanced / `A` normal) → MSA.1; `$msg` (when non-null) → MSA.3. `setErrorMessage($msg)` = `setAckCode('E', $msg)`. |
| `FR-AC-05` | Constructor `hl7Globals` (e.g. `SEGMENT_SEPARATOR`, `HL7_VERSION`) are applied to the ACK message. |

### 3.9 Exceptions

- **Description**: The complete, closed set of exception types thrown by library code.
- **User Story**: As a developer, I want predictable exception classes, so that my catch-blocks are stable across library versions.
- **Inputs/Outputs**: n/a (type contract).
- **Pre-/Post-conditions**: any error path in §3 terminates in one of these two types.

| Requirement ID | Requirement |
|---|---|
| `FR-EX-01` | All HL7 protocol/model errors SHALL throw `Aranyasen\Exceptions\HL7Exception` (never `InvalidArgumentException` or bare `Exception` from library code). |
| `FR-EX-02` | All socket/connection errors SHALL throw `Aranyasen\Exceptions\HL7ConnectionException`. |

### 3.10 Deprecated surface (must keep working until a major removal)

- `new Message(…)` direct instantiation (prefer `HL7` factory) — `@deprecated`.
- `Message::setSegment($s, $i)` (prefer `insertSegment`) — `@deprecated`.
- `hl7Globals` key `SEGMENT_ENDING_BAR` as alias of `WITH_SEGMENT_ENDING_FIELD_SEPARATOR`.
- `doNotSplitRepetition` (non-standard; documented as removable).
- `Request` / `Response` empty classes (unused legacy; removal candidate, needs deprecation first).

---

## 4. Non-Functional Requirements (NFRs)

### Performance & Scalability
- `NFR-PERF-01`: Parsing/serialization is pure string processing (regex split/implode); no I/O in the parse/serialize path, no per-field object allocation beyond segments.
- `NFR-PERF-02`: Socket reads are bounded: 1024-byte chunks accumulated until the MLLP suffix, capped by the configured timeout (default 10 s) — no unbounded reads or memory growth from a misbehaving peer.

### Security & Privacy
- `NFR-SEC-01`: Message content is untrusted input — parsing SHALL NOT execute code, allocate unbounded memory, or rely on input-validated lengths beyond the documented MSH control-segment check.
- `NFR-SEC-02`: No secrets or credentials are handled by the library; the only transport is plain TCP (no TLS layer in scope).

### Reliability & Error Handling
- `NFR-REL-01`: Closed exception contract: protocol/model errors → `HL7Exception`; connection errors → `HL7ConnectionException` (see `FR-EX-01/02`). No error path emits an uncaught fatal from library code.
- `NFR-REL-02`: Determinism: no global mutable state except the documented per-segment-class static `$setId` counters (invariant 5). No reliance on execution order beyond documented static-state behavior.

### Maintainability & Code Quality
- `NFR-MAINT-01`: `declare(strict_types=1)` in all source files; typed properties and parameter types on all new/changed code.
- `NFR-MAINT-02`: PSR-12 compliance checked in CI (`composer lint` must pass); no regressions introduced.
- `NFR-MAINT-03`: Public API methods SHALL carry PHPDoc; `docs/` (via `phpdoc-md`) SHALL be regenerated when public API changes.
- `NFR-MAINT-04`: CI (`main_ci.yml`) runs lint + full test suite on PHP 8.2+.

### Compatibility & Portability
- `NFR-COMPAT-01`: Compatibility matrix: PHP 8.2+ ↔ 4.x (7.x lines are frozen at 3.2.2 / 2.x).
- `NFR-COMPAT-02`: Zero runtime third-party dependencies beyond PHP core + `ext-mbstring`; `ext-sockets` optional (feature-gated by `Connection`).
- `NFR-COMPAT-03`: SemVer: breaking changes only in major releases; deprecated APIs carry `@deprecated` annotations and remain functional; `UPGRADE.md` documents each breaking release.

---

## 5. Explicit Test Matrix & Verification Scenarios

> **AI Instruction**: Every code change implementing functional requirements MUST include test coverage matching these exact scenarios.
>
> Per `AGENTS.md`: every behavior change requires happy-path **and** negative
> tests asserting observable behavior (output, thrown exception type, state
> changes) — not implementation details.

### Happy Path Scenarios
- `TEST-HP-01` (`FR-FA-01`, `FR-FA-02`): `HL7::build()->create()` → 1-segment message; MSH.1=`|`, MSH.2=`^~\&`, MSH.7 non-empty `YmdHis`, MSH.10 non-empty, MSH.12=`2.3`.
- `TEST-HP-02` (`FR-FA-02`): `HL7::from('MSH|…|')…->create()` → parsed segments equal input structure.
- `TEST-HP-03` (`FR-FA-04`, `FR-FA-05`): Each `with*Separator('x')` single char overrides the default in the created message (MSH.1/MSH.2 reflect it).
- `TEST-HP-04` (`FR-FA-06`): `withSegmentSeparator('\r\n')` (literal) accepted; output uses CRLF.
- `TEST-HP-05` (`FR-FA-04`, `FR-FA-07`): `withHL7Version('2.5')` → MSH.12=`2.5`.
- `TEST-HP-06` (`FR-FA-02`): `create()` and `createMessage()` return identical structures (alias).
- `TEST-HP-07` (`FR-ME-02`): Parse `MSH + N` segments with `\n`, `\r`, and `\r\n` separators → same object model.
- `TEST-HP-08` (`FR-ME-04`): Field `3^0~4^1` → `[['3','0'],['4','1']]` (repetition split).
- `TEST-HP-09` (`FR-ME-04`): Subcomponents `A&B` → nested array; single-component fields stay scalar.
- `TEST-HP-10` (`FR-ME-05`): Default drops empty subfields (compressed representation).
- `TEST-HP-11` (`FR-ME-03`): MSH.1/MSH.2 in the input override configured separators (message serializes with the parsed separators).
- `TEST-HP-12` (`FR-ME-01`, `FR-FA-04`): Default auto-increments IDs for repeated segments (e.g. two OBX → IDs 1, 2).
- `TEST-HP-13` (`FR-ME-10`, `FR-SM-09`): `resetIndices()` at build / `resetSegmentIndices()` on a message → new predefined segments start ID at 1.
- `TEST-HP-14` (`FR-SM-01`): `addSegment` on empty message with MSH → accepted (triggers `resetCtrl`).
- `TEST-HP-15` (`FR-SM-02`): Insert MSH at 0 when MSH exists, with `replace=true` → separators re-read from new MSH (resetCtrl observable via subsequent serialization).
- `TEST-HP-16` (`FR-SM-02`, `FR-SM-03`): `insertSegment`/`replaceSegment` at middle index → order preserved, neighbors shifted.
- `TEST-HP-17` (`FR-SM-06`): `removeSegment($s, reIndex: true)` renumbers same-name segment field 1; `removeSegmentsByName` returns removed count.
- `TEST-HP-18` (`FR-SM-04`): `getSegmentByIndex` out of range → `null`; `getSegmentsByName` order & exact-name match; `hasSegment('pid')` true for PID.
- `TEST-HP-19` (`FR-SM-05`): Valid class to `getSegmentsByClass` returns only matching instances; `hasSegmentOfClass` / `getFirstSegmentInstanceByClass` consistent.
- `TEST-HP-20` (`FR-SM-08`): `reindexSegments()` after manual ID tampering/gaps → sequential 1..n per name.
- `TEST-HP-21` (invariant 6): Unknown segment name (e.g. `XYZ`) parses to generic `Segment` and round-trips.
- `TEST-HP-22` (`FR-SM-07`): `segmentToString`/`getSegmentAsString` for MSH emit from field 2; for others from field 1.
- `TEST-HP-23` (`FR-SE-01`): `new Segment('ABC')` OK.
- `TEST-HP-24` (`FR-SE-03`): `setField(4, 'x')` on fresh segment fills fields 2,3 with `''`.
- `TEST-HP-25` (`FR-SE-04`, `FR-SE-05`): `clearField` → `getField` returns `null`; `size()` excludes name; `getFields(from,to)` slices.
- `TEST-HP-26` (`FR-PG-04`, invariant 5): `new PID()` ×3 → IDs 1,2,3; destroying one decrements the counter; `PID::resetIndex()` restarts at 1.
- `TEST-HP-27` (`FR-PG-01`): `PID::setPatientName` writes field 5 by default and field 6 when overridden; `getPatientAddress` reads field 11.
- `TEST-HP-28` (`FR-PG-05`): Each of `A,F,M,N,O,U` accepted by `PID::setSex`.
- `TEST-HP-29` (`FR-PG-02`): `MSH` default construction fills MSH.1/2/7/10/12; with `hl7Globals` uses given separators/version.
- `TEST-HP-30` (`FR-PG-03`): `setMessageType('ORM')` on `ORU^R01` → `ORM^R01`; `setTriggerEvent('R30')` on `ORU` → `ORU^R30`; getters return components.
- `TEST-HP-31` (`FR-PG-06`): `MSA` accessors map to fields 1–6 at standard and custom positions.
- `TEST-HP-32` (`FR-PG-01`): `OBR` accessors (placer/filler order numbers, universal service ID, result status) map to standard positions.
- `TEST-HP-33` (`FR-CN-02`, `FR-CN-03`, `FR-CN-05`): `send($msg)` to mock listener (via `tests/Hl7ListenerTrait`) → returned `Message` parses the listener's ACK; MLLP frame on the wire matches `VT + body + FS CR`.
- `TEST-HP-34` (`FR-CN-03`): `send($msg, noWait: true)` → returns `null`, no read performed.
- `TEST-HP-35` (`FR-CN-05`): Response framed with prefix+suffix is stripped before parsing; non-UTF-8 response converts without error (`responseCharEncoding`).
- `TEST-HP-36` (`FR-CN-06`): Two consecutive `send()` calls on one connection both succeed (reuse).
- `TEST-HP-37` (`FR-AC-01`, `FR-AC-02`, `FR-AC-03`): `new ACK($req)` → 2 segments; MSH.9=`ACK`; MSA.1=`AA` (normal mode).
- `TEST-HP-38` (`FR-AC-03`, `FR-AC-04`): Request MSH with field 15 or 16 set → MSA.1=`CA`; `setAckCode('R')` → `CR`.
- `TEST-HP-39` (`FR-AC-02`): `new ACK($req, $reqMsh)` → MSH.3/4 ↔ MSH.5/6 swapped; MSA.2 = request MSH.10.
- `TEST-HP-40` (`FR-AC-04`): `setAckCode('E', 'boom')` → MSA.1=`AE` (or `CE` enhanced), MSA.3=`boom`; `setErrorMessage('x')` equivalent to code `E`.
- `TEST-HP-41` (`FR-MH-01`): `toFile()` writes parseable content.
- `TEST-HP-42` (`FR-MH-02`, `FR-MH-03`): `isOru/isOrm/isAdt/isSiu/isEmpty` correct on matching/non-matching messages.
- `TEST-HP-43` (`FR-ME-02`, `FR-ME-04`, `FR-ME-07`): Round-trip: parse → `toString()` → re-parse yields identical object model for a corpus of messages (mixed segment types, repetitions, subcomponents, CRLF and LF input).
- `TEST-HP-44` (`NFR-MAINT-02`, `NFR-MAINT-04`): Full suite green under `composer test`; `composer lint` clean; no new PHP notices/warnings.

### Edge Case & Boundary Scenarios
- `TEST-EDGE-01` (`FR-ME-02`): Custom single-char segment separator round-trips.
- `TEST-EDGE-02` (`FR-ME-06`): `3^0~4^1` with `doNotSplitRepetition()` → `['3', '0~4', '1']`.
- `TEST-EDGE-03` (`FR-ME-05`): `keepEmptySubfields()` preserves positions exactly (e.g. `^A^^^B` → `['', 'A', '', '', 'B']`).
- `TEST-EDGE-04` (`FR-ME-01`, `FR-FA-04`): `autoIncrementIndices(false)` keeps repeated-segment IDs as parsed (two OBX both ID 1).
- `TEST-EDGE-05` (invariant 5): Multiple messages in one process without reset → second message continues IDs (documented side effect is preserved).
- `TEST-EDGE-06` (`FR-ME-11`): MSH.12 array form (`2^3`) → message `hl7Version` joined per component separator.
- `TEST-EDGE-07` (`FR-SE-02`, `FR-SE-03`): `setField(0, …)` → `false`; `setField(2,'0')` / `setField(2,0)` stored (string `"0"` and int `0` accepted as non-empty).
- `TEST-EDGE-08` (`FR-PG-02`): `MSH::setField(1, '||')` → `false`; `setField(2, '^~\&x')` → `false`; valid values accepted and change message separators via `resetCtrl`.
- `TEST-EDGE-09` (`FR-AC-05`): ACK constructor `hl7Globals` (`SEGMENT_SEPARATOR`, `HL7_VERSION`) honored in ACK output.
- `TEST-EDGE-10` (`FR-AC-01`): `new ACK()` with no request → valid standalone ACK with generated MSH defaults.
- `TEST-EDGE-11` (`FR-ME-01`, `FR-SM-03`): Deprecated APIs (`new Message(…)`, `setSegment`) still function as before (regression).
- `TEST-EDGE-12` (`FR-ME-01`, §3.10): `SEGMENT_ENDING_BAR=false` behaves like `WITH_SEGMENT_ENDING_FIELD_SEPARATOR=false` (regression).

### Failure & Negative Scenarios
- `TEST-NEG-01` (`FR-FA-05`): Any separator setter with a multi-character value → `HL7Exception`.
- `TEST-NEG-02` (`FR-FA-06`): `withSegmentSeparator('ab')` → `HL7Exception`.
- `TEST-NEG-03` (`FR-ME-02`): Input not starting with a 3-char uppercase segment → `HL7Exception` "invalid control segment".
- `TEST-NEG-04` (`FR-ME-02`): MSH whose 7th character ≠ field separator → `HL7Exception` "field separator invalid".
- `TEST-NEG-05` (`FR-ME-07`): `toString()` on an empty message → `HL7Exception` "Message contains no data".
- `TEST-NEG-06` (`FR-SM-01`): `addSegment` on empty message with non-MSH → `HL7Exception`.
- `TEST-NEG-07` (`FR-SM-02`): `insertSegment` non-MSH at index 0 → `HL7Exception`; index > count → `HL7Exception`.
- `TEST-NEG-08` (`FR-SM-02`): Insert MSH at 0 when MSH already exists without `replace=true` → `HL7Exception`.
- `TEST-NEG-09` (`FR-SM-05`): `getSegmentsByClass('stdClass')` → `HL7Exception`.
- `TEST-NEG-10` (`FR-SE-01`): `new Segment('abc')` / `'AB'` / `''` → `HL7Exception`.
- `TEST-NEG-11` (`FR-PG-05`): `PID::setSex('X')` → `HL7Exception`.
- `TEST-NEG-12` (`FR-CN-01`): Unreachable host → `HL7ConnectionException` mentioning connect failure.
- `TEST-NEG-13` (`FR-CN-04`): Listener accepts frame but sends no response → `HL7ConnectionException` ("No response received…") after timeout.
- `TEST-NEG-14` (`FR-CN-04`): Listener sends partial data (no suffix) until timeout → `HL7ConnectionException` ("Response partially received…").
- `TEST-NEG-15` (`FR-EX-01`): Every `HL7Exception` documented in §3 is the thrown type (assert class, not just "throws").
- `TEST-NEG-16` (`FR-CN-01`): `Connection` without ext-sockets → `HL7ConnectionException` (skip gracefully if extension present).
- `TEST-NEG-17` (`FR-MH-01`): `toFile()` to an unwritable path → `HL7Exception`.

---

## 6. Out of Scope / Explicit Non-Goals

- HL7 v3 / CDA / FHIR.
- MLLP *server* implementation (this library is a client only).
- Message persistence, queueing, retry policy, security/TLS layer.
- Validation of field content against HL7 data types (except where a segment class explicitly validates, e.g. `PID::setSex`).
