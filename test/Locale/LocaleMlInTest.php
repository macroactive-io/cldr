<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptMlym;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMlIn class
 *
 * @coversNothing
 */
class LocaleMlInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMlIn();

        self::assertEquals(new LanguageMl(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptMlym(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ml_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('൦൧൨൩൪൫൬൭൮൯', $locale->digits('0123456789'));
        self::assertSame('lang="ml"', $locale->htmlAttributes());
        self::assertSame('ml', $locale->languageTag());
        self::assertSame('-൧൨൩', $locale->number(-123));
        self::assertSame('൧,൨൩,൪൫,൬൭൮.൦൯', $locale->number(12345678.09));
        self::assertSame('൧,൨൩൪.൫൬%', $locale->percent(12.3456));
    }
}
