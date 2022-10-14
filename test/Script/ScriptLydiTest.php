<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLydi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLydiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLydi();

        self::assertSame('Lydi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('116', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Lydian', $script->unicodeName());
    }
}
