<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHu;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryHu;
use PHPUnit\Framework\TestCase;

class LocaleHuTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleHu();

        self::assertSame(LanguageHu::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryHu::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('hu_HU', $locale->code());
        self::assertSame('hungarian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('magyar', $locale->endonym());
        self::assertSame('lang="hu"', $locale->htmlAttributes());
        self::assertSame('hu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
