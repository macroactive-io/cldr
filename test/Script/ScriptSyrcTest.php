<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSyrc class
 *
 * @coversNothing
 */
class ScriptSyrcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSyrc();

        self::assertSame('Syrc', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('135', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Syriac', $script->unicodeName());
    }
}
