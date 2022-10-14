<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBatk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBatkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBatk();

        self::assertSame('Batk', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('365', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Batak', $script->unicodeName());
    }
}
