<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCprt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCprtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCprt();

        self::assertSame('Cprt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('403', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Cypriot', $script->unicodeName());
    }
}
