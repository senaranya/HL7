<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\Exceptions\HL7Exception;
use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segment;
use Aranyasen\HL7\Segments\MSH;
use Aranyasen\HL7\Segments\OBR;
use Aranyasen\HL7\Segments\OBX;
use Aranyasen\HL7\Segments\PID;
use Exception;
use InvalidArgumentException;
use DMS\PHPUnitExtensions\ArraySubset\Assert;

class MessageTest extends TestCase
{
    /** @test */
    public function segments_can_be_retrieved_using_index(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|\r");
        self::assertSame('ABC', $msg->getSegmentByIndex(1)->getName());
    }

    /** @test */
    public function segmentByIndex_returns_null_when_target_index_is_beyond_the_total_number_of_segments(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|\r");
        self::assertNull($msg->getSegmentByIndex(2));
    }

    /** @test */
    public function it_throws_error_when_field_separator_control_char_doesnt_match_the_actual_field_separators(): void
    {
        $this->expectException(HL7Exception::class);
        $msg = new Message("MSH|^~\\&#\r");
    }

    /**
     * @test
     * @throws Exception
     */
    public function subfields_can_be_retained_when_required(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", null, true);
        $pv1 = $msg->getSegmentByIndex(1);
        $fields = $pv1->getField(3);
        Assert::assertArraySubset(['', 'AAAA1', '', '', 'BB'], $fields);
    }

    /** @test */
    public function segments_can_be_added_to_existing_message(): void
    {
        $msg = new Message();
        $msg->addSegment(new MSH());
        $msg->addSegment(new Segment('PID'));

        $seg0 = $msg->getSegmentByIndex(0);
        $seg1 = $msg->getSegmentByIndex(1);

        self::assertSame('MSH', $seg0->getName(), 'Segment 0 name MSH');
        self::assertSame('PID', $seg1->getName(), 'Segment 1 name PID');
    }

    /** @test */
    public function fields_can_be_added_to_existing_segments(): void
    {
        $msg = new Message();
        $msg->addSegment(new MSH());
        $msg->addSegment(new Segment('ABC'));
        $seg0 = $msg->getSegmentByIndex(0);
        $seg1 = $msg->getSegmentByIndex(1);

        $seg0->setField(3, 'XXX');
        $seg1->setField(2, 'Foo');

        self::assertSame('XXX', $seg0->getField(3), '3d field of MSH');
        self::assertSame('Foo', $seg1->getField(2), '2nd field of ABC');
        self::assertSame('XXX', $msg->getSegmentByIndex(0)->getField(3), '3d field of MSH');
    }

    /** @test */
    public function control_characters_are_properly_set_from_MSH_Segment(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|||xxx|\r");
        self::assertSame("^~\\&", $msg->getSegmentByIndex(0)->getField(2), 'Encoding characters');
    }

    /**
     * @test
     * @throws Exception
     */
    public function control_characters_can_be_customized_using_second_argument(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nABC|||xxx|\n", ['SEGMENT_SEPARATOR' => '\r\n']);
        self::assertSame('MSH|^~\\&|1|\r\nABC|||xxx|\r\n', $msg->toString(), 'Custom line-endings');
        self::assertSame(
            "MSH|^~\\&|1|\r\nABC|||xxx|\r\n",
            $msg->toString(true),
            'toString() respects custom line-endings'
        );
    }

    /** @test
     * @throws HL7Exception
     */
    public function message_can_be_converted_to_string(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|||xxx|\r");
        self::assertSame('MSH|^~\\&|1|\nABC|||xxx|\n', $msg->toString(), 'String representation of message');
        self::assertSame(
            "MSH|^~\\&|1|\nABC|||xxx|\n",
            $msg->toString(true),
            'Pretty print representation of message'
        );
    }

    /** @test
     * @throws HL7Exception
     */
    public function toString_method_throws_exception_when_message_empty(): void
    {
        $msg = new Message();
        $this->expectException(HL7Exception::class);
        $msg->toString();
    }

