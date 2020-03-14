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

    /** @test
     * @throws \Aranyasen\Exceptions\HL7Exception
     * @throws \ReflectionException
     * @throws \Exception
     */
    public function a_MSH_can_be_provided_to_get_the_fields_from(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|");
        $msh = new MSH(['MSH', '^~\&', 'HL7 Corp', 'HL7 HQ', 'VISION', 'MISYS', '200404061744', '', ['DFT', 'P03'], 'TC-22222', 'T', '2.3']);
        $ack = new ACK($msg, $msh);
        $this->assertSame("MSH|^~\&|VISION|MISYS|HL7 Corp|HL7 HQ|||ACK|\nMSA|AA|TC-22222|\n", $ack->toString(true));
    }

    /** @test
     * @throws \Aranyasen\Exceptions\HL7Exception
     * @throws \ReflectionException
     */
    public function globals_can_be_passed_to_constructor(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|");
        $ack = new ACK($msg, null, ['HL7_VERSION' => '2.5']);
        $this->assertSame("MSH|^~\&|1||||||ACK|\nMSA|AA|\n", $ack->toString(true));
    }
}
