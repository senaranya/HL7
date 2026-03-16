## 4.0
### Breaking changes
    - Minimum PHP version is now 8.2 (See readme for previous versions)
    - First segment in the Message object can only be MSH. E.g. this will now fail: `(new Message())->addSegment(new Segment('XXX'))`, so it has to be `(new Message("MSH|^~\\&|1|\r"))->addSegment(new Segment('XXX'))`
    - In `insertSegment()` method, only MSH can be inserted now in the 0th index
    - Replaced all `InvalidArgumentException` with `HL7Exception`, so update your "catch"-blocks accordingly
    - `withSegmentSeparator` in HL7 accepts CRLF (\r\n) as argument. Any other multi-character separator will continue to throw exception
### Non-breaking changes
    - Using `new Message()` is deprecated, and might be removed in a future version. Use HL7 factory to create a new HL7 object instead. See readme on how to use it
    - `setSegment` method is deprecated. Use `insertSegment` instead
    - In `insertSegment`, added a replace parameter to replace a current segment in place
    - Updated API docs 
    - Added `replaceSegment` method
    - PhpUnit bumped to v11    
    - Added `create` method in HL7 factory that is an alias to `createMessage`
    - Code has been significantly cleaned up, especially in Message class

---

___Please report any issues you find. PRs are welcome___
