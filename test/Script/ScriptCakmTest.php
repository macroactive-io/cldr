<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCakm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCakmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCakm();

        self::assertSame('Cakm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('349', $script->number());
        self::assertSame(array('𑄶', '𑄷', '𑄸', '𑄹', '𑄺', '𑄻', '𑄼', '𑄽', '𑄾', '𑄿'), $script->numerals());
        self::assertSame('Chakma', $script->unicodeName());
    }
}