    /** @test */
    public function fields_and_subfields_can_be_set_properly(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|||xx^x&y&z^yy^zz|\r");
        $segment1 = $msg->getSegmentByIndex(1);
        $fields = $segment1->getField(3);

        self::assertSame($fields[0], 'xx', 'Composed field');
        self::assertSame($fields[1][1], 'y', 'Subcomposed field');
    }

    /** @test */
    public function fields_can_be_separated_by_custom_character(): void
    {
        $msg = new Message("MSH*^~\\&*1\rABC***xxx\r"); // Use * as a field separator

        self::assertSame(
            'MSH*^~\&*1*\nABC***xxx*\n',
            $msg->toString(),
            'String representation of message with * as field separator'
        );
        self::assertSame('1', $msg->getSegmentByIndex(0)->getField(3), '3d field of MSH');
    }

    /** @test */
    public function components_of_a_field_can_be_separated_by_custom_character(): void
    {
        $msg = new Message("MSH|*~\\&|1\rABC|||x*y*z\r");
        $field = $msg->getSegmentByIndex(1)->getField(3);
        self::assertSame('x', $field[0], 'Composed field with * as separator between subfields');
    }

    /** @test */
    public function subcomponents_can_be_separated_by_custom_character(): void
    {
        $msg = new Message("MSH|^~\\@|1\rABC|||a^x@y@z^b\r");
        $field = $msg->getSegmentByIndex(1)->getField(3);
        self::assertSame('y', $field[1][1], 'Subcomposed field with @ as separator');
    }

    /** @test */
    public function segments_can_be_added_from_message(): void
    {
        $msg = new Message();
        $msg->addSegment(new Segment('XXX'));
        self::assertSame('XXX', $msg->getSegmentByIndex(0)->getName(), 'Add segment');
    }

    /** @test */
    public function segment_can_be_removed_from_message(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nAAA|1||xxx|\nBBB|1|\nBBB|2|");
        $segment = $msg->getFirstSegmentInstance('BBB');
        $msg->removeSegment($segment);
        self::assertSame("MSH|^~\\&|1|\nAAA|1||xxx|\nBBB|2|\n", $msg->toString(true));

        $msg = new Message("MSH|^~\\&|1|\nAAA|1||xxx|\nBBB|1|a|\nBBB|2|b|\nBBB|3|c|");
        $segment = $msg->getSegmentsByName('BBB')[1];
        $msg->removeSegment($segment, true);
        self::assertSame(
            "MSH|^~\\&|1|\nAAA|1||xxx|\nBBB|1|a|\nBBB|2|c|\n",
            $msg->toString(true),
            'Should reset index of subsequent segments'
        );

        $msg = new Message("MSH|^~\\&|1|\nAAA|1||xxx|\nPID|1|\nBBB|2|");
        $segment = $msg->getFirstSegmentInstanceByClass(PID::class);
        $msg->removeSegment($segment);
        self::assertSame("MSH|^~\\&|1|\nAAA|1||xxx|\nBBB|2|\n", $msg->toString(true));
    }

    /** @test */
    public function segments_can_be_removed_from_message_using_index(): void
    {
        $msg = new Message();
        $msg->addSegment(new Segment('XXX'));
        $msg->addSegment(new Segment('YYY'));
        $msg->removeSegmentByIndex(0);
        self::assertSame('YYY', $msg->getSegmentByIndex(0)->getName(), 'Remove segment');
    }

    /**
     * @test
     * @throws Exception
     */
    public function segments_can_be_removed_by_name(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nAAA|1||xxx|\nAAA|2||\nBBB|1|\n");
        $count = $msg->removeSegmentsByName('AAA');
        self::assertSame("MSH|^~\\&|1|\nBBB|1|\n", $msg->toString(true), 'Removes consecutive segments');
        self::assertSame(2, $count);

        $msg = new Message("MSH|^~\\&|1|\nAAA|1||xxx|\nBBB|1|\nAAA|2|\n");
        $count = $msg->removeSegmentsByName('AAA');
        self::assertSame("MSH|^~\\&|1|\nBBB|1|\n", $msg->toString(true), 'removes non-consecutive segments');
        self::assertSame(2, $count);
    }

