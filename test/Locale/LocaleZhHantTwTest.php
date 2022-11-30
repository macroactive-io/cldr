<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageZh;
use Macroactive\Cldr\Locale\LocaleZhHantTw;
use Macroactive\Cldr\Script\ScriptHant;
use Macroactive\Cldr\Territory\TerritoryTw;
use PHPUnit\Framework\TestCase;

class LocaleZhHantTwTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleZhHantTw();

        self::assertSame(LanguageZh::class, $locale->language()::class);
        self::assertSame(ScriptHant::class, $locale->script()::class);
        self::assertSame(TerritoryTw::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="zh-Hant-TW"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12345,678.09', $locale->number(12345678.09));
        self::assertSame('1234.56%', $locale->percent(12.3456));
    }
}
