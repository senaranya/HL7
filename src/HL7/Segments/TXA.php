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
 * Ref: https://hl7-definition.caristix.com/v2/HL7v2.7/Segments/TXA
 */
class TXA extends Segment
{
    private static int $setId = 1;

    public function __construct(?array $fields = null)
    {
        parent::__construct('TXA', $fields);
        $this->setID($this::$setId++);
    }

    public function __destruct()
    {
        $this->setID($this::$setId--);
    }

    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setID(int $value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentType(string|null $value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentContentPresentation(string|null $value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setActivityDateTime(string|int|null $value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setPrimaryActivityProviderCode(array|string|null $value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setOriginationDateTime(string|int|null $value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setTranscriptionDateTime(string|int|null $value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }

    public function setEditDateTime(string|int|null $value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setOriginatorCode(array|string|null $value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function setAssignedDocumentAuthenticator(array|string|null $value, int $position = 10): bool
    {
        return $this->setField($position, $value);
    }

    public function setTranscriptionistCode(array|string|null $value, int $position = 11): bool
    {
        return $this->setField($position, $value);
    }

    public function setUniqueDocumentNumber(string|int|null $value, int $position = 12): bool
    {
        return $this->setField($position, $value);
    }

    public function setParentDocumentNumber(string|int|null $value, int $position = 13): bool
    {
        return $this->setField($position, $value);
    }

    public function setPlacerOrderNumber(array|int|string|null $value, int $position = 14): bool
    {
        return $this->setField($position, $value);
    }

    public function setFillerOrderNumber(string|int|null $value, int $position = 15): bool
    {
        return $this->setField($position, $value);
    }

    public function setUniqueDocumentFileName(string|null $value, int $position = 16): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentCompletionStatus(array|string|null $value, int $position = 17): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentConfidentialityStatus(string|null $value, int $position = 18): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentAvailabilityStatus(string|null $value, int $position = 19): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentStorageStatus(string|null $value, int $position = 20): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentChangeReason(string|null $value, int $position = 21): bool
    {
        return $this->setField($position, $value);
    }

    public function setAuthenticationPerson(array|string|null $value, int $position = 22): bool
    {
        return $this->setField($position, $value);
    }

    public function setDistributedCopies(array|int|string|null $value, int $position = 23): bool
    {
        return $this->setField($position, $value);
    }

    public function setFolderAssignment(array|int|string|null $value, int $position = 24): bool
    {
        return $this->setField($position, $value);
    }

    public function setDocumentTitle(array|string|null $value, int $position = 25): bool
    {
        return $this->setField($position, $value);
    }

    public function setAgreedDueDateTime(array|int|string|null $value, int $position = 26): bool
    {
        return $this->setField($position, $value);
    }

    public function getID(int $position = 1): int|null
    {
        return $this->getField($position);
    }

    public function getDocumentType(int $position = 2): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentContentPresentation(int $position = 3): string|null
    {
        return $this->getField($position);
    }

    public function getActivityDateTime(int $position = 4): string|int|null
    {
        return $this->getField($position);
    }

    public function getPrimaryActivityProviderCode(int $position = 5): array|string|null
    {
        return $this->getField($position);
    }

    public function getOriginationDateTime(int $position = 6): string|int|null
    {
        return $this->getField($position);
    }

    public function getTranscriptionDateTime(int $position = 7): string|int|null
    {
        return $this->getField($position);
    }

    public function getEditDateTime(int $position = 8): string|int|null
    {
        return $this->getField($position);
    }

    public function getOriginatorCode(int $position = 9): array|string|null
    {
        return $this->getField($position);
    }

    public function getAssignedDocumentAuthenticator(int $position = 10): array|string|null
    {
        return $this->getField($position);
    }

    public function getTranscriptionistCode(int $position = 11): array|string|null
    {
        return $this->getField($position);
    }

    public function getUniqueDocumentNumber(int $position = 12): string|int|null
    {
        return $this->getField($position);
    }

    public function getParentDocumentNumber(int $position = 13): string|int|null
    {
        return $this->getField($position);
    }

    public function getPlacerOrderNumber(int $position = 14): array|int|string|null
    {
        return $this->getField($position);
    }

    public function getFillerOrderNumber(int $position = 15): string|int|null
    {
        return $this->getField($position);
    }

    public function getUniqueDocumentFileName(int $position = 16): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentCompletionStatus(int $position = 17): array|string|null
    {
        return $this->getField($position);
    }

    public function getDocumentConfidentialityStatus(int $position = 18): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentAvailabilityStatus(int $position = 19): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentStorageStatus(int $position = 20): string|null
    {
        return $this->getField($position);
    }

    public function getDocumentChangeReason(int $position = 21): string|null
    {
        return $this->getField($position);
    }

    public function getAuthenticationPerson(int $position = 22): array|string|null
    {
        return $this->getField($position);
    }

    public function getDistributedCopies(int $position = 23): array|int|string|null
    {
        return $this->getField($position);
    }

    public function getFolderAssignment(int $position = 24): array|int|string|null
    {
        return $this->getField($position);
    }

    public function getDocumentTitle(int $position = 25): array|string|null
    {
        return $this->getField($position);
    }

    public function getAgreedDueDateTime(int $position = 26): array|int|string|null
    {
        return $this->getField($position);
    }
}
