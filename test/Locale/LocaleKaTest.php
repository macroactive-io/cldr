<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKa;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGeor;
use Macroactive\Cldr\Territory\TerritoryGe;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleKa;

class LocaleKaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKa();

        self::assertSame(LanguageKa::class, $locale->language()::class);
        self::assertSame(ScriptGeor::class, $locale->script()::class);
        self::assertSame(TerritoryGe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ka_GE', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ka"', $locale->htmlAttributes());
        self::assertSame('ka', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
