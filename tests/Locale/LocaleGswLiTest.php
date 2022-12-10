<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageGsw;
use Macroactive\Cldr\Locale\LocaleGswLi;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryLi;
use PHPUnit\Framework\TestCase;

class LocaleGswLiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleGswLi();

        self::assertSame(LanguageGsw::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryLi::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('gsw_LI', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="gsw-LI"', $locale->htmlAttributes());
        self::assertSame('gsw-LI', $locale->languageTag());
        self::assertSame('12’345’678.09', $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1’234.56\u{a0}%", $locale->percent(12.3456));
    }
}