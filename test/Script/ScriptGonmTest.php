<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGonmTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGonmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGonm();

        self::assertSame('Gonm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('313', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Masaram_Gondi', $script->unicodeName());
    }
}
