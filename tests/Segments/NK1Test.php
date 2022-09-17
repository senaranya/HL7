<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests\Segments;

use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segments\NK1;
use Aranyasen\HL7\Tests\TestCase;

class NK1Test extends TestCase
{
    /** @test */
    public function NK1_segment_can_be_parsed_from_a_HL7_message(): void
    {
        $msg = new Message("MSH|^~\\&|1|\nNK1|1|John^Doe|\n");
        $nk1Segments = $msg->getSegmentsByName('NK1');
        self::assertIsArray($nk1Segments);
        self::assertCount(1, $nk1Segments);
        self::assertSame(['John', 'Doe'], $nk1Segments[0]->getNKName());
    }

    /** @test */
    public function next_of_kin_name_can_be_set_and_get(): void
    {
        $nk1Segment = new NK1();
        $nk1Segment->setNKName("John Doe");
        self::assertSame("John Doe", $nk1Segment->getNKName());
    }
}
