<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMy;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptMymr;
use Fisharebest\Localization\Territory\TerritoryMm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMy();

        self::assertEquals(new LanguageMy(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptMymr(), $locale->script());
        self::assertEquals(new TerritoryMm(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('my_MM', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('၀၁၂၃၄၅၆၇၈၉', $locale->digits('0123456789'));
        self::assertSame('မြန်မာ', $locale->endonym());
        self::assertSame('lang="my"', $locale->htmlAttributes());
        self::assertSame('my', $locale->languageTag());
        self::assertSame('-၁၂၃', $locale->number(-123));
        self::assertSame('၁၂၃၄၅,၆၇၈.၀၉', $locale->number(12345678.09));
        self::assertSame('၁၂၃၄.၅၆%', $locale->percent(12.3456));
    }
}
