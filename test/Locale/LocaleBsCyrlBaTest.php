<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBs;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBsCyrlBa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBsCyrlBaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBsCyrlBa();

        $this->assertEquals(new LanguageBs(), $locale->language());
        $this->assertEquals(new PluralRule7(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryBa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('bs_BA@cyrillic', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="bs-Cyrl"', $locale->htmlAttributes());
        $this->assertSame('bs-Cyrl', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
