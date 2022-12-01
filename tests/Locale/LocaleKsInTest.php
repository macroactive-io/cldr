<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKs;
use Macroactive\Cldr\Locale\LocaleKsIn;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocaleKsInTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKsIn();

        self::assertSame(LanguageKs::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ks_IN', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ks" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ks', $locale->languageTag());
        self::assertSame('١٬٢٣٬٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
