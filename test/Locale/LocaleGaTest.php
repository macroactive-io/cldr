<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGa;
use Macroactive\Cldr\PluralRule\PluralRule11;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIe;
use PHPUnit\Framework\TestCase;

class LocaleGaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleGa();

        self::assertSame(LanguageGa::class, $locale->language()::class);
        self::assertSame(PluralRule11::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryIe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ga_IE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Gaeilge', $locale->endonym());
        self::assertSame('lang="ga"', $locale->htmlAttributes());
        self::assertSame('ga', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
