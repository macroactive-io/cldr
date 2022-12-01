<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\Locale\LocaleArQa;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryQa;
use PHPUnit\Framework\TestCase;

class LocaleArQaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArQa();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryQa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_QA', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ar-QA" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-QA', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
