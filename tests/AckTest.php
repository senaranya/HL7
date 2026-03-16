<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7;
use Aranyasen\HL7\Message;
use Aranyasen\HL7\Messages\ACK;
use Aranyasen\HL7\Segments\MSH;
use Exception;
use PHPUnit\Framework\Attributes\Test;

class AckTest extends TestCase
{
    #[Test] public function it_uses_CA_for_enhanced_acknowledgement_when_msh_15_or_16_is_present(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');

        $msh->setField(15, 'AL');
        $msh->setField(16, 'NE');

        $ack = new ACK($msg);
        $msa = $ack->getSegmentByIndex(1);

        self::assertSame('CA', $msa->getField(1));
    }

    #[Test] public function it_uses_CA_when_only_msh_16_is_present(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');
        $msh->setField(15);
        $msh->setField(16, 'NE');

        $ack = new ACK($msg);
        $msa = $ack->getSegmentByIndex(1);

        self::assertSame('CA', $msa->getField(1));
    }

    #[Test] public function it_uses_AA_for_normal_acknowledgement_when_msh_15_and_16_are_missing(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');
        $msh->setField(16);
        $msh->setField(15);

        $ack = new ACK($msg);
        $msa = $ack->getSegmentByIndex(1);

        self::assertSame('AA', $msa->getField(1));
    }

    #[Test] public function it_prefixes_single_character_ack_code_in_normal_mode(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');
        $msh->setField(16);
        $msh->setField(15);

        $ack = new ACK($msg);
        $msa = $ack->getSegmentByIndex(1);

        $ack->setAckCode('E');

        self::assertSame('AE', $msa->getField(1));
    }

    #[Test] public function it_keeps_explicit_two_character_ack_code(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');
        $msh->setField(16);
        $msh->setField(15);

        $ack = new ACK($msg);
        $msa = $ack->getSegmentByIndex(1);

        $ack->setAckCode('CR');

        self::assertSame('CR', $msa->getField(1));
    }

    #[Test] public function it_sets_acknowledgement_message_when_provided_with_ack_code(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');
        $msh->setField(16);
        $msh->setField(15);

        $ack = new ACK($msg);
        $msa = $ack->getSegmentByIndex(1);

        $ack->setAckCode('CR', 'XX');

        self::assertSame('CR', $msa->getField(1));
        self::assertSame('XX', $msa->getField(3));
    }

    #[Test] public function it_copies_selected_msh_fields_from_request_message(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');
        $msh->setField(16, 'NE');
        $msh->setField(11, 'P');
        $msh->setField(12, '2.4');
        $msh->setField(15, 'NE');

        $ack = new ACK($msg);
        $ackMsh = $ack->getSegmentByIndex(0);

        self::assertSame('P', $ackMsh->getField(11));
        self::assertSame('2.4', $ackMsh->getField(12));
        self::assertSame('NE', $ackMsh->getField(15));
        self::assertSame('NE', $ackMsh->getField(16));
    }

    #[Test] public function it_sets_error_message_and_uses_CE_in_enhanced_mode(): void
    {
        $msg = HL7::build()->create();
        $msh = $msg->getFirstSegmentInstance('MSH');
        $msh->setField(16, 'NE');
        $msh->setField(15, 'NE');

        $ack = new ACK($msg);
        $msa = $ack->getSegmentByIndex(1);

        $ack->setErrorMessage('Some error');

        self::assertSame('Some error', $msa->getField(3));
        self::assertSame('CE', $msa->getField(1));
    }

    #[Test] public function it_creates_a_default_msh_when_request_has_no_segments(): void
    {
        $msg = new Message();
        $hl7Globals = [
            'SEGMENT_SEPARATOR' => "\r\n",
            'FIELD_SEPARATOR' => '#', // Note that this is not the default, to test that it is overridden
            'COMPONENT_SEPARATOR' => '^',
            'REPETITION_SEPARATOR' => '~',
            'ESCAPE_CHARACTER' => '\\',
            'SUBCOMPONENT_SEPARATOR' => '&',
        ];
        $ack = new ACK($msg, null, $hl7Globals);
        self::assertStringContainsString("#ACK#", $ack->toString(true));
    }

    #[Test] public function it_creates_a_default_msh_when_no_request_message_is_provided(): void
    {
        $hl7Globals = [
            'SEGMENT_SEPARATOR' => "\r\n",
            'FIELD_SEPARATOR' => '#', // Note that this is not the default, to test that it is overridden
            'COMPONENT_SEPARATOR' => '^',
            'REPETITION_SEPARATOR' => '~',
            'ESCAPE_CHARACTER' => '\\',
            'SUBCOMPONENT_SEPARATOR' => '&',
        ];
        $ack = new ACK(null, null, $hl7Globals);
        self::assertStringContainsString("#ACK#", $ack->toString(true));
    }

    /**
     * @throws Exception
     */
    #[Test] public function a_MSH_can_be_provided_to_get_the_fields_from(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|");
        $msh = new MSH(
            [
                'MSH', '^~\&', 'HL7 Corp', 'HL7 HQ', 'VISION', 'MISYS', '200404061744', '', ['DFT', 'P03'], 'TC-22222',
                'T', '2.3',
            ]
        );
        $ack = new ACK($msg, $msh);
        self::assertSame("MSH|^~\&|VISION|MISYS|HL7 Corp|HL7 HQ|||ACK|\nMSA|AA|TC-22222|\n", $ack->toString(true));
    }

    /**
     * @throws Exception
     */
    #[Test] public function globals_can_be_passed_to_constructor(): void
    {
        $msg = new Message("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|");
        $ack = new ACK($msg, null, ['SEGMENT_SEPARATOR' => '\r\n']);
        self::assertSame("MSH|^~\&|1||||||ACK|\r\nMSA|AA|\r\n", $ack->toString(true));
    }
}
