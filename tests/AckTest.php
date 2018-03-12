<?php
declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7\Message;
use Aranyasen\HL7\Messages\ACK;
use Aranyasen\HL7\Segments\MSH;

class AckTest extends TestCase
{
    public function test()
    {
        $msg = new Message();
        $msg->addSegment(new MSH());

        $msh = $msg->getSegmentByIndex(0);
        $msh->setField(15, 'AL');
        $msh->setField(16, 'NE');

        $ack = new ACK($msg);

        $seg1 = $ack->getSegmentByIndex(1);

        $this->assertSame('CA', $seg1->getField(1), 'Error code is CA');

        $msg = new Message();
        $msh = new MSH();
        $msh->setField(15);
        $msh->setField(16, 'NE');
        $msg->addSegment($msh);
        $ack = new ACK($msg);

        $seg1 = $ack->getSegmentByIndex(1);

        $this->assertSame('CA', $seg1->getField(1), 'Error code is CA');

        $msg = new Message();
        $msh = new MSH();
        $msh->setField(16);
        $msh->setField(15);
        $msg->addSegment($msh);
        $ack = new ACK($msg);

        $seg1 = $ack->getSegmentByIndex(1);

        $this->assertSame('AA', $seg1->getField(1), 'Error code is AA');

        $ack->setAckCode('E');
        $this->assertSame('AE', $seg1->getField(1), 'Error code is AE');

        $ack->setAckCode('CR');
        $this->assertSame('CR', $seg1->getField(1), 'Error code is CR');

        $ack->setAckCode('CR', 'XX');
        $this->assertSame('XX', $seg1->getField(3), 'Set message and code');


        $msg = new Message();
        $msg->addSegment(new MSH());
        $msh = $msg->getSegmentByIndex(0);
        $msh->setField(16, 'NE');
        $msh->setField(11, 'P');
        $msh->setField(12, '2.4');
        $msh->setField(15, 'NE');

        $ack = new ACK($msg);
        $seg0 = $ack->getSegmentByIndex(0);
        $this->assertSame('P', $seg0->getField(11), 'Field 11 is P');
        $this->assertSame('2.4', $seg0->getField(12), 'Field 12 is 2.4');
        $this->assertSame('NE', $seg0->getField(15), 'Field 15 is NE');
        $this->assertSame('NE', $seg0->getField(16), 'Field 16 is NE');

        $ack = new ACK($msg);
        $ack->setErrorMessage('Some error');
        $seg1 = $ack->getSegmentByIndex(1);
        $this->assertSame('Some error', $seg1->getField(3), 'Setting error message');
        $this->assertSame('CE', $seg1->getField(1), 'Code CE after setting message');
    }
}
