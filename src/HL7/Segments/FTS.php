<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * FTS: File Trailer Segment
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.3/Segments/FTS
 */
class FTS extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('FTS', $fields);
    }

    /**
     * Set File Batch Count (FTS.1)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 1
     *
     * @return bool
     *
     */
    public function setFileBatchCount($value, int $position = 1)
    {
        return $this->setField($position, $value);
    }

    /**
     * Set File Trailer Comment (FTS.2)
     *
     * @param string|int|array|null $value
     * @param int $position Defaults to 2
     *
     * @return bool
     *
     */
    public function setFileTrailerComment($value, int $position = 2)
    {
        return $this->setField($position, $value);
    }

    // -------------------- Getter Methods ------------------------------

    /**
     * Get File BatchCount (FTS.1)
     *
     * @param int $position Defaults to 1
     *
     * @return array|string|int|null
     *
     */
    public function getFileBatchCount(int $position = 1)
    {
        return $this->getField($position);
    }

    /**
     * Get File TrailerComment (FTS.2)
     *
     * @param int $position Defaults to 2
     *
     * @return array|string|int|null
     *
     */
    public function getFileTrailerComment(int $position = 2)
    {
        return $this->getField($position);
    }
}
