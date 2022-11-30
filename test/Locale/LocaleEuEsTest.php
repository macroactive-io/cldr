<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEu;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEs;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleEuEs;

class LocaleEuEsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEuEs();

        self::assertSame(LanguageEu::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryEs::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('eu_ES', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="eu"', $locale->htmlAttributes());
        self::assertSame('eu', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("%\u{a0}1.234,56", $locale->percent(12.3456));
    }
}
