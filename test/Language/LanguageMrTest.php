<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptDeva;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LanguageMr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LanguageMrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageMr();

        $this->assertEquals(new ScriptDeva(), $language->defaultScript());
        $this->assertEquals(new PluralRule2(), $language->pluralRule());
        $this->assertSame('mr', $language->code());
    }
}
