<?php

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7;
use Aranyasen\HL7\Segment;

class SegmentTest extends TestCase
{
    public function test()
    {
        # Basic stuff
        #
        $hl7 = new HL7();
        $seg = new Segment('PID');
        $seg->setField(0, 'XXX');
        $seg->setField(3, 'XXX');

        $this->assertSame('PID', $seg->getField(0), 'Field 0 is PID');
        $this->assertSame('PID', $seg->getName(), 'Segment name is PID');
        $this->assertSame('XXX', $seg->getField(3), 'Field 3 is XXX');

        # Try faulty constructors
        #
        //$this->assertTrue(! defined(new Net::HL7::Segment()), "Segment constructor with no name");
        //$this->assertTrue(! defined( new Net::HL7::Segment("XXXX")), "Segment constructor with 4 char name");
        //$this->assertTrue(! defined(new Net::HL7::Segment("xxx")), "Segment constructor with lowercase name");


        $seg = new Segment('DG1', ['4', '3', '2', ['1', '2', '3'], '0']);

        $this->assertSame($seg->getField(3), '2', 'Constructor with array ref');

        $comps = $seg->getField(4);

        $this->assertSame($comps[2], '3', 'Constructor with array ref for composed fields');


        # Field setters/getters
        #
        $seg = new Segment('DG1');

        $seg->setField(3, ['1', '2', '3']);
        $seg->setField(8, $hl7->getNull());

        $this->assertTrue(is_array($seg->getField(3)), 'Composed field 1^2^3');

        $this->assertTrue($seg->getField(8) === '""' && $seg->getField(8) === $hl7->getNull(), 'HL7 NULL value');

        $subFields = $seg->getField(3);

        $this->assertCount(3, $subFields, 'Getting composed fields as array');

        $this->assertSame($subFields[1], '2', 'Getting single value from composed field');

        $flds = $seg->getFields();

        $this->assertCount(9, $flds, 'Number of fields in segment');

        $flds = $seg->getFields(2);

        $this->assertCount(7, $flds, 'Getting all fields from 2nd index');

        $flds = $seg->getFields(2, 4);

        $this->assertCount(3, $flds, 'Getting fields from 2 till 4');

        $seg->setField(12);

        $this->assertSame($seg->size(), 8, 'Size operator');

        $seg->setField(12, 'x');

        $this->assertSame($seg->size(), 12, 'Size operator');
    }
}
