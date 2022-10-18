<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFa;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryAf;
use PHPUnit\Framework\TestCase;

class LocaleFaAfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFaAf();

        self::assertEquals(new LanguageFa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryAf(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('fa_AF', $locale->code());
        self::assertSame('persian_ci', $locale->collation());
        self::assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        self::assertSame('lang="fa-AF" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('fa-AF', $locale->languageTag());
        self::assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        self::assertSame('‎−۱۲۳', $locale->number(-123));
        self::assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
