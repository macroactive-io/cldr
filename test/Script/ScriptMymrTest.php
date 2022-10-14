<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMymr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMymrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMymr();

        self::assertSame('Mymr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('350', $script->number());
        self::assertSame(array('၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'), $script->numerals());
        self::assertSame('Myanmar', $script->unicodeName());
    }
}
