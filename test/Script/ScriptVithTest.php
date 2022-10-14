<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptVith class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptVithTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptVith();

        self::assertSame('Vith', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('228', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Vithkuqi', $script->unicodeName());
    }
}
