<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageArs;
use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritorySa;
use PHPUnit\Framework\TestCase;

class LocaleArsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleArs();

        self::assertSame(LanguageArs::class, $locale->language()::class);
        self::assertSame(PluralRule12::class, $locale->pluralRule()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritorySa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ars_SA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('اللهجة النجدية‎', $locale->endonym());
        self::assertSame('lang="ars" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ars', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
