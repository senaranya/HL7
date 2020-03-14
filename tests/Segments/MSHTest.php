<?php
declare(strict_types=1);

namespace Aranyasen\HL7\Segments\Tests;

use Aranyasen\HL7\Segments\MSH;
use Aranyasen\HL7\Tests\TestCase;

class MSHTest extends TestCase
{
    /** @test */
    public function MSH_formed_without_any_arguments_should_have_mandatory_fields_set_automatically(): void
    {
        $msh = new MSH();
        $this->assertSame('|', $msh->getField(1));
        $this->assertSame('^~\\&', $msh->getField(2));
        $this->assertSame('2.3', $msh->getVersionId());
        $this->assertNotEmpty($msh->getDateTimeOfMessage());
        $this->assertNotEmpty($msh->getMessageControlId());
    }

    /** @test */
    public function an_array_of_fields_can_be_passed_to_constructor_to_construct_MSH(): void
    {
        $msh = new MSH(['MSH', '^~\&', 'HL7 Corp', 'HL7 HQ', 'VISION', 'MISYS', '200404061744', '', ['DFT', 'P03'], 'TC-22222', 'T', '2.3']);
        $this->assertSame(
            ['MSH', '', '^~\&', 'HL7 Corp', 'HL7 HQ', 'VISION', 'MISYS', '200404061744', '', ['DFT', 'P03'], 'TC-22222', 'T', '2.3'],
            $msh->getFields()
        );
    }

    /** @test */
    public function field_separator_can_be_set(): void
    {
        $msh = new MSH();
        $msh->setField(1, '*');
        $this->assertSame('*', $msh->getField(1), 'MSH Field sep field (MSH(1))');
    }

    /** @test */
    public function more_than_one_character_as_field_separator_is_not_accepted(): void
    {
        $msh = new MSH();
        $msh->setField(1, 'xx');
        $this->assertSame('|', $msh->getField(1), 'MSH Field sep field (MSH(1))');
    }

    /** @test */
    public function index_2_in_MSH_accepts_only_4_character_strings(): void
    {
        $msh = new MSH();
        $msh->setField(2, 'xxxx');
        $this->assertSame('xxxx', $msh->getField(2), 'Special fields not changed');

        $msh->setField(2, 'yyyyy');
        $this->assertSame('xxxx', $msh->getField(2), 'Special fields not changed');
    }
}
