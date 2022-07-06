<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRm;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleRmCh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRmChTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleRmCh();

        $this->assertEquals(new LanguageRm(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryCh(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('rm_CH', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="rm"', $locale->htmlAttributes());
        $this->assertSame('rm', $locale->languageTag());
        $this->assertSame('12’345’678.09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1’234.56 %', $locale->percent(12.3456));
    }
}
