<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGrek;
use Fisharebest\Localization\Territory\TerritoryCy;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleElCy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleElCyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleElCy();

        self::assertEquals(new LanguageEl(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptGrek(), $locale->script());
        self::assertEquals(new TerritoryCy(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('el_CY', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="el-CY"', $locale->htmlAttributes());
        self::assertSame('el-CY', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
