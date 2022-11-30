<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryYe;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleArYe;

class LocaleArYeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArYe();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryYe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_YE', $locale->code());
        
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ar-YE" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-YE', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
