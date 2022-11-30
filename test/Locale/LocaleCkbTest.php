<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCkb;
use Macroactive\Cldr\Locale\LocaleCkb;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIq;
use PHPUnit\Framework\TestCase;

class LocaleCkbTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCkb();

        self::assertSame(LanguageCkb::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryIq::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ckb_IQ', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ckb" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‏-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
