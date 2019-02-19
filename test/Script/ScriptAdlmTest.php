<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptAdlm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptAdlmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAdlm();

        $this->assertSame('Adlm', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('166', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Adlam', $script->unicodeName());
    }
}
