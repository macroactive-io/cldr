<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTzm;
use Fisharebest\Localization\PluralRule\PluralRuleCentralAtlasTamazight;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleTzmMa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleTzmMaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTzmMa();

        $this->assertEquals(new LanguageTzm(), $locale->language());
        $this->assertEquals(new PluralRuleCentralAtlasTamazight(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryMa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="tzm"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
