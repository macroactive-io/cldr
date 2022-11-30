<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguagePs;
use Macroactive\Cldr\Locale\LocalePs;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

class LocalePsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePs();

        self::assertSame(LanguagePs::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryPk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ps_PK', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ps" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ps', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
