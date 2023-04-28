<?php

declare(strict_types=1);

namespace Aranyasen\HL7;

class EscapeSequenceHandler
{
    public const ESCAPE_SEQUENCES = [
        'F' => '|',
        'R' => '~',
        'S' => '^',
        'T' => '&',
        'E' => '\\',
    ];

    protected string $escapeChar;

    protected array $escapeSequences = [];

    /**
     * Create a EscapeSequenceHandler
     *
     * This is usually used in conjuction with a HL7 segment in order to escape
     * and unescape the field values where it is expected that separator characters
     * may be present somewhere in the data contents of the message.
     *
     * Example:
     * ```php
     * $seg = new Segment("PID");
     * $seg->setEscapeSequenceHandler(new EscapeSequenceHandler('\\'));
     *
     * $seg->setField(8, 'ab|cd'); // Sets the 8th field value to 'ab\F\cd'
     * echo $seg->getField(8); // Returns the 8th field value as 'ab|cd'
     *
     * @param string $escapeChar
     */
    public function __construct(string $escapeChar)
    {
        $this->escapeChar = $escapeChar;

        $this->buildEscapeSequences();
    }

    /**
     * Build the escape sequences using $escapeChar.
     */
    protected function buildEscapeSequences()
    {
        $escapeSequences = self::ESCAPE_SEQUENCES;

        // If the escape character is also found in the escape sequences, move it
        // to the end of the array to ensure it is either escaped first or
        // unescaped last.
        if (in_array($this->escapeChar, self::ESCAPE_SEQUENCES, true)) {
            $sequence = array_search($this->escapeChar, $escapeSequences);

            unset($escapeSequences[$sequence]);
            $escapeSequences[$sequence] = $this->escapeChar;
        }

        $sequences = array_map(function ($sequence) {
            return $this->escapeChar . $sequence . $this->escapeChar;
        }, array_keys($escapeSequences));

        $meanings = array_values($escapeSequences);

        $this->escapeSequences = array_combine($sequences, $meanings);
    }

    protected function getSequences(): array
    {
        return array_keys($this->escapeSequences);
    }

    protected function getMeanings(): array
    {
        return array_values($this->escapeSequences);
    }

    /**
     * Convert separator characters in a string into their escaped meanings.
     *
     * @param string $value
     */
    public function escape(string $value): string
    {
        return str_replace(
            array_reverse($this->getMeanings()),
            array_reverse($this->getSequences()),
            $value
        );
    }

    /**
     * Convert escaped separator characters into their regular form.
     *
     * @param string $value
     */
    public function unescape(string $value): string
    {
        return str_replace(
            $this->getSequences(),
            $this->getMeanings(),
            $value
        );
    }
}
