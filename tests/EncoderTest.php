<?php

declare(strict_types=1);

namespace Aranyasen\HL7\Tests;

use Aranyasen\HL7\Encoder;

class EncoderTest extends TestCase
{
    /** @test */
    public function encoder_can_escape_pipe_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a\F\b', $encoder->escape('a|b'));
    }

    /** @test */
    public function encoder_can_escape_tilde_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a\R\b', $encoder->escape('a~b'));
    }

    /** @test */
    public function encoder_can_escape_carat_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a\S\b', $encoder->escape('a^b'));
    }

    /** @test */
    public function encoder_can_escape_ampersand_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a\T\b', $encoder->escape('a&b'));
    }

    /** @test */
    public function encoder_can_escape_escape_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a\E\b', $encoder->escape('a\b'));
    }

    /** @test */
    public function encoder_can_unescape_pipe_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a|b', $encoder->unescape('a\F\b'));
    }

    /** @test */
    public function encoder_can_unescape_tilde_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a~b', $encoder->unescape('a\R\b'));
    }

    /** @test */
    public function encoder_can_unescape_carat_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a^b', $encoder->unescape('a\S\b'));
    }

    /** @test */
    public function encoder_can_unescape_ampersand_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a&b', $encoder->unescape('a\T\b'));
    }

    /** @test */
    public function encoder_can_unescape_escape_character(): void
    {
        $encoder = new Encoder('\\');
        self::assertSame('a\b', $encoder->unescape('a\E\b'));
    }
}
