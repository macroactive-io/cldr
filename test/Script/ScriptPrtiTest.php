<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPrti class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPrtiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPrti();

        self::assertSame('Prti', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('130', $script->number());
        self::assertSame('Inscriptional_Parthian', $script->unicodeName());
        self::assertSame(array(), $script->numerals());
    }
}
