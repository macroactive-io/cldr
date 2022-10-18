<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePa;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePaArab class
 *
 * @coversNothing
 */
class LocalePaArabTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePaArab();

        self::assertEquals(new LanguagePa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pa_IN@arabic', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="pa-Arab" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('pa-Arab', $locale->languageTag());
        self::assertSame('١,٢٣,٤٥,٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('-١٢٣', $locale->number(-123));
        self::assertSame('١,٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
