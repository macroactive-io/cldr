<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLepc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLepcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLepc();

        self::assertSame('Lepc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('335', $script->number());
        self::assertSame(array('᱀', '᱁', '᱂', '᱃', '᱄', '᱅', '᱆', '᱇', '᱈', '᱉'), $script->numerals());
        self::assertSame('Lepcha', $script->unicodeName());
    }
}
