<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMtei class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMteiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMtei();

        self::assertSame('Mtei', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('337', $script->number());
        self::assertSame(array('꯰', '꯱', '꯲', '꯳', '꯴', '꯵', '꯶', '꯷', '꯸', '꯹'), $script->numerals());
        self::assertSame('Meetei_Mayek', $script->unicodeName());
    }
}
