<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLimb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLimbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLimb();

        self::assertSame('Limb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('336', $script->number());
        self::assertSame(array('᥆', '᥇', '᥈', '᥉', '᥊', '᥋', '᥌', '᥍', '᥎', '᥏'), $script->numerals());
        self::assertSame('Limbu', $script->unicodeName());
    }
}
