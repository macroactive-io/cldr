<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritorySa;
use PHPUnit\Framework\TestCase;

class LocaleArSaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArSa();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(PluralRule12::class, $locale->pluralRule()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritorySa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_SA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ar-SA" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-SA', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
