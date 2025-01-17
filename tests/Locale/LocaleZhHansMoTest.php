<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageZh;
use Macroactive\Cldr\Locale\LocaleZhHansMo;
use Macroactive\Cldr\Script\ScriptHans;
use Macroactive\Cldr\Territory\TerritoryMo;
use PHPUnit\Framework\TestCase;

class LocaleZhHansMoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleZhHansMo();

        self::assertSame(LanguageZh::class, $locale->language()::class);
        self::assertSame(ScriptHans::class, $locale->script()::class);
        self::assertSame(TerritoryMo::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="zh-MO"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
