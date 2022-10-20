<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryDe;
use PHPUnit\Framework\TestCase;

class LocaleDeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleDe();

        self::assertSame(LanguageDe::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryDe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('de_DE', $locale->code());
        self::assertSame('german2_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Deutsch', $locale->endonym());
        self::assertSame('lang="de"', $locale->htmlAttributes());
        self::assertSame('de', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
