<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBali class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBaliTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBali();

        self::assertSame('Bali', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('360', $script->number());
        self::assertSame(array('᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙'), $script->numerals());
        self::assertSame('Balinese', $script->unicodeName());
    }
}
