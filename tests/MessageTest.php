<?php
declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segment;
use Aranyasen\HL7\Segments\MSH;
use InvalidArgumentException;

class MessageTest extends TestCase
{
    /** @test */
    public function subfields_can_be_retained_when_required()
    {
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|", null, true);
        $pv1 = $msg->getSegmentByIndex(1);
        $fields = $pv1->getField(3);
        $this->assertArraySubset(['', 'AAAA1', '', '', 'BB'], $fields);
    }

    /** @test */
    public function segments_can_be_added_to_existing_message()
    {
        $msg = new Message();
        $msg->addSegment(new MSH());
        $msg->addSegment(new Segment('PID'));

        // When
        $seg0 = $msg->getSegmentByIndex(0);
        $seg1 = $msg->getSegmentByIndex(1);

        // Then
        $this->assertSame('MSH', $seg0->getName(), 'Segment 0 name MSH');
        $this->assertSame('PID', $seg1->getName(), 'Segment 1 name PID');
    }

    /** @test */
    public function fields_can_be_added_to_existing_segments()
    {
        $msg = new Message();
        $msg->addSegment(new MSH());
        $msg->addSegment(new Segment('ABC'));
        $seg0 = $msg->getSegmentByIndex(0);
        $seg1 = $msg->getSegmentByIndex(1);

        $seg0->setField(3, 'XXX');
        $seg1->setField(2, 'Foo');

        $this->assertSame('XXX', $seg0->getField(3), '3d field of MSH');
        $this->assertSame('Foo', $seg1->getField(2), '2nd field of ABC');
        $this->assertSame('XXX', $msg->getSegmentByIndex(0)->getField(3), '3d field of MSH');
    }

