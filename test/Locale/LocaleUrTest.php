<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageUr;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

class LocaleUrTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleUr();

        self::assertSame(LanguageUr::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryPk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('اردو', $locale->endonym());
        self::assertSame('lang="ur" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('١,٢٣,٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame('‎-١٢٣', $locale->number(-123));
        self::assertSame('١,٢٣٤.٥٦%', $locale->percent(12.3456));
    }
}
