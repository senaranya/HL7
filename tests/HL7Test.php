<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\Exceptions\HL7Exception;
use Aranyasen\HL7;
use Aranyasen\HL7\Segments\PID;
use PHPUnit\Framework\Attributes\Test;

class HL7Test extends TestCase
{
    /**
     * @throws HL7Exception
     */
    #[Test] public function hl7_message_can_be_created_using_factory_class(): void
    {
        $msg = HL7::build()->create();
        self::assertIsObject($msg);
        self::assertSame(HL7\Message::class, $msg::class);
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function hl7_message_can_be_created_using_create_alias_method(): void
    {
        $msg = HL7::build()->create();
        self::assertIsObject($msg);
        self::assertSame(HL7\Message::class, $msg::class);
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function factory_creates_a_msh_segment_with_defaults_when_no_message_string_provided(): void
    {
        $msg = HL7::build()->create();
        self::assertStringContainsString('MSH|^~\&|||||', $msg->toString(true));
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function a_message_can_be_built_from_a_provided_hl7_string(): void
    {
        $msg = HL7::from("MSH|^~\\&|1|\rABC|||xxx|\r")->create();
        self::assertSame("MSH|^~\\&|1|\nABC|||xxx|\n", $msg->toString(true));
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function hl7_property_in_a_given_hl7_string_can_be_overridden(): void
    {
        self::markTestSkipped('property cannot be overridden yet in Message() constructor');
        $msg = HL7::from("MSH|^~\\&|1|\rABC|||xxx|\r")
            ->withEscapeCharacter('=')
            ->create();
        self::assertSame("MSH|^~=&|1|\nABC|||xxx|\n", $msg->toString(true));
    }
    /**
     * @throws HL7Exception
     */
    #[Test] public function hl7_properties_can_be_set_using_chained_methods(): void
    {
        $msg = HL7::build()
            ->withSegmentSeparator('[')
            ->withFieldSeparator('#')
            ->withComponentSeparator('*')
            ->withSubcomponentSeparator('}')
            ->withRepetitionSeparator('`')
            ->withEscapeCharacter('=')
            ->withHL7Version('555.666')
            ->create();
        self::assertStringContainsString('MSH#*`=}#', $msg->toString(true));
    }

    #[Test] public function empty_subfields_can_be_retained_if_needed(): void
    {
        $msg = HL7::from("MSH|^~\\&|1|\rPV1|1|O|^AAAA1^^^BB|")->keepEmptySubfields()->create();
        $this->assertSame(['', 'AAAA1', '', '', 'BB'], $msg->getSegmentByIndex(1)->getField(3));
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function indices_of_each_segment_can_be_reset_when_message_is_composed(): void
    {
        // Create a message with a PID segment
        $msg1 = HL7::from("MSH|^~\&|||||||ORM^O01||P|2.3.1|")->create();
        $msg1->addSegment(new PID());
        self::assertSame(
            "MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|1|\n",
            $msg1->toString(true),
            'PID index in first message is 1'
        );

        // Create another message with a PID segment
        $msg2 = Hl7::from("MSH|^~\&|||||||ORM^O01||P|2.3.1|")->create();
        $msg2->addSegment(new PID());
        self::assertSame(
            "MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|2|\n",
            $msg2->toString(true),
            'PID index gets incremented'
        );

        // Create another message with a PID segment, this time with resetIndices()
        $msg3 = Hl7::from("MSH|^~\&|||||||ORM^O01||P|2.3.1|")
            ->resetIndices()
            ->create();
        $msg3->addSegment(new PID());
        self::assertSame("MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|1|\n", $msg3->toString(true), 'PID index resets to 1');

        // Create a message with a PID segment
        $msg4 = Hl7::from("MSH|^~\&|||||||ORM^O01||P|2.3.1|")->create();
        $msg4->addSegment(new PID());
        self::assertSame(
            "MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|2|\n",
            $msg4->toString(true),
            'PID index gets incremented'
        );

        $msg5 = Hl7::from("MSH|^~\&|||||||ORM^O01||P|2.3.1|")->create();
        $msg5->resetSegmentIndices();
        $msg5->addSegment(new PID());
        self::assertSame("MSH|^~\&|||||||ORM^O01||P|2.3.1|\nPID|1|\n", $msg5->toString(true), 'PID index resets to 1');
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function auto_increment_of_segment_indices_can_be_avoided(): void
    {
        $hl7String = "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|1||22^BB|\n";

        $msg = Hl7::from($hl7String)
            ->create();
        self::assertSame(
            "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|2||22^BB|\n",
            $msg->toString(true),
            'without autoIncrementIndices(false), each instance is auto-incremented'
        );

        $msg = Hl7::from($hl7String)
            ->autoIncrementIndices(false)
            ->create();
        self::assertSame(
            "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "OBX|1||11^AA|\n" . "OBX|1||22^BB|\n",
            $msg->toString(true)
        );

        $msg = Hl7::from("MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "PID|||3^0\n")
            ->autoIncrementIndices(false)
            ->create();
        self::assertSame(
            "MSH|^~\&|||||||ORU^R01|00001|P|2.3.1|\n" . "PID|||3^0|\n",
            $msg->toString(true),
            "With auto-incrementing off, a segment index shouldn't be inserted if not present"
        );
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function repetition_separation_character_can_be_ignored(): void
    {
        $message = Hl7::from("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1")
            ->create();
        self::assertIsArray(
            $message->getSegmentByIndex(1)->getField(3),
            'By default repetition should be split into array'
        );

        $message = Hl7::from("MSH|^~\&|||||||ADT^A01||P|2.3.1|\nPID|||3^0~4^1")
            ->doNotSplitRepetition() // Ignore repetition separator character
            ->create();
        $patientIdentifierList = $message->getSegmentByIndex(1)->getField(3);
        self::assertIsArray($patientIdentifierList);
        self::assertSame(['3', '0~4', '1'], $patientIdentifierList);
    }

    #[Test] public function it_throws_exception_when_multiple_character_property_is_provided(): void
    {
        $this->expectException(HL7Exception::class);
        $this->expectExceptionMessage("Parameter should be a single character. Received: 'aa'");
        HL7::build()->withSegmentSeparator('aa');
    }
}
