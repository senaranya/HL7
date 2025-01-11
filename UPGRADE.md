## 4.0
### Breaking changes
    - First segment in the Message object can only be MSH. E.g. this will now fail: `(new Message())->addSegment(new Segment('XXX'))`, so it has to be `(new Message("MSH|^~\\&|1|\r"))->addSegment(new Segment('XXX'))`
    - In `insertSegment()` method, only MSH can be inserted now in the 0th index
    - Replaced all `InvalidArgumentException` with `HL7Exception`, so update the catches accordingly
    - Dropped support for PHP 8.1. Minimum version required is now 8.2. So if your project can not be upgraded to 8.2, you'll need to continue using 3.x version
    - `withSegmentSeparator` in HL7 accepts CRLF (\r\n) as argument. Any other multi-character separator will continue to throw exception
### Non-breaking changes
    - Using `new Message()` is deprecated, and might be removed in a future version. Use HL7 factory to create a new HL7 object instead. See readme on how to use it
    - `setSegment` method is deprecated. Use `insertSegment` instead
    - In `insertSegment`, added a replace parameter to replace a current segment in place
    - Added `replaceSegment` method
    - Added `create` method in HL7 factory that is an alias to `createMessage`
