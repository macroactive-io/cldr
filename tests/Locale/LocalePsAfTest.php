<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguagePs;
use Macroactive\Cldr\Locale\LocalePsAf;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryAf;
use PHPUnit\Framework\TestCase;

class LocalePsAfTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePsAf();

        self::assertSame(LanguagePs::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryAf::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ps_AF', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ps-AF" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ps-AF', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
