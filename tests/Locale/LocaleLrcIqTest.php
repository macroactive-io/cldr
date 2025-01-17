<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageLrc;
use Macroactive\Cldr\Locale\LocaleLrcIq;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIq;
use PHPUnit\Framework\TestCase;

class LocaleLrcIqTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLrcIq();

        self::assertSame(LanguageLrc::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryIq::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('lrc_IQ', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="lrc-IQ" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('lrc-IQ', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
