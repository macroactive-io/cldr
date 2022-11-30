<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\Locale\LocaleArAe;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryAe;
use PHPUnit\Framework\TestCase;

class LocaleArAeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArAe();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryAe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_AE', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ar-AE" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-AE', $locale->languageTag());
        self::assertSame('١٢,٣٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame("\xE2\x80\x8E\x2d١٢٣" , $locale->number(-123));
        $debug = 'actual: ' . bin2hex($locale->percent(12.3456));
        $debug .= ' | expected: ' . bin2hex("١,٢٣٤.٥٦\xe2\x80\x8e\x25\xe2\x80\x8e");
        self::assertSame("١,٢٣٤.٥٦\xe2\x80\x8e\x25\xe2\x80\x8e", $locale->percent(12.3456), $debug);
    }
}
