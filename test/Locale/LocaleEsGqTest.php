<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGq;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEsGq class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsGqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEsGq();

        $this->assertEquals(new LanguageEs(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryGq(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('es_GQ', $locale->code());
        $this->assertSame('spanish_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="es-GQ"', $locale->htmlAttributes());
        $this->assertSame('es-GQ', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
