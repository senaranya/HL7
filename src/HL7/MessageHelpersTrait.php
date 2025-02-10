<?php

declare(strict_types=1);

namespace Aranyasen\HL7;

use Aranyasen\Exceptions\HL7Exception;
use Aranyasen\HL7\Segments\MSH;

trait MessageHelpersTrait
{
    /**
     * Write HL7 to a file
     *
     * @throws HL7Exception
     */
    public function toFile(string $filename): void
    {
        file_put_contents($filename, $this->toString(true));
        if (!file_exists($filename)) {
            throw new HL7Exception("Failed to write HL7 to file '$filename'");
        }
    }

    public function isOrm(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'ORM');
    }

    public function isOru(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'ORU');
    }

    public function isAdt(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'ADT');
    }

    public function isSiu(): bool
    {
        /** @var MSH $msh */
        $msh = $this->getFirstSegmentInstance('MSH');
        return str_contains($msh->getMessageType(), 'SIU');
    }

    public function isEmpty(): bool
    {
        return empty($this->getSegments());
    }
}
