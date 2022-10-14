<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMand class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMand();

        self::assertSame('Mand', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('140', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Mandaic', $script->unicodeName());
    }
}
