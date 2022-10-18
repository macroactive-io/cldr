<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFa;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

class LocaleFaIrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFaIr();

        self::assertEquals(new LanguageFa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('fa_IR', $locale->code());
        self::assertSame('persian_ci', $locale->collation());
        self::assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        self::assertSame('lang="fa" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('fa', $locale->languageTag());
        self::assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        self::assertSame('‎−۱۲۳', $locale->number(-123));
        self::assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
