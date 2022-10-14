<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryEh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleArEh class
 *
 * @coversNothing
 */
class LocaleArEhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleArEh();

        self::assertEquals(new LanguageAr(), $locale->language());
        self::assertEquals(new PluralRule12(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryEh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ar_EH', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ar-EH" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-EH', $locale->languageTag());
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('‎-123', $locale->number(-123));
        self::assertSame('1,234.56‎%‎', $locale->percent(12.3456));
    }
}
