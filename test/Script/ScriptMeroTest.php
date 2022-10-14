<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMero class
 *
 * @coversNothing
 */
class ScriptMeroTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMero();

        self::assertSame('Mero', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('100', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Meroitic_Hieroglyphs', $script->unicodeName());
    }
}