    /** @test */
    public function a_new_segment_can_be_inserted_between_two_existing_segments(): void
    {
        $msg = new Message();
        $msg->addSegment(new Segment('AAA'));
        $msg->addSegment(new Segment('BBB'));
        $msg->insertSegment(new Segment('XXX'), 1);

        self::assertSame('XXX', $msg->getSegmentByIndex(1)->getName(), 'Inserted segment');
        self::assertSame('BBB', $msg->getSegmentByIndex(2)->getName(), 'Existing segment should shift');
    }

    /** @test */
    public function MSH_segment_can_be_inserted_with_new_control_characters(): void
    {
        $msg = new Message();
        $msh = new MSH(['MSH', '#~\&', '', '', '', '', '', '', ['AAA', 'BBB'], '', '', '555']);
        $msg->insertSegment($msh, 0);
        self::assertSame('MSH', $msg->getSegmentByIndex(0)->getName(), 'Inserted MSH');
        self::assertSame(
            'MSH|#~\&|||||||AAA#BBB|||555|\n',
            $msg->toString(),
            'Component separator should be # and version should be 555'
        );
    }

    /** @test */
    public function insertSegment_appends_when_the_target_index_is_same_as_the_count_of_total_segments(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rAAA|1", null, true);
        $msg->insertSegment(new Segment('XXX'), 2);
        self::assertSame('MSH|^~\&|1|\nAAA|1|\nXXX|\n', $msg->toString());
    }

    /** @test */
    public function it_should_not_be_possible_to_insert_segment_beyond_last_index(): void
    {
        $msg = new Message();
        $this->expectException(InvalidArgumentException::class);
        $msg->insertSegment(new Segment('ZZ1'), 3);
        self::assertEmpty($msg->getSegmentByIndex(3), 'Erroneous insert');
    }

    /** @test */
    public function a_segment_can_be_overwritten(): void
    {
        $msg = new Message();
        $msg->addSegment(new Segment('AAA'));
        $msg->setSegment(new Segment('BBB'), 0);
        self::assertCount(0, $msg->getSegmentsByName('AAA'), 'No AAA segment anymore');
        self::assertSame('BBB', $msg->getSegmentByIndex(0)->getName(), 'BBB should have replaced AAA');
    }

    /** @test */
    public function setSegment_throws_exception_when_the_target_index_is_beyond_total_count_of_segments(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $msg = new Message("MSH|^~\\&|1|\nAAA|1|\n");
        $msg->setSegment(new Segment('BBB'), 3);
    }

    /** @test */
    public function setSegment_resets_control_characters_when_adding_MSH_segment_at_0th_index(): void
    {
        $msg = new Message();
        $msh = new MSH(['MSH', '#~\&', '', '', '', '', '', '', ['AAA', 'BBB'], '', '', '555']);
        $msg->setSegment($msh, 0);
        self::assertSame(
            'MSH|#~\&|||||||AAA#BBB|||555|\n',
            $msg->toString(),
            'Component separator should be # and version should be 555'
        );
    }

    /** @test */
    public function same_segment_type_can_be_added_multiple_times(): void
    {
        $msg = new Message();
        $msg->addSegment(new Segment('AAA'));
        $msg->addSegment(new Segment('AAA'));
        self::assertCount(2, $msg->getSegmentsByName('AAA'), 'Message should have 2 AAAs');
    }

    /** @test
     * @throws Exception
     */
    public function field_separator_can_be_changed_after_message_creation(): void
    {
        $msg = new Message();
        $msh = new MSH([]);

        $msh->setField(1, '*');
        $msh->setField(2, 'abcd');
        $msg->addSegment($msh);
        self::assertSame('MSH*abcd*\n', $msg->toString(), '* should be used as field separator');

        $msh->setField(1, '|');
        self::assertSame('MSH|abcd|\n', $msg->toString(), 'Field separator should be changed to |');
    }

    /**
     * @test
     * @throws Exception
     */
    public function a_message_can_be_constructed_from_a_string(): void
    {
        $str = 'MSH|^~\&|Aranya HL7|Aranya HQ|VISION|MISYS|200404061744||DFT^P03|TC-2743|P^T|2.3|||AL|NE||ASCII||| |';
        $msg = new Message($str);
        self::assertCount(1, $msg->getSegments(), 'Message from string');
    }

