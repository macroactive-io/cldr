<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageShi;
use Macroactive\Cldr\PluralRule\PluralRuleTachelhit;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

class LocaleShiLatnMaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleShiLatnMa();

        self::assertEquals(new LanguageShi(), $locale->language());
        self::assertEquals(new PluralRuleTachelhit(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('shi_MA@latin', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('tamazight', $locale->endonym());
        self::assertSame('lang="shi-Latn"', $locale->htmlAttributes());
        self::assertSame('shi-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
