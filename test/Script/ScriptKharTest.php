<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhar class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKharTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKhar();

        self::assertSame('Khar', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('305', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Kharoshthi', $script->unicodeName());
    }
}
