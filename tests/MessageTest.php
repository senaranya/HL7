<?php

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segment;
use Aranyasen\HL7\Segments\MSH;
use InvalidArgumentException;

class MessageTest extends TestCase
{
    public function test()
    {
        # Simple constructor
        #
        $msg = new Message();
        $seg1 = new Segment('PID');

        $seg1->setField(2, 'Foo');

        $msg->addSegment(new MSH());
        $msg->addSegment($seg1);

        $seg0 = $msg->getSegmentByIndex(0);
        $seg1 = $msg->getSegmentByIndex(1);

        $seg0->setField(3, 'XXX');

        $this->assertSame('MSH', $seg0->getName(), 'Segment 0 name MSH');
        $this->assertSame('PID', $seg1->getName(), 'Segment 1 name PID');
        $this->assertSame('XXX', $seg0->getField(3), '3d field of MSH');
        $this->assertSame('Foo', $seg1->getField(2), '2nd field of PID');

        // Check references
        $segX = $msg->getSegmentByIndex(0);
        $this->assertSame('XXX', $segX->getField(3), '3d field of MSH');

        $msg = new Message("MSH|^~\\&|1|\rPID|||xxx|\r");
        $seg0 = $msg->getSegmentByIndex(0);

        $this->assertSame('MSH|^~\\&|1|\nPID|||xxx|\n', $msg->toString(), 'String representation of message');
        $this->assertSame("MSH|^~\\&|1|\nPID|||xxx|\n", $msg->toString(true), 'Pretty print representation of message');
        $this->assertSame("^~\\&", $seg0->getField(2), 'Encoding characters (MSH(2))');

        # Constructor with components and sub-components
        #
        $msg = new Message("MSH|^~\\&|1|\rPID|||xx^x&y&z^yy^zz|\r");
        $seg1 = $msg->getSegmentByIndex(1);
        $comps = $seg1->getField(3);

        $this->assertSame($comps[0], 'xx', 'Composed field');
        $this->assertSame($comps[1][1], 'y', 'Subcomposed field');

        # Trying different field separator
        #
        $msg = new Message("MSH*^~\\&*1\rPID***xxx\r");

        $this->assertSame(
            'MSH*^~\&*1*\nPID***xxx*\n', $msg->toString(),
            'String representation of message with * as field separator'
        );

        $seg0 = $msg->getSegmentByIndex(0);

        $this->assertSame('1', $seg0->getField(3), '3d field of MSH');

        # Trying different field sep and control chars
        #
        $msg = new Message("MSH*.%#@*1\rPID***x.x@y@z.z\r");

        $seg1 = $msg->getSegmentByIndex(1);
        $comps = $seg1->getField(3);

        $this->assertSame('x', $comps[0], 'Composed field with . as separator');
        $this->assertSame('y', $comps[1][1], 'Subcomposed field with @ as separator');

        # Faulty constructor
        #
        // $this->assertSame(! defined(new Sen::HL7::Message("MSH|^~\\&*1\rPID|||xxx\r")), 'Field separator not repeated');

        $seg2 = new Segment('XXX');

        $msg->addSegment($seg2);

        $msg->removeSegmentByIndex(1);

        $seg1 = $msg->getSegmentByIndex(1);

        $this->assertSame($seg2->getName(), $seg1->getName(), 'Add/remove segment');

        $seg3 = new Segment('YYY');
        $seg4 = new Segment('ZZZ');

        $msg->insertSegment($seg3, 1);
        $msg->insertSegment($seg4, 1);

        $seg3 = $msg->getSegmentByIndex(3);

        $seg4 = $msg->getSegmentByIndex(4);

        $this->assertSame($seg2->getName(), $seg3->getName(), 'Insert segment');

        $msg->removeSegmentByIndex(1);
        $msg->removeSegmentByIndex(1);
        $msg->removeSegmentByIndex(6);

        $seg5 = new Segment('ZZ1');

        # This shouldn't be possible
        $this->expectException(InvalidArgumentException::class);
        $msg->insertSegment($seg5, 3);
        $this->assertEmpty($msg->getSegmentByIndex(3), 'Erroneous insert');

        $msg->insertSegment($seg5, 2);

        $seg2 = $msg->getSegmentByIndex(2);

        $this->assertSame($seg2->getName(), $seg5->getName(), 'Insert segment');

        $msg->setSegment($seg3, 2);

        $seg2 = $msg->getSegmentByIndex(2);

        $this->assertSame($seg2->getName(), $seg3->getName(), 'Set segment');

        $this->assertCount(1, $msg->getSegmentsByName('MSH'), 'Number of MSH segments');

        $msh2 = new MSH();

        $msg->addSegment($msh2);

        $this->assertCount(2, $msg->getSegmentsByName('MSH'), 'Added MSH segment, now two in message');

        # Ctrl chars...
        $msg = new Message();

        $msh = new MSH([]);

        $msh->setField(1, '*');
        $msh->setField(2, 'abcd');

        $msg->addSegment($msh);

        $this->assertSame('MSH*abcd*\n', $msg->toString(), 'Creating separate MSH');

        $msh->setField(1, '|');
        $msh->setField(2, "^~\\&");

        $this->assertSame('MSH|^~\\&|\n', $msg->toString(), 'Change MSH after add');

        $msh = new MSH([]);

        $msh->setField(1, '*');
        $msh->setField(2, 'abcd');
        $msg->setSegment($msh, 0);

        $this->assertSame('MSH*abcd*\n', $msg->toString(), 'New MSH with setSegment');

        $str = 'MSH|^~\&|Aranya HL7|Aranya HQ|VISION|MISYS|200404061744||DFT^P03|TC-2743|P^T|2.3|||AL|NE||ASCII||| |';

        $msg = new Message($str);

        $this->assertSame("$str\n", $msg->toString(1), 'Message from string and to string with subcomponents');

        // Segment as string
        $msg = new Message("MSH*^~\\&*1\rPID*a^b^c*a^b1&b2^c*xxx\r");
        $xxx = new Segment('XXX');
        $xxx->setField(2, ['a', ['b1', 'b2'], 'c']);

        $msg->addSegment($xxx);

        $this->assertSame("MSH*^~\\&*1*", $msg->getSegmentAsString(0), 'MSH segment as string');

        $this->assertSame('PID*a^b^c*a^b1&b2^c*xxx*', $msg->getSegmentAsString(1), 'PID segment as string');
        $this->assertSame('XXX**a^b1&b2^c*', $msg->getSegmentAsString(2), 'XXX segment as string');

        // Get segment field as string
        $this->assertSame('1', $msg->getSegmentFieldAsString(0, 3), 'MSH(3) as string');
        $this->assertSame('a^b1&b2^c', $msg->getSegmentFieldAsString(1, 2), 'PID(2) as string');
    }
}
