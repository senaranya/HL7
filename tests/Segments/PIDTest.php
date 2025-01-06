<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests\Segments;

use Aranyasen\Exceptions\HL7Exception;
use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segments\PID;
use Aranyasen\HL7\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class PIDTest extends TestCase
{
    #[DataProvider('validSexValues')]
    #[Test] public function PID_8_should_accept_value_for_sex_as_per_hl7_standard(string $validSexValue): void
    {
        $pidSegment = (new PID());
        $pidSegment->setSex($validSexValue);
        self::assertSame($validSexValue, $pidSegment->getSex(), "Sex should have been set with '$validSexValue'");
        self::assertSame($validSexValue, $pidSegment->getField(8), "Sex should have been set with '$validSexValue'");
    }

    /**
     * @param  string  $invalidSexValue
     */
    #[DataProvider('invalidSexValues')]
    #[Test] public function PID_8_should_not_accept_non_standard_values_for_sex(string $invalidSexValue): void
    {
        $pidSegment = (new PID());
        $this->expectException(HL7Exception::class);
        $this->expectExceptionMessage("Sex should one of 'A', 'F', 'M', 'N', 'O' or 'U'. Given: '$invalidSexValue'");
        $pidSegment->setSex($invalidSexValue);
        self::assertEmpty($pidSegment->getSex(), "Sex should not have been set with value: $invalidSexValue");
        self::assertEmpty($pidSegment->getField(8), "Sex should not have been set with value: $invalidSexValue");
    }

    /**
     * @throws HL7Exception
     */
    #[Test] public function PID_5_should_parse_properly(): void
    {
        $messageString = "MSH|^~\\&|1|\r" .
            'PID|||||' .
            'Test &""&firstname &""&""^F^N N^^^^F^^^^""~Test &""&Test^Test^""^^^^B~""&""&""^^^^^^P~^Lastname^^^^^N|' .
            "\r";
        $msg = new Message($messageString, null, false, true, true, true);

        self::assertSame(
            'MSH|^~\&|1|\nPID|1||||Test &""&firstname &""&""^F^N N^F^""~Test &""&Test^Test^""^B~""&""&""^P~^' .
            'Lastname^N|\n',
            $msg->toString()
        );
    }

    public static function validSexValues(): array
    {
        return [
            ['A'], ['F'], ['M'], ['N'], ['O'], ['U']
        ];
    }

    public static function invalidSexValues(): array
    {
        return [
           ['B'], ['Z'], ['z'], ['a']
        ];
    }
}
