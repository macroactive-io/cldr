<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCyrl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCyrl();

        self::assertSame('Cyrl', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('220', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Cyrillic', $script->unicodeName());
    }
}
