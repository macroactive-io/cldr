<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptVaii;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageVai class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageVaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageVai();

        $this->assertEquals(new ScriptVaii(), $language->defaultScript());
        $this->assertSame('vai', $language->code());
    }
}
