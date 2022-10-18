<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTelu class
 *
 * @coversNothing
 */
class ScriptTeluTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTelu();

        self::assertSame('Telu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('340', $script->number());
        self::assertSame(['౦', '౧', '౨', '౩', '౪', '౫', '౬', '౭', '౮', '౯'], $script->numerals());
        self::assertSame('Telugu', $script->unicodeName());
    }
}
