<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * TXA segment class
 *
 * TXA: Transcription Document Header
 * The TXA segment contains information specific to a transcribed document but does not include the text of the document.
 * The message is created as a result of a document status change.
 * This information updates other healthcare systems and allows them to identify reports that are available in the transcription system.
 * By maintaining the TXA message information in these systems, the information is available when constructing queries to the transcription system requesting the full document text.
 *
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.6/Segments/TXA
 */
class TXA extends Segment
{
    public function __construct(?array $fields = null)
    {
        parent::__construct('TXA', $fields);
    }

    public function setID(string|null $value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentType(string|null $value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentContentPurpose(string|null $value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentCompletionStatus(string|null $value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentConfidentialityStatus(string|null $value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentAvailabilityStatus(string|null $value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentStorageStatus(string|null $value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentChangeReason(string|null $value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentTemplateVersion(string|null $value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentIdentifierList(array|string|null $value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    public function setParentDocumentIdentifier(array|string|null $value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    public function setPlacerOrderNumber(array|string|null $value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    public function setFillerOrderNumber(array|string|null $value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    public function setUniqueDocumentNumber(string|null $value, int $position = 15): bool
    {
        return $this->setField($position, $value);
    }

    public function setUniqueDocumentFileName(string|null $value, int $position = 16): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentCreationDateTime(string|null $value, int $position = 17): bool
    {
        return $this->setField($position, $value);
    }

    public function setTranscriptionStartDateTime(string|null $value, int $position = 18): bool
    {
        return $this->setField($position, $value);
    }

    public function setTranscriptionCompletionDateTime(string|null $value, int $position = 19): bool
    {
        return $this->setField($position, $value);
    }

    public function setOriginatorCodeName(array|string|null $value, int $position = 20): bool
    {
        return $this->setField($position, $value);
    }

    public function setAssignedDocumentAuthenticator(array|string|null $value, int $position = 21): bool
    {
        return $this->setField($position, $value);
    }

    public function setUniqueDocumentRecipient(array|string|null $value, int $position = 22): bool
    {
        return $this->setField($position, $value);
    }

    public function setParentDocumentType(string|null $value, int $position = 23): bool
    {
        return $this->setField($position, $value);
    }

    public function getDocumentType(int $position = 3): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentContentPurpose(int $position = 4): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentCompletionStatus(int $position = 5): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentConfidentialityStatus(int $position = 6): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentAvailabilityStatus(int $position = 7): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentStorageStatus(int $position = 8): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentChangeReason(int $position = 9): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentTemplateVersion(int $position = 10): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentIdentifierList(int $position = 11): array|string|null
    {
        return $this->getField($position);
    }

    public function getParentDocumentIdentifier(int $position = 12): array|string|null
    {
        return $this->getField($position);
    }

    public function getPlacerOrderNumber(int $position = 13): array|string|null
    {
        return $this->getField($position);
    }

    public function getFillerOrderNumber(int $position = 14): array|string|null
    {
        return $this->getField($position);
    }

    public function getUniqueDocumentNumber(int $position = 15): string|null
    {
        return $this->getField($position);
    }

    public function getUniqueDocumentFileName(int $position = 16): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentCreationDateTime(int $position = 17): string|null
    {
        return $this->getField($position);
    }

    public function getTranscriptionStartDateTime(int $position = 18): string|null
    {
        return $this->getField($position);
    }

    public function getTranscriptionCompletionDateTime(int $position = 19): string|null
    {
        return $this->getField($position);
    }

    public function getOriginatorCodeName(int $position = 20): array|string|null
    {
        return $this->getField($position);
    }

    public function getAssignedDocumentAuthenticator(int $position = 21): array|string|null
    {
        return $this->getField($position);
    }

    public function getUniqueDocumentRecipient(int $position = 22): array|string|null
    {
        return $this->getField($position);
    }

    public function getParentDocumentType(int $position = 23): string|null
    {
        return $this->getField($position);
    }
}
