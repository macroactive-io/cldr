<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePa;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePaArabPk class
 *
 * @coversNothing
 */
class LocalePaArabPkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePaArabPk();

        self::assertEquals(new LanguagePa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryPk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pa_PK@arabic', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="pa-Arab-PK" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('pa-Arab-PK', $locale->languageTag());
        self::assertSame('١,٢٣,٤٥,٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('-١٢٣', $locale->number(-123));
        self::assertSame('١,٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
