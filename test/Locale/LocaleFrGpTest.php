<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFr;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGp;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFrGp class
 *
 * @coversNothing
 */
class LocaleFrGpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFrGp();

        self::assertEquals(new LanguageFr(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryGp(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('fr_GP', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="fr-GP"', $locale->htmlAttributes());
        self::assertSame('fr-GP', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{202f}345\u{202f}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{202f}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
