<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7\EscapeSequenceHandler;

class EscapeSequenceHandlerTest extends TestCase
{
    /** @test */
    public function escape_sequence_handler_can_escape_pipe_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a\F\b', $escapeSequenceHandler->escape('a|b'));
    }

    /** @test */
    public function escape_sequence_handler_can_escape_tilde_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a\R\b', $escapeSequenceHandler->escape('a~b'));
    }

    /** @test */
    public function escape_sequence_handler_can_escape_carat_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a\S\b', $escapeSequenceHandler->escape('a^b'));
    }

    /** @test */
    public function escape_sequence_handler_can_escape_ampersand_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a\T\b', $escapeSequenceHandler->escape('a&b'));
    }

    /** @test */
    public function escape_sequence_handler_can_escape_escape_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a\E\b', $escapeSequenceHandler->escape('a\b'));
    }

    /** @test */
    public function escape_sequence_handler_can_unescape_pipe_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a|b', $escapeSequenceHandler->unescape('a\F\b'));
    }

    /** @test */
    public function escape_sequence_handler_can_unescape_tilde_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a~b', $escapeSequenceHandler->unescape('a\R\b'));
    }

    /** @test */
    public function escape_sequence_handler_can_unescape_carat_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a^b', $escapeSequenceHandler->unescape('a\S\b'));
    }

    /** @test */
    public function escape_sequence_handler_can_unescape_ampersand_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a&b', $escapeSequenceHandler->unescape('a\T\b'));
    }

    /** @test */
    public function escape_sequence_handler_can_unescape_escape_character(): void
    {
        $escapeSequenceHandler = new EscapeSequenceHandler('\\');
        self::assertSame('a\b', $escapeSequenceHandler->unescape('a\E\b'));
    }
}