    /** @test */
    public function a_message_can_be_converted_to_a_string(): void
    {
        $str = 'MSH|^~\&|Aranya HL7|Aranya HQ|VISION|MISYS|200404061744||DFT^P03|TC-2743|P^T|2.3|||AL|NE||ASCII||| |';
        $msg = new Message($str);
        self::assertSame("$str\n", $msg->toString(true), 'Message to string with subcomponents');
    }

    /** @test */
    public function a_segment_can_be_retrieved_as_a_string(): void
    {
        $msg = new Message("MSH*^~\\&*1\rXXX*a^b^c*a^b1&b2^c*xxx\r");
        self::assertSame("MSH*^~\\&*1*", $msg->getSegmentAsString(0), 'MSH segment as string');

        $xxx = new Segment('XXX');
        $xxx->setField(2, ['a', ['b1', 'b2'], 'c']);
        $msg->addSegment($xxx);

        self::assertSame('XXX*a^b^c*a^b1&b2^c*xxx*', $msg->getSegmentAsString(1), 'XXX segment as string');
        self::assertSame('XXX**a^b1&b2^c*', $msg->getSegmentAsString(2), 'XXX segment as string');

        // Get segment field as string
        self::assertSame('1', $msg->getSegmentFieldAsString(0, 3), 'MSH(3) as string');
        self::assertSame('a^b1&b2^c', $msg->getSegmentFieldAsString(1, 2), 'XXX(2) as string');
    }

    /** @test */
    public function getSegmentAsString_returns_null_if_the_target_segment_doesnt_exist(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nABC|");
        self::assertNull($msg->getSegmentAsString(5));
    }

    /** @test */
    public function getSegmentFieldAsString_returns_null_if_the_target_segment_doesnt_exist(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nABC|");
        self::assertNull($msg->getSegmentFieldAsString(5, 1));
    }

    /** @test */
    public function getSegmentFieldAsString_returns_null_if_the_target_field_doesnt_exist(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nABC|");
        self::assertNull($msg->getSegmentFieldAsString(1, 5));
    }

    /**
     * @test
     */
    public function an_exception_will_be_throw_in_invalid_string(): void
    {
        $this->expectException(HL7Exception::class);
        $this->expectExceptionMessage('Not a valid message: invalid control segment');
        new Message("I'm an invalid message");
    }

    /** @test */
    public function segment_ending_bar_can_be_omitted(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nABC|||xxx|\n", ['SEGMENT_ENDING_BAR' => false]);
        self::assertSame("MSH|^~\\&|1\nABC|||xxx\n", $msg->toString(true), 'No ending bar on each segment');

        $msg = new Message("MSH|^~\\&|1|\nABC|||xxx|\n");
        self::assertSame("MSH|^~\\&|1|\nABC|||xxx|\n", $msg->toString(true), 'Ending bar retains by default');
    }

    /** @test */
    public function segment_index_can_be_retrieved_from_a_message(): void
    {
        $message = new Message("MSH|^~\\&|1|\n");
        $pid = new PID();
        $message->addSegment($pid);
        self::assertSame(1, $message->getSegmentIndex($pid));

        $message = new Message("MSH|^~\\&|1|\nABC|||xxx|\n");
        $pid = new PID();
        $message->addSegment($pid);
        self::assertSame(2, $message->getSegmentIndex($pid));
    }

    /** @test */
    public function segmentIndex_returns_null_if_the_target_segment_is_not_found(): void
    {
        $message = new Message("MSH|^~\\&|1|\nABC|\n");
        self::assertNull($message->getSegmentIndex(new Segment('XXX')));
    }

