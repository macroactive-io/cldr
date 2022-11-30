<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKsh;
use Macroactive\Cldr\Locale\LocaleKsh;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryDe;
use PHPUnit\Framework\TestCase;

class LocaleKshTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKsh();

        self::assertSame(LanguageKsh::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryDe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ksh_DE', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ksh"', $locale->htmlAttributes());
        self::assertSame('ksh', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
