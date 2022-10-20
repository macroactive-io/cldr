<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAf;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNa;
use PHPUnit\Framework\TestCase;

class LocaleAfNaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleAfNa();

        self::assertSame(LanguageAf::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('af_NA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="af-NA"', $locale->htmlAttributes());
        self::assertSame('af-NA', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
