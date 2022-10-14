<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSidd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSiddTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSidd();

        self::assertSame('Sidd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('302', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Siddham', $script->unicodeName());
    }
}
