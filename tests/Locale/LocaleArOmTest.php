<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\Locale\LocaleArOm;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryOm;
use PHPUnit\Framework\TestCase;

class LocaleArOmTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArOm();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryOm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_OM', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ar-OM" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-OM', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
