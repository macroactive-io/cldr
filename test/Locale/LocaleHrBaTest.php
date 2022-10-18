<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHr;
use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryBa;
use PHPUnit\Framework\TestCase;

class LocaleHrBaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleHrBa();

        self::assertEquals(new LanguageHr(), $locale->language());
        self::assertEquals(new PluralRule7(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryBa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('hr_BA', $locale->code());
        self::assertSame('croatian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="hr-BA"', $locale->htmlAttributes());
        self::assertSame('hr-BA', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
