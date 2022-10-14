<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNbat class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNbatTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNbat();

        self::assertSame('Nbat', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('159', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Nabataean', $script->unicodeName());
    }
}
