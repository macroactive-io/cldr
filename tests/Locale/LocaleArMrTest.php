<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\Locale\LocaleArMr;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryMr;
use PHPUnit\Framework\TestCase;

class LocaleArMrTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArMr();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryMr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_MR', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ar-MR" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-MR', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
