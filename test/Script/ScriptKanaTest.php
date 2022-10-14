<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKana class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKanaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKana();

        self::assertSame('Kana', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('411', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Katakana', $script->unicodeName());
    }
}
