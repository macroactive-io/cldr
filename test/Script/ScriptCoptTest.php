<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCopt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCoptTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCopt();

        self::assertSame('Copt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('204', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Coptic', $script->unicodeName());
    }
}
