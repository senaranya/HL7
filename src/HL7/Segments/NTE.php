<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * NTE segment class
 * Ref: https://corepointhealth.com/resource-center/hl7-resources/hl7-nte-notes-comments
 */
class NTE extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('NTE', $fields);
        $this->setID($this::$setId++);
    }

    public function setID($value, $position = 1)
    {
        return $this->setField($position, $value);
    }

    public function setSourceOfComment($value, $position = 2)
    {
        return $this->setField($position, $value);
    }

    public function setComment($value, $position = 3)
    {
        return $this->setField($position, $value);
    }

    public function setCommentType($value, $position = 4)
    {
        return $this->setField($position, $value);
    }

    public function getID($position = 1)
    {
        return $this->getField($position);
    }

    public function getSourceOfComment($position = 2)
    {
        return $this->getField($position);
    }

    public function getComment($position = 3)
    {
        return $this->getField($position);
    }

    public function getCommentType($position = 4)
    {
        return $this->getField($position);
    }
}
