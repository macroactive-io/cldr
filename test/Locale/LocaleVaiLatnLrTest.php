<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVai;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVaiLatnLr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleVaiLatnLrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleVaiLatnLr();

        $this->assertEquals(new LanguageVai(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryLr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="vai-Latn"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
