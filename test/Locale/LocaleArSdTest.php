<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritorySd;
use PHPUnit\Framework\TestCase;

class LocaleArSdTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArSd();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(PluralRule12::class, $locale->pluralRule()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritorySd::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_SD', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ar-SD" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-SD', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
