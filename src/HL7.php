<?php

namespace Aranyasen;

use InvalidArgumentException;
use Aranyasen\HL7\Message;
use Aranyasen\HL7\Segments\MSH;
use Aranyasen\HL7\Messages\ACK;

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
    /**
     * Holds all global HL7 settings.
     */
    protected $hl7Globals;

    /**
     * Create a new instance of the HL7 factory, and set global
     * defaults.
     *
     * @param array $hl7Globals Set control characters or HL7 properties. e.g., ['HL7_VERSION' => '2.5']
     */
    public function __construct($hl7Globals = null)
    {
        $this->$hl7Globals['SEGMENT_SEPARATOR'] = $hl7Globals['SEGMENT_SEPARATOR'] ?? '\n';
        $this->$hl7Globals['SEGMENT_ENDING_BAR'] = $hl7Globals['SEGMENT_ENDING_BAR'] ?? true;
        $this->$hl7Globals['FIELD_SEPARATOR'] = $hl7Globals['FIELD_SEPARATOR'] ?? '|';
        $this->$hl7Globals['NULL'] = $hl7Globals['NULL'] ?? '""';
        $this->$hl7Globals['COMPONENT_SEPARATOR'] = $hl7Globals['COMPONENT_SEPARATOR'] ?? '^';
        $this->$hl7Globals['SUBCOMPONENT_SEPARATOR'] = $hl7Globals['SUBCOMPONENT_SEPARATOR'] ?? '&';
        $this->$hl7Globals['REPETITION_SEPARATOR'] = $hl7Globals['REPETITION_SEPARATOR'] ?? '~';
        $this->$hl7Globals['ESCAPE_CHAR'] = $hl7Globals['ESCAPE_CHAR'] ?? '\\';
        $this->$hl7Globals['HL7_VERSION'] = $hl7Globals['HL7_VERSION'] ?? '2.3';
    }

    /**
     * Create a new Message, using the global HL7 variables as defaults.
     *
     * @param string|null Text representation of an HL7 message
     * @return Message
     * @throws \Exception
     * @throws \InvalidArgumentException
     */
    public function createMessage(string $msgStr = null): Message
    {
        return new Message($msgStr, $this->hl7Globals);
    }

    /**
     * Create a new ACK Message, using the global HL7 variables as defaults.
     *
     * @param string|null Text representation of an HL7 message
     * @return Message
     * @throws \Exception
     * @throws \InvalidArgumentException
     */
    public function createACK(string $msgStr = null, MSH $reqMsh = null): Message
    {
        return new ACK($msgStr, $reqMsh, $this->hl7Globals);
    }

    /**
     * Create a new MSH segment, using the global HL7 variables as defaults.
     * @return MSH
     * @throws \InvalidArgumentException
     */
    public function createMSH(): MSH
    {
        return new MSH($this->hl7Globals);
    }

    /**
     * Set the component separator to be used by the factory. Should be a single character. Default ^
     *
     * @param string $value Component separator char.
     * @return boolean true if value has been set.
     * @throws \InvalidArgumentException
     */
    public function setComponentSeparator(string $value): bool
    {
        if (\strlen($value) !== 1) {
            throw new InvalidArgumentException("Parameter should be of single character. Received: '$value'");
        }

        return $this->setGlobal('COMPONENT_SEPARATOR', $value);
    }


    /**
     * Set the subcomponent separator to be used by the factory. Should be a single character. Default: &
     *
     * @param string $value Subcomponent separator char.
     * @return boolean true if value has been set.
     * @throws \InvalidArgumentException
     */
    public function setSubcomponentSeparator(string $value): bool
    {
        if (\strlen($value) !== 1) {
            throw new InvalidArgumentException("Parameter should be of single character. Received: '$value'");
        }

        return $this->setGlobal('SUBCOMPONENT_SEPARATOR', $value);
    }


    /**
     * Set the repetition separator to be used by the factory. Should be a single character. Default: ~
     *
     * @param string $value Repetition separator char.
     * @return boolean true if value has been set.
     * @throws \InvalidArgumentException
     */
    public function setRepetitionSeparator(string $value): bool
    {
        if (\strlen($value) !== 1) {
            throw new InvalidArgumentException("Parameter should be of single character. Received: '$value'");
        }

        return $this->setGlobal('REPETITION_SEPARATOR', $value);
    }


    /**
     * Set the field separator to be used by the factory. Should be a single character. Default: |
     *
     * @param string $value Field separator char.
     * @return boolean true if value has been set.
     * @throws \InvalidArgumentException
     */
    public function setFieldSeparator(string $value): bool
    {
        if (\strlen($value) !== 1) {
            throw new InvalidArgumentException("Parameter should be of single character. Received: '$value'");
        }

        return $this->setGlobal('FIELD_SEPARATOR', $value);
    }


    /**
     * Set the segment separator to be used by the factory. Should be a single character. Default: \015
     *
     * @param string $value separator char.
     * @return boolean true if value has been set.
     * @throws \InvalidArgumentException
     */
    public function setSegmentSeparator(string $value): bool
    {
        if (\strlen($value) !== 1) {
            throw new InvalidArgumentException("Parameter should be of single character. Received: '$value'");
        }

        return $this->setGlobal('SEGMENT_SEPARATOR', $value);
    }

    /**
     * Set the escape character to be used by the factory. Should be a single character. Default: \
     *
     * @param string $value Escape character.
     * @return boolean true if value has been set.
     * @throws \InvalidArgumentException
     */
    public function setEscapeCharacter(string $value): bool
    {
        if (\strlen($value) !== 1) {
            throw new InvalidArgumentException("Parameter should be of single character. Received: '$value'");
        }

        return $this->setGlobal('ESCAPE_CHARACTER', $value);
    }

    /**
     * Set the HL7 version to be used by the factory. Default 2.3
     *
     * @param string HL7 version character.
     * @return boolean true if value has been set.
     */
    public function setHL7Version(string $value): bool
    {
        return $this->setGlobal('HL7_VERSION', $value);
    }

    /**
     * Set the NULL string to be used by the factory.
     *
     * @param string NULL string.
     * @return boolean true if value has been set.
     */
    public function setNull($value): bool
    {
        return $this->setGlobal('NULL', $value);
    }

    /**
     * Convenience method for obtaining the special NULL value.
     *
     * @return string null value
     */
    public function getNull()
    {
        return $this->hl7Globals['NULL'];
    }

    /**
     * Set the HL7 global variable
     *
     * @access protected
     * @param string $name
     * @param string $value
     * @return bool
     */
    protected function setGlobal(string $name, string $value): bool
    {
        $this->hl7Globals[$name] = $value;
        return true;
    }
}
