<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptHmng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptHmngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHmng();

        $this->assertSame('Hmng', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('450', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Pahawh_Hmong', $script->unicodeName());
    }
}
