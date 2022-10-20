<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageIu;
use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptCans;
use Macroactive\Cldr\Territory\TerritoryCa;
use PHPUnit\Framework\TestCase;

class LocaleIuTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleIu();

        self::assertSame(LanguageIu::class, $locale->language()::class);
        self::assertSame(PluralRuleOneTwoOther::class, $locale->pluralRule()::class);
        self::assertSame(ScriptCans::class, $locale->script()::class);
        self::assertSame(TerritoryCa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('iu_CA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ᐃᓄᒃᑎᑐᑦ', $locale->endonym());
        self::assertSame('lang="iu"', $locale->htmlAttributes());
        self::assertSame('iu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
