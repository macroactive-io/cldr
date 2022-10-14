<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNand class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNand();

        self::assertSame('Nand', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('311', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Nandinagari', $script->unicodeName());
    }
}
