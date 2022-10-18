<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHy;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArmn;
use Macroactive\Cldr\Territory\TerritoryAm;
use PHPUnit\Framework\TestCase;

class LocaleHyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleHy();

        self::assertEquals(new LanguageHy(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptArmn(), $locale->script());
        self::assertEquals(new TerritoryAm(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('hy_AM', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('հայերեն', $locale->endonym());
        self::assertSame('lang="hy"', $locale->htmlAttributes());
        self::assertSame('hy', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
