<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSe;
use Macroactive\Cldr\Locale\LocaleSeNo;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNo;
use PHPUnit\Framework\TestCase;

class LocaleSeNoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSeNo();

        self::assertSame(LanguageSe::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNo::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('se_NO', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="se"', $locale->htmlAttributes());
        self::assertSame('se', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
