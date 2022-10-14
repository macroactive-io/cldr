<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGran class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGranTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGran();

        self::assertSame('Gran', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('343', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Grantha', $script->unicodeName());
    }
}
