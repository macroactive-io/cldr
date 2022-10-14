<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMerc class
 *
 * @coversNothing
 */
class ScriptMercTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMerc();

        self::assertSame('Merc', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('101', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Meroitic_Cursive', $script->unicodeName());
    }
}
