<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptArmiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptArmi();

        self::assertSame('Armi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('124', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Imperial_Aramaic', $script->unicodeName());
    }
}
