<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageShi;
use Macroactive\Cldr\PluralRule\PluralRuleTachelhit;
use Macroactive\Cldr\Script\ScriptTfng;
use Macroactive\Cldr\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

class LocaleShiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleShi();

        self::assertSame(LanguageShi::class, $locale->language()::class);
        self::assertSame(PluralRuleTachelhit::class, $locale->pluralRule()::class);
        self::assertSame(ScriptTfng::class, $locale->script()::class);
        self::assertSame(TerritoryMa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('shi_MA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ⵜⴰⵛⵍⵃⵉⵜ', $locale->endonym());
        self::assertSame('lang="shi" dir="ltr"', $locale->htmlAttributes());
        self::assertSame('shi', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
