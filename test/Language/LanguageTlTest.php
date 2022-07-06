<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTagalog;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageTl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageTl();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertEquals(new PluralRuleTagalog(), $language->pluralRule());
        $this->assertSame('tl', $language->code());
    }
}
