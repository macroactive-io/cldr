<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePl;
use Macroactive\Cldr\PluralRule\PluralRule9;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryPl;
use PHPUnit\Framework\TestCase;

class LocalePlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePl();

        self::assertSame(LanguagePl::class, $locale->language()::class);
        self::assertSame(PluralRule9::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryPl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('pl_PL', $locale->code());
        self::assertSame('polish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('polski', $locale->endonym());
        self::assertSame('lang="pl"', $locale->htmlAttributes());
        self::assertSame('pl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
