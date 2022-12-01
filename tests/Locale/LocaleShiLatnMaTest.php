<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageShi;
use Macroactive\Cldr\Locale\LocaleShiLatnMa;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

class LocaleShiLatnMaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleShiLatnMa();

        self::assertSame(LanguageShi::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('shi_MA@latin', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="shi-Latn"', $locale->htmlAttributes());
        self::assertSame('shi-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
