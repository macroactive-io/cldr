<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageFa;
use Macroactive\Cldr\Locale\LocaleFaAf;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryAf;
use PHPUnit\Framework\TestCase;

class LocaleFaAfTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFaAf();

        self::assertSame(LanguageFa::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryAf::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fa_AF', $locale->code());

        self::assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        self::assertSame('lang="fa-AF" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('fa-AF', $locale->languageTag());
        self::assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        self::assertSame('‎−۱۲۳', $locale->number(-123));
        self::assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
