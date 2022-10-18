<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageKa;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGeor;
use Macroactive\Cldr\Territory\TerritoryGe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKa class
 *
 * @coversNothing
 */
class LocaleKaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleKa();

        self::assertEquals(new LanguageKa(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptGeor(), $locale->script());
        self::assertEquals(new TerritoryGe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ka_GE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ქართული', $locale->endonym());
        self::assertSame('lang="ka"', $locale->htmlAttributes());
        self::assertSame('ka', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