    /** @test */
    public function message_type_can_be_checked(): void
    {
        $msg = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|");
        self::assertTrue($msg->isOrm());
        self::assertFalse($msg->isOru());
        self::assertFalse($msg->isSiu());

        $msg = new Message("MSH|^~\&|||||||ORU^O01||P|2.3.1|");
        self::assertTrue($msg->isOru());
        self::assertFalse($msg->isOrm());
        self::assertFalse($msg->isSiu());

        $msg = new Message("MSH|^~\&|||||||SIU^S12||P|2.3.1|");
        self::assertTrue($msg->isSiu());
        self::assertFalse($msg->isOrm());
        self::assertFalse($msg->isOru());

        $msg = new Message("MSH|^~\&|||||||ADT^A01|");
        self::assertTrue($msg->isAdt());
        self::assertFalse($msg->isOrm());
        self::assertFalse($msg->isOru());
    }

    /**
     * The segment classes use static properties to maintain segment-index. This is required as one can add new segments
     * to a given message object and expect the index to auto-increment. The side effect to this is, if you create a
     * second message, adding the same segments will now start indexing from their index in the last message instead of
     * 1! This happens because static properties are class properties, not object ones, and thus shared across all
     * objects.
     *
     * To counter this, use 'true' in the 4th argument while creating a message, or call resetSegmentIndices()
     * explicitly.
     *
     * This test verifies both.
     *
     * @test
     * @throws Exception
     */
    public function segment_id_can_be_reset_on_demand(): void
    {
        PID::resetIndex(); // Start with a clean slate

        // Create a message with a PID segment
        $msg1 = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|");
        $msg1->addSegment(new PID());
        self::assertSame(
            "MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|1|\n",
            $msg1->toString(true),
            'PID index in first message is 1'
        );

        // Create another message with a PID segment
        $msg2 = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|");
        $msg2->addSegment(new PID());
        self::assertSame(
            "MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|2|\n",
            $msg2->toString(true),
            'PID index gets incremented'
        );

        // Create another message with a PID segment, this time 4th argument to message as true
        $msg3 = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|", resetIndices: true);
        $msg3->addSegment(new PID());
        self::assertSame("MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|1|\n", $msg3->toString(true), 'PID index resets to 1');

        // Create a message with a PID segment
        $msg4 = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|");
        $msg4->addSegment(new PID());
        self::assertSame(
            "MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|2|\n",
            $msg4->toString(true),
            'PID index gets incremented'
        );

        $msg5 = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|");
        $msg5->resetSegmentIndices();
        $msg5->addSegment(new PID());
        self::assertSame("MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|1|\n", $msg5->toString(true), 'PID index resets to 1');
    }

