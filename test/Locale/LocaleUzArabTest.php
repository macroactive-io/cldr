<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageUz;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryUz;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleUzArab;

class LocaleUzArabTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleUzArab();

        self::assertSame(LanguageUz::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryUz::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="uz-Arab" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
