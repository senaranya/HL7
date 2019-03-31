<?php
declare(strict_types=1);

namespace Aranyasen\HL7\Segments\Tests;

use Aranyasen\HL7\Segments\MSH;
use Aranyasen\HL7\Tests\TestCase;

class MSHTest extends TestCase
{
    private $msh;

    public function setUp(): void
    {
        $this->msh = new MSH();
    }

    /** @test */
    public function field_separator_can_be_set()
    {
        $this->msh->setField(1, '*');
        $this->assertSame('*', $this->msh->getField(1), 'MSH Field sep field (MSH(1))');
    }

    /** @test */
    public function more_than_one_character_as_field_separator_is_not_accepted()
    {
        $this->msh->setField(1, 'xx');
        $this->assertSame('|', $this->msh->getField(1), 'MSH Field sep field (MSH(1))');
    }

    /** @test */
    public function index_2_in_MSH_accepts_only_4_character_strings()
    {
        $this->msh->setField(2, 'xxxx');
        $this->assertSame('xxxx', $this->msh->getField(2), 'Special fields not changed');

        $this->msh->setField(2, 'yyyyy');
        $this->assertSame('xxxx', $this->msh->getField(2), 'Special fields not changed');
    }
}