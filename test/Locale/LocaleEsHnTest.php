<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEs;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryHn;
use PHPUnit\Framework\TestCase;

class LocaleEsHnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEsHn();

        self::assertEquals(new LanguageEs(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryHn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('es_HN', $locale->code());
        self::assertSame('spanish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="es-HN"', $locale->htmlAttributes());
        self::assertSame('es-HN', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
