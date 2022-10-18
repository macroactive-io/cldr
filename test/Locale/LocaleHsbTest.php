<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHsb;
use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryDe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHsb class
 *
 * @coversNothing
 */
class LocaleHsbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleHsb();

        self::assertEquals(new LanguageHsb(), $locale->language());
        self::assertEquals(new PluralRule10(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryDe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('hsb_DE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('hornjoserbšćina', $locale->endonym());
        self::assertSame('lang="hsb"', $locale->htmlAttributes());
        self::assertSame('hsb', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
