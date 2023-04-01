<?php

declare(strict_types=1);

namespace Aranyasen;

use Aranyasen\Exceptions\HL7Exception;
use Exception;
use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segments\MSH;

/**
 * The HL7 class is a factory class for HL7 messages.
 *
 * The factory class provides the convenience of changing several defaults for HL7 messaging globally, like separators,
 * etc. Note that some default settings use characters that have special meaning in PHP, like the HL7 escape character.
 * To be able to set these values, escape the special characters.
 *
 */
class HL7
{
    private array $hl7Globals;
    private string $hl7String;
    private bool $emptySubFields = false;
    private bool $resetIndices = false;
    private bool $autoIncrementIndices = true;
    private ?bool $doNotSplitRepetition = null;

    /**
     * Create a new instance of the HL7 factory, and set global
     * defaults.
     */
    private function __construct(string $hl7String = '')
    {
        $this->setDefaults();
        $this->hl7String = $hl7String;
    }

    public static function build(): self
    {
        return new static();
    }

    public static function from(string $hl7String): self
    {
        return new static($hl7String);
    }

    /**
     * Create a new Message, using the global HL7 variables as defaults.
     *
     * @throws Exception | HL7Exception
     */
    public function createMessage(): Message
    {
        if (empty($this->hl7String)) {
            $msh = $this->createMSH();
            $message = new Message(
                $this->hl7String,
                $this->hl7Globals,
                $this->emptySubFields,
                $this->resetIndices,
                $this->autoIncrementIndices,
                $this->doNotSplitRepetition
            );
            $message->addSegment($msh);
            return $message;
        }
        return new Message(
            $this->hl7String,
            $this->hl7Globals,
            $this->emptySubFields,
            $this->resetIndices,
            $this->autoIncrementIndices,
            $this->doNotSplitRepetition
        );
    }

    /**
     * Create a new MSH segment, using the global HL7 variables as defaults.
     * @throws Exception
     */
    public function createMSH(): MSH
    {
        return new MSH(hl7Globals: $this->hl7Globals);
    }

    /**
     * Set the component separator to be used by the factory. Should be a single character. Default ^
     *
     * @throws HL7Exception
     */
    public function withComponentSeparator(string $value): self
    {
        $this->checkIfSingleCharacter($value);

        return $this->setGlobal('COMPONENT_SEPARATOR', $value);
    }

    /**
     * Set the subcomponent separator to be used by the factory. Should be a single character. Default: &
     *
     * @throws HL7Exception
     */
    public function withSubcomponentSeparator(string $value): self
    {
        $this->checkIfSingleCharacter($value);

        return $this->setGlobal('SUBCOMPONENT_SEPARATOR', $value);
    }

    /**
     * Set the repetition separator to be used by the factory. Should be a single character. Default: ~
     *
     * @throws HL7Exception
     */
    public function withRepetitionSeparator(string $value): self
    {
        $this->checkIfSingleCharacter($value);

        return $this->setGlobal('REPETITION_SEPARATOR', $value);
    }


    /**
     * Set the field separator to be used by the factory. Should be a single character. Default: |
     *
     * @throws HL7Exception
     */
    public function withFieldSeparator(string $value): self
    {
        $this->checkIfSingleCharacter($value);

        return $this->setGlobal('FIELD_SEPARATOR', $value);
    }

    /**
     * Set the segment separator to be used by the factory. Should be a single character. Default: \015
     *
     * @throws HL7Exception
     */
    public function withSegmentSeparator(string $value): self
    {
        $this->checkIfSingleCharacter($value);

        return $this->setGlobal('SEGMENT_SEPARATOR', $value);
    }

    /**
     * Set the escape character to be used by the factory. Should be a single character. Default: \
     *
     * @throws HL7Exception
     */
    public function withEscapeCharacter(string $value): self
    {
        $this->checkIfSingleCharacter($value);

        return $this->setGlobal('ESCAPE_CHARACTER', $value);
    }

    public function withHL7Version(string $hl7Version): self
    {
        return $this->setGlobal('HL7_VERSION', $hl7Version);
    }

    public function keepEmptySubfields(bool $value = true): self
    {
        $this->emptySubFields = $value;
        return $this;
    }

    public function resetIndices(bool $value = true): self
    {
        $this->resetIndices = $value;
        return $this;
    }

    public function autoIncrementIndices(bool $value = true): self
    {
        $this->autoIncrementIndices = $value;
        return $this;
    }

    public function doNotSplitRepetition(bool $value = true): self
    {
        $this->doNotSplitRepetition = $value;
        return $this;
    }

    private function setGlobal(string $name, string $value): self
    {
        $this->hl7Globals[$name] = $value;
        return $this;
    }

    private function setDefaults(): void
    {
        $this->hl7Globals['SEGMENT_SEPARATOR'] = '\n';
        $this->hl7Globals['SEGMENT_ENDING_BAR'] = true;
        $this->hl7Globals['FIELD_SEPARATOR'] = '|';
        $this->hl7Globals['COMPONENT_SEPARATOR'] = '^';
        $this->hl7Globals['SUBCOMPONENT_SEPARATOR'] = '&';
        $this->hl7Globals['REPETITION_SEPARATOR'] = '~';
        $this->hl7Globals['ESCAPE_CHARACTER'] = '\\';
        $this->hl7Globals['HL7_VERSION'] = '2.3';
    }

    /**
     * @param  string  $value
     * @return void
     * @throws HL7Exception
     */
    private function checkIfSingleCharacter(string $value): void
    {
        if (strlen($value) !== 1) {
            throw new HL7Exception("Parameter should be a single character. Received: '$value'");
        }
    }
}
