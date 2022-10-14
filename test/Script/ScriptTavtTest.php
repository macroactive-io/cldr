<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTavt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTavtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTavt();

        self::assertSame('Tavt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('359', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tai_Viet', $script->unicodeName());
    }
}
