<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageLrc;
use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleLrcIr;

class LocaleLrcIrTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLrcIr();

        self::assertSame(LanguageLrc::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryIr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('lrc_IR', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="lrc" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('lrc', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
