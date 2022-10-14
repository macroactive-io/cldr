<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNarb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNarbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNarb();

        self::assertSame('Narb', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('106', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_North_Arabian', $script->unicodeName());
    }
}
