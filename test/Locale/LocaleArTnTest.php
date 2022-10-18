<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryTn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleArTn class
 *
 * @coversNothing
 */
class LocaleArTnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleArTn();

        self::assertEquals(new LanguageAr(), $locale->language());
        self::assertEquals(new PluralRule12(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryTn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ar_TN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ar-TN" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-TN', $locale->languageTag());
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('‎-123', $locale->number(-123));
        self::assertSame('1.234,56‎%‎', $locale->percent(12.3456));
    }
}
