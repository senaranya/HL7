<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * PID segment class
 */
class PID extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('PID', $fields);
    }
}
