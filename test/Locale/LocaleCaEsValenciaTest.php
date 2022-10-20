<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCa;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEs;
use Macroactive\Cldr\Variant\VariantValencia;
use PHPUnit\Framework\TestCase;

class LocaleCaEsValenciaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCaEsValencia();

        self::assertSame(LanguageCa::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryEs::class, $locale->territory()::class);
        self::assertSame(VariantValencia::class, $locale->variant()::class);
        self::assertSame('ca_ES@valencia', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ca-valencia"', $locale->htmlAttributes());
        self::assertSame('ca-valencia', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
