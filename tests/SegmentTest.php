<?php
declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7\Segment;

class SegmentTest extends TestCase
{
    /** @test */
    public function field_at_a_given_nonzero_index_can_be_set()
    {
        $seg = new Segment('XXX');
        $seg->setField(1, 'YYY');
        $this->assertSame('YYY', $seg->getField(1), 'Field 1 is YYY');
    }

    /** @test */
    public function field_at_index_0_can_not_be_changed()
    {
        $seg = new Segment('XXX');
        $seg->setField(0, 'YYY');
        $this->assertNotSame('YYY', $seg->getField(0), 'Field 0 has not been changed');
        $this->assertSame('XXX', $seg->getField(0), 'Field 0 is still the same');
        $this->assertSame('XXX', $seg->getName(), 'Segment name is still the same');
    }

    /** @test */
    public function a_segment_can_be_contructed_from_an_array()
    {
        $seg = new Segment('XXX', ['a', 'b', 'c', ['p', 'q', 'r'], 'd']);
        $this->assertSame('c', $seg->getField(3), 'Constructor with array');
        $this->assertSame('r', $seg->getField(4)[2], 'Constructor with array for composed fields');
    }

    /** @test */
    public function field_can_be_set_to_null()
    {
        $seg = new Segment('XXX');
        $seg->setField(1, null);
        $this->assertNull($seg->getField(1), 'HL7 NULL value');
    }

    /** @test */
    public function field_can_be_set_using_array()
    {
        $seg = new Segment('XXX');
        $seg->setField(3, ['1', '2', '3']);
        $this->assertTrue(is_array($seg->getField(3)), 'Composed field 1^2^3');
        $this->assertCount(3, $seg->getField(3), 'Getting composed fields as array');
        $this->assertEquals(2, $seg->getField(3)[1], 'Getting single value from composed field');
    }

    /** @test */
    public function fields_from_a_given_position_to_end_can_be_retrieved_in_an_array()
    {
        $seg = new Segment('XXX');
        $seg->setField(8, 'aaa');
        $this->assertCount(7, $seg->getFields(2), 'Getting all fields from 2nd index');
    }

    /** @test */
    public function a_chunk_of_fields_can_be_retrieved_from_a_segment()
    {
        $seg = new Segment('XXX');
        $seg->setField(8, 'aaa');
        $this->assertCount(3, $seg->getFields(2, 4), 'Getting fields from 2 till 4');
    }
    /** @test */
    public function setting_field_beyond_last_index_creates_empty_fields_in_between()
    {
        $seg = new Segment('XXX');
        $seg->setField(8, 'aaa');
        $this->assertCount(9, $seg->getFields(), 'Number of fields in segment');
    }

    /** @test */
    public function total_size_of_a_segment_can_be_obtained()
    {
        $seg = new Segment('XXX');
        $seg->setField(8, ['']);
        $this->assertEquals(8, $seg->size(), 'Size operator');
        $seg->setField(12, 'x');
        $this->assertEquals(12, $seg->size(), 'Size operator');
    }
}