    /**
     * @test
     * @throws Exception
     */
    public function segment_index_autoincrement_can_be_avoided(): void
    {
        $hl7String = "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|1||22^BB|\n";

        $msg = new Message($hl7String, resetIndices: true);
        self::assertSame(
            "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|2||22^BB|\n",
            $msg->toString(true),
            'without 5th argument as false, each instance is auto-incremented'
        );

        $msg = new Message($hl7String, null, true, true, false);
        self::assertSame(
            "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|1||22^BB|\n",
            $msg->toString(true)
        );

        $msg = new Message("MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "PID|||3^0\n", null, true, false, false);
        self::assertSame(
            "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "PID|||3^0|\n",
            $msg->toString(true),
            "With auto-incrementing off, a segment index shouldn't be inserted if not present"
        );
    }

    /** @test */
    public function a_segments_presence_can_be_checked(): void
    {
        $message = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|");
        self::assertFalse($message->hasSegment('PID'));

        $message->addSegment(new PID());
        self::assertTrue($message->hasSegment('PID'));
    }

    /** @test */
    public function first_of_the_given_segment_name_can_be_easily_obtained_using_a_helper_method(): void
    {
        $message = new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|");
        $message->addSegment(new PID());
        $firstPidSegment = $message->getFirstSegmentInstance('PID');
        self::assertNotNull($firstPidSegment);
        self::assertIsObject($firstPidSegment);
        self::assertInstanceOf(PID::class, $firstPidSegment);

        $firstPidSegment = $message->getFirstSegmentInstanceByClass(PID::class);
        self::assertNotNull($firstPidSegment);
        self::assertIsObject($firstPidSegment);
        self::assertInstanceOf(PID::class, $firstPidSegment);

        self::assertNull($message->getFirstSegmentInstance('XXX'), 'Non existing segment should return null');
    }

    /** @test */
    public function message_can_be_verified_as_empty(): void
    {
        self::assertTrue((new Message())->isEmpty());
        self::assertFalse((new Message("MSH|^~\&|||||||ORM^O01||P|2.3.1|"))->isEmpty());
    }

    /** @test */
    public function field_with_repetition_separator_splits_into_array_by_default(): void
    {
        $message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1"); // Repetition separator is ~
        $patientIdentifierList = $message->getSegmentByIndex(1)->getField(3);
        self::assertIsArray($patientIdentifierList);
        self::assertSame('3', $patientIdentifierList[0][0]);
        self::assertSame('0', $patientIdentifierList[0][1]);
        self::assertSame('4', $patientIdentifierList[1][0]);
        self::assertSame('1', $patientIdentifierList[1][1]);
    }

    /** @test */
    public function field_with_repetition_separator_can_be_split_into_array(): void
    {
        $message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1", doNotSplitRepetition: false);
        $patientIdentifierList = $message->getSegmentByIndex(1)->getField(3);
        self::assertIsArray($patientIdentifierList);
        self::assertSame('3', $patientIdentifierList[0][0]);
        self::assertSame('0', $patientIdentifierList[0][1]);
        self::assertSame('4', $patientIdentifierList[1][0]);
        self::assertSame('1', $patientIdentifierList[1][1]);
    }

    /** @test */
    public function repetition_separation_character_can_be_ignored(): void
    {
        $message = new Message("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1", doNotSplitRepetition: true);
        $pid = $message->getSegmentByIndex(1);
        $patientIdentifierList = $pid->getField(3);
        self::assertIsArray($patientIdentifierList);
        self::assertSame(['3', '0~4', '1'], $patientIdentifierList);
    }

    /** @test */
    public function a_message_can_be_saved_in_a_file(): void
    {
        $hl7File = __DIR__ . DIRECTORY_SEPARATOR . 'hl7_test_' . random_int(100, 1000) . '.hl7';
        $message = new Message("MSH|^~\&|");
        $message->toFile($hl7File);
        self::assertFileExists($hl7File);
        self::assertSame($message->toString(true), file_get_contents($hl7File));
        if (file_exists($hl7File)) {
            unlink($hl7File);
        }
    }

    /** @test */
    public function segments_can_be_retrieved_by_class(): void
    {
        $message = new Message(
            "MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1\nOBX|1|||\nOBX|2|||",
            doNotSplitRepetition: true
        );
        $MSHs = $message->getSegmentsByClass(MSH::class);
        self::assertCount(1, $MSHs);
        self::assertInstanceOf(MSH::class, $MSHs[0]);
        $PIDs = $message->getSegmentsByClass(PID::class);
        self::assertCount(1, $PIDs);
        self::assertInstanceOf(PID::class, $PIDs[0]);
        $OBXs = $message->getSegmentsByClass(OBX::class);
        self::assertCount(2, $OBXs);
        self::assertInstanceOf(OBX::class, $OBXs[0]);
        $OBRs = $message->getSegmentsByClass(OBR::class);
        self::assertCount(0, $OBRs);
    }

    /** @test */
    public function reindex_message_segments(): void
    {
        $message = new Message(autoIncrementIndices: false);
        $pid = new PID();
        $pid->setId(2);
        $message->addSegment($pid);

        $obx1 = new OBX();
        $obx1->setId(3);
        $obx1->setValueType("ST");
        $message->addSegment($obx1);

        $obx2 = new OBX();
        $obx2->setId(1);
        $obx2->setValueType("CWE");
        $message->addSegment($obx2);

        $message->reindexSegments();
        $PIDs = $message->getSegmentsByClass(PID::class);
        self::assertSame(1, $PIDs[0]->getId());
        $OBXs = $message->getSegmentsByClass(OBX::class);
        self::assertSame(1, $OBXs[0]->getId());
        self::assertSame("ST", $OBXs[0]->getValueType());
        self::assertSame(2, $OBXs[1]->getId());
        self::assertSame("CWE", $OBXs[1]->getValueType());
    }
}
