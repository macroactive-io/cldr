<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMk;
use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryMk;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleMk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleMkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMk();

        $this->assertEquals(new LanguageMk(), $locale->language());
        $this->assertEquals(new PluralRule15(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryMk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('mk_MK', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('македонски', $locale->endonym());
        $this->assertSame('lang="mk"', $locale->htmlAttributes());
        $this->assertSame('mk', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