    /** @test */
    public function control_characters_are_properly_set_from_MSH_Segment()
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|||xxx|\r");
        $this->assertSame("^~\\&", $msg->getSegmentByIndex(0)->getField(2), 'Encoding characters');
    }

    /** @test */
    public function message_can_be_converted_to_string()
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|||xxx|\r");
        $this->assertSame('MSH|^~\\&|1|\nABC|||xxx|\n', $msg->toString(), 'String representation of message');
        $this->assertSame("MSH|^~\\&|1|\nABC|||xxx|\n", $msg->toString(true), 'Pretty print representation of message');
    }

    /** @test */
    public function fields_and_subfields_can_be_set_properly()
    {
        $msg = new Message("MSH|^~\\&|1|\rABC|||xx^x&y&z^yy^zz|\r");
        $seg1 = $msg->getSegmentByIndex(1);
        $field = $seg1->getField(3);

        $this->assertSame($field[0], 'xx', 'Composed field');
        $this->assertSame($field[1][1], 'y', 'Subcomposed field');
    }

    /** @test */
    public function fields_can_be_separated_by_custom_character()
    {
        $msg = new Message("MSH*^~\\&*1\rABC***xxx\r"); // Use * as a field separator

        $this->assertSame(
            'MSH*^~\&*1*\nABC***xxx*\n', $msg->toString(),
            'String representation of message with * as field separator'
        );
        $this->assertSame('1', $msg->getSegmentByIndex(0)->getField(3), '3d field of MSH');
    }

    /** @test */
    public function components_of_a_field_can_be_separated_by_custom_character()
    {
        $msg = new Message("MSH|*~\\&|1\rABC|||x*y*z\r");
        $field = $msg->getSegmentByIndex(1)->getField(3);
        $this->assertSame('x', $field[0], 'Composed field with * as separator between subfields');
    }

    /** @test */
    public function subcomponents_can_be_separated_by_custom_character()
    {
        $msg = new Message("MSH|^~\\@|1\rABC|||a^x@y@z^b\r");
        $field = $msg->getSegmentByIndex(1)->getField(3);
        $this->assertSame('y', $field[1][1], 'Subcomposed field with @ as separator');
    }

    /** @test */
    public function segments_can_be_added_from_message()
    {
        $msg = new Message();
        $msg->addSegment(new Segment('XXX'));
        $this->assertSame('XXX', $msg->getSegmentByIndex(0)->getName(), 'Add segment');
    }

    /** @test */
    public function segments_can_be_removed_from_message()
    {
        $msg = new Message();
        $msg->addSegment(new Segment('XXX'));
        $msg->addSegment(new Segment('YYY'));
        $msg->removeSegmentByIndex(0);
        $this->assertSame('YYY', $msg->getSegmentByIndex(0)->getName(), 'Remove segment');
    }

    /** @test */
    public function a_new_segment_can_be_inserted_between_two_existing_segments()
    {
        $msg = new Message();
        $msg->addSegment(new Segment('AAA'));
        $msg->addSegment(new Segment('BBB'));
        $msg->insertSegment(new Segment('XXX'), 1);

        $this->assertSame('XXX', $msg->getSegmentByIndex(1)->getName(), 'Inserted segment');
        $this->assertSame('BBB', $msg->getSegmentByIndex(2)->getName(), 'Existing segment should shift');
    }

    /** @test */
    public function it_should_not_be_possible_to_insert_segment_beyond_last_index()
    {
        $msg = new Message();
        $this->expectException(InvalidArgumentException::class);
        $msg->insertSegment(new Segment('ZZ1'), 3);
        $this->assertEmpty($msg->getSegmentByIndex(3), 'Erroneous insert');
    }

    /** @test */
    public function a_segment_can_be_overwritten()
    {
        $msg = new Message();
        $msg->addSegment(new Segment('AAA'));
        $msg->setSegment(new Segment('BBB'), 0);
        $this->assertCount(0, $msg->getSegmentsByName('AAA'), 'No AAA segment anymore');
        $this->assertSame('BBB', $msg->getSegmentByIndex(0)->getName(), 'BBB should have replaced AAA');
    }

    /** @test */
    public function same_segment_type_can_be_added_multiple_times()
    {
        $msg = new Message();
        $msg->addSegment(new Segment('AAA'));
        $msg->addSegment(new Segment('AAA'));
        $this->assertCount(2, $msg->getSegmentsByName('AAA'), 'Message should have 2 AAAs');
    }

    /** @test */
    public function field_separator_can_be_changed_after_message_creation()
    {
        $msg = new Message();
        $msh = new MSH([]);

        $msh->setField(1, '*');
        $msh->setField(2, 'abcd');
        $msg->addSegment($msh);
        $this->assertSame('MSH*abcd*\n', $msg->toString(), '* should be used as field separator');

        $msh->setField(1, '|');
        $this->assertSame('MSH|abcd|\n', $msg->toString(), 'Field separator should be changed to |');

    }

    /** @test */
    public function a_message_can_be_constructed_from_a_string()
    {
        $str = 'MSH|^~\&|Aranya HL7|Aranya HQ|VISION|MISYS|200404061744||DFT^P03|TC-2743|P^T|2.3|||AL|NE||ASCII||| |';
        $msg = new Message($str);
        $this->assertCount(1, $msg->getSegments(), 'Message from string');
    }

    /** @test */
    public function a_message_can_be_converted_to_a_string()
    {
        $str = 'MSH|^~\&|Aranya HL7|Aranya HQ|VISION|MISYS|200404061744||DFT^P03|TC-2743|P^T|2.3|||AL|NE||ASCII||| |';
        $msg = new Message($str);
        $this->assertSame("$str\n", $msg->toString(true), 'Message to string with subcomponents');
    }

    /** @test */
    public function a_segment_can_be_retrieved_as_a_string()
    {
        $msg = new Message("MSH*^~\\&*1\rXXX*a^b^c*a^b1&b2^c*xxx\r");
        $this->assertSame("MSH*^~\\&*1*", $msg->getSegmentAsString(0), 'MSH segment as string');

        $xxx = new Segment('XXX');
        $xxx->setField(2, ['a', ['b1', 'b2'], 'c']);
        $msg->addSegment($xxx);

        $this->assertSame('XXX*a^b^c*a^b1&b2^c*xxx*', $msg->getSegmentAsString(1), 'XXX segment as string');
        $this->assertSame('XXX**a^b1&b2^c*', $msg->getSegmentAsString(2), 'XXX segment as string');

        // Get segment field as string
        $this->assertSame('1', $msg->getSegmentFieldAsString(0, 3), 'MSH(3) as string');
        $this->assertSame('a^b1&b2^c', $msg->getSegmentFieldAsString(1, 2), 'XXX(2) as string');
    }
}
