<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCans class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCansTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCans();

        self::assertSame('Cans', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('440', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Canadian_Aboriginal', $script->unicodeName());
    }
}
