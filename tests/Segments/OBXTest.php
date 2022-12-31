<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests\Segments;

use Aranyasen\HL7\Segments\OBX;
use Aranyasen\HL7\Tests\TestCase;

class OBXTest extends TestCase
{
    /** @test */
    public function segment_id_automatically_increments_when_a_new_instance_is_created(): void
    {
        OBX::resetIndex(); // Previous tests would have incremented the static $index variable

        $obx = new OBX();
        $this->assertSame(1, $obx->getID());
        $obx = new OBX();
        $this->assertSame(2, $obx->getID());
    }
}
