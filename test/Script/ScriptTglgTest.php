<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTglg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTglgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTglg();

        self::assertSame('Tglg', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('370', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tagalog', $script->unicodeName());
    }
}
