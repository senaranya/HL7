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
     * @param string $escapeChar
     */
    public function __construct(string $escapeChar)
    {
        $this->escapeChar = $escapeChar;

        $this->buildEscapeSequences();
    }

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
