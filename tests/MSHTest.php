<?php

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7\Segments\MSH;

class MSHTest extends TestCase
{
    public function test()
    {
        $msh = new MSH();

        $msh->setField(1, '*');
        $this->assertSame('*', $msh->getField(1), 'MSH Field sep field (MSH(1))');

        $msh->setField(1, 'xx');
        $this->assertSame('*', $msh->getField(1), 'MSH Field sep field (MSH(1))');

        $msh->setField(2, 'xxxxx');
        # Should have had no effect
        $this->assertSame('^~\\&', $msh->getField(2), 'Special fields not changed');

        # Should have had the effect of changing some separator fields
        $msh->setField(2, 'abcd');
        $this->assertSame('abcd', $msh->getField(2), 'Encoding characters field set (MSH(2))');
    }
}
