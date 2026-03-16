## v4.0
### Upgrading to 4.0
1. Ensure your environment runs **PHP 8.2 or newer**
2. Update the dependency: `composer require aranyasen/hl7:^4.0`
3. Review the breaking changes and deprecations below and update your code accordingly
4. Run your test suite and verify message creation/parsing behavior

If you encounter problems, please [open an issue](https://github.com/senaranya/HL7/issues) or [create a pull request](https://github.com/senaranya/HL7/pulls).

### Breaking changes
- Minimum PHP version is now 8.2 (See readme for previous versions)
- First segment in `Message` objects must be MSH. E.g. 
    - ❌ Old behavior: `(new Message())->addSegment(new Segment('XXX'))`
    - ✅ New behavior (4.0): `(new Message("MSH|^~\\&|1|\r"))->addSegment(new Segment('XXX'))`
- In `insertSegment()` method, only MSH can be inserted now in the 0th index
- Replaced all `InvalidArgumentException` with `HL7Exception`, so update your "catch"-blocks accordingly
- `withSegmentSeparator` in HL7 accepts CRLF (\r\n) as argument. Any other multi-character separator will continue to throw exception
### Deprecations
- ⚠️ Direct instantiation of `Message` is deprecated and may be removed in a future version.
  Use the `HL7` factory instead: `$message = HL7::build()->create();`.
  See [README.md](README.md) on how to use it
- `setSegment()` is deprecated. Use `insertSegment()` instead

### New features 
- In `insertSegment()`, added a replace parameter to replace a current segment in place
- Added `replaceSegment()` method
- Added `create()` method in HL7 factory that is an alias to `createMessage`

### Internal / project maintenance changes
- PHPUnit bumped to v11
- API docs updated
- Code has been significantly cleaned up, especially in Message class
