<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptArmnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptArmn();

        self::assertSame('Armn', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('230', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Armenian', $script->unicodeName());
    }
}
