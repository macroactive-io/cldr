<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTh;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptThai;
use Fisharebest\Localization\Territory\TerritoryTh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleThTh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleThThTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleThTh();

        $this->assertEquals(new LanguageTh(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptThai(), $locale->script());
        $this->assertEquals(new TerritoryTh(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('๐๑๒๓๔๕๖๗๘๙', $locale->digits('0123456789'));
        $this->assertSame('lang="th"', $locale->htmlAttributes());
        $this->assertSame('-๑๒๓', $locale->number(-123));
        $this->assertSame('๑๒,๓๔๕,๖๗๘.๐๙', $locale->number(12345678.09));
        $this->assertSame('๑,๒๓๔.๕๖%', $locale->percent(12.3456));
    }
}
