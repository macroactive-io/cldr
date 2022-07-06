<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptChrs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptChrsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptChrs();

        $this->assertSame('Chrs', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('109', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Chorasmian', $script->unicodeName());
    }
}