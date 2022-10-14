<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLina class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLinaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLina();

        self::assertSame('Lina', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('400', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Linear_A', $script->unicodeName());
    }
}
