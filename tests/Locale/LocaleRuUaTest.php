<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageRu;
use Macroactive\Cldr\Locale\LocaleRuUa;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryUa;
use PHPUnit\Framework\TestCase;

class LocaleRuUaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleRuUa();

        self::assertSame(LanguageRu::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryUa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ru_UA', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ru-UA"', $locale->htmlAttributes());
        self::assertSame('ru-UA', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
