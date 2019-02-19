<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptHmnpTest class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptHmnpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHmnp();

        $this->assertSame('Hmnp', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('451', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Nyiakeng_Puachue_Hmong', $script->unicodeName());
    }
}
