<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOgam class
 *
 * @coversNothing
 */
class ScriptOgamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOgam();

        self::assertSame('Ogam', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('212', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ogham', $script->unicodeName());
    }
}
