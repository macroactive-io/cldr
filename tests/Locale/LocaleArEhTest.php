<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\Locale\LocaleArEh;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryEh;
use PHPUnit\Framework\TestCase;

class LocaleArEhTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArEh();

        self::assertSame(LanguageAr::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryEh::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ar_EH', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ar-EH" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-EH', $locale->languageTag());
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('‎-123', $locale->number(-123));
        self::assertSame('1,234.56‎%‎', $locale->percent(12.3456));
    }
}
