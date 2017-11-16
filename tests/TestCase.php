<?php

namespace Aranyasen\HL7\Tests;

use PHPUnit\Framework\TestCase as TC;

abstract class TestCase extends TC
{
    protected function setUp()
    {
        parent::setUp();
        //
    }

    protected function tearDown()
    {
        // Any tearDown should appear before parent::tearDown()
        parent::tearDown();
    }
}
