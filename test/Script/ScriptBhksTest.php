<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBhks class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBhksTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBhks();

        self::assertSame('Bhks', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('334', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Bhaiksuki', $script->unicodeName());
    }
}
