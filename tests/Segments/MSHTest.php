<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests\Segments;

use Aranyasen\Exceptions\HL7Exception;
use Aranyasen\HL7\Segments\MSH;
use Aranyasen\HL7\Tests\TestCase;
use Exception;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class MSHTest extends TestCase
{
    #[Test] public function MSH_formed_without_any_arguments_should_have_mandatory_fields_set_automatically(): void
    {
        $msh = new MSH();
        self::assertSame('|', $msh->getField(1));
        self::assertSame('^~\\&', $msh->getField(2));
        self::assertSame('2.3', $msh->getVersionId());
        self::assertNotEmpty($msh->getDateTimeOfMessage());
        self::assertMatchesRegularExpression('/\d{14}/', $msh->getDateTimeOfMessage());
        self::assertNotEmpty($msh->getMessageControlId());
    }

    /**
     * @throws Exception
     */
    #[Test] public function an_array_of_fields_can_be_passed_to_constructor_to_construct_MSH(): void
    {
        $msh = new MSH(
            [
                'MSH', '^~\&', 'HL7 Corp', 'HL7 HQ', 'VISION', 'MISYS', '200404061744', '', ['DFT', 'P03'], 'TC-22222',
                'T', '2.3',
            ]
        );
        self::assertSame(
            [
                'MSH', '', '^~\&', 'HL7 Corp', 'HL7 HQ', 'VISION', 'MISYS', '200404061744', '', ['DFT', 'P03'],
                'TC-22222', 'T', '2.3',
            ],
            $msh->getFields()
        );
    }

    #[Test] public function field_separator_can_be_set(): void
    {
        $msh = new MSH();
        $msh->setField(1, '*');
        self::assertSame('*', $msh->getField(1), 'MSH Field sep field (MSH(1))');
    }

    #[Test] public function more_than_one_character_as_field_separator_is_not_accepted(): void
    {
        $msh = new MSH();
        $msh->setField(1, 'xx');
        self::assertSame('|', $msh->getField(1), 'MSH Field sep field (MSH(1))');
    }

    #[Test, DataProvider('nonStringValueProvider')]
    public function msh_rejects_non_string_values(int $index, mixed $value, string $expectedMessage): void
    {
        $msh = new MSH();
        $this->expectException(HL7Exception::class);
        $this->expectExceptionMessage($expectedMessage);
        $msh->setField($index, $value);
    }

    /**
     * @return iterable<string, array{0: int, 1: mixed, 2: string}>
     */
    public static function nonStringValueProvider(): iterable
    {
        yield 'field 1 with int' => [1, 0, 'MSH.1 must be a string'];
        yield 'field 1 with null' => [1, null, 'MSH.1 must be a string'];
        yield 'field 1 with array' => [1, ['|'], 'MSH.1 must be a string'];
        yield 'field 2 with int' => [2, 0, 'MSH.2 must be a string'];
        yield 'field 2 with null' => [2, null, 'MSH.2 must be a string'];
        yield 'field 2 with array' => [2, ['^', '~', '\\', '&'], 'MSH.2 must be a string'];
    }

    #[Test, DataProvider('invalidStringLengthProvider')]
    public function msh_rejects_invalid_string_length(int $index, string $value, string $expectedField): void
    {
        $msh = new MSH();
        self::assertFalse($msh->setField($index, $value));
        self::assertSame($expectedField, $msh->getField($index));
    }

    /**
     * @return iterable<string, array{0: int, 1: string, 2: string}>
     */
    public static function invalidStringLengthProvider(): iterable
    {
        yield 'field 1 empty string' => [1, '', '|'];
        yield 'field 2 empty string' => [2, '', '^~\\&'];
        yield 'field 2 too short (3 chars)' => [2, '^~\\', '^~\\&'];
        yield 'field 2 too long (5 chars)' => [2, '^~\\&x', '^~\\&'];
    }

    #[Test] public function version_id_can_be_string_or_array_for_v2_7_onwards(): void
    {
        $msh = new MSH();
        $msh->setVersionId('2.3');
        self::assertSame('2.3', $msh->getVersionId());

        $msh->setVersionId(['2.7', 'NZL', '1.0']);
        self::assertSame(['2.7', 'NZL', '1.0'], $msh->getVersionId());
    }

    #[Test] public function index_2_in_MSH_accepts_only_4_character_strings(): void
    {
        $msh = new MSH();
        $msh->setField(2, 'xxxx');
        self::assertSame('xxxx', $msh->getField(2), 'Special fields not changed');

        $msh->setField(2, 'yyyyy');
        self::assertSame('xxxx', $msh->getField(2), 'Special fields not changed');
    }

    /** @test */
    public function messageType_can_be_set_in_message(): void
    {
        $msh = new MSH();
        $msh->setMessageType('ORM');
        self::assertSame('ORM', $msh->getField(9));
        $msh->setMessageType('ORM^O01');
        self::assertSame('ORM^O01', $msh->getField(9));

        $msh = new MSH();
        $msh->setMessageType(['ORU', 'R01']); // For v2.3
        self::assertSame(['ORU', 'R01'], $msh->getField(9));

        $msh = new MSH();
        $msh->setMessageType(['ORU', 'R01', 'ORU_R01']); // For 2.5
        self::assertSame(['ORU', 'R01', 'ORU_R01'], $msh->getField(9));
    }

    /** @test */
    public function messageType_can_be_changed_in_message(): void
    {
        // For v2.3...
        $msh = new MSH();
        $msh->setMessageType(['ORU', 'R01']);
        $msh->setMessageType('ORM');
        self::assertSame(['ORM', 'R01'], $msh->getField(9));

        // For v2.5...
        $msh = new MSH();
        $msh->setMessageType(['ORU', 'R01', 'ORU_R01']);
        $msh->setMessageType('ORM');
        self::assertSame(['ORM', 'R01', 'ORU_R01'], $msh->getField(9));
    }
}
