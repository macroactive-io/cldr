<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageLt;
use Macroactive\Cldr\PluralRule\PluralRule6;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryLt;
use PHPUnit\Framework\TestCase;

class LocaleLtTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLt();

        self::assertSame(LanguageLt::class, $locale->language()::class);
        self::assertSame(PluralRule6::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryLt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('lt_LT', $locale->code());
        self::assertSame('lithuanian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lietuvių', $locale->endonym());
        self::assertSame('lang="lt"', $locale->htmlAttributes());
        self::assertSame('lt', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
