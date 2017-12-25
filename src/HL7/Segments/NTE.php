<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * NTE segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-nte-notes-comments
 */
class NTE extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('NTE', $fields);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function sourceOfComment($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function comment($value, int $position = 3)
    {
        return $this->setField($position, $value);
    }

    /**
     * @param $value
     * @param int $position
     * @return bool
     */
    public function commentType($value, int $position = 4)
    {
        return $this->setField($position, $value);
    }
}
