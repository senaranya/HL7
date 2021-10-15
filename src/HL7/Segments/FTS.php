<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * FTS: File Trailer Segment
 * Ref: http://hl7-definition.caristix.com:9010/HL7%20v2.3/segment/FTS
 */
class FTS extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('FTS', $fields);
    }

    public function setFileBatchCount($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setFileTrailerComment($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    public function getFileBatchCount(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getFileTrailerComment(int $position = 2)
    {
        return $this->getField($position);
    }
    
}
