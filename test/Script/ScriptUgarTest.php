<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptUgar class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptUgarTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptUgar();

        self::assertSame('Ugar', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('040', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Ugaritic', $script->unicodeName());
    }
}
