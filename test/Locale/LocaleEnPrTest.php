<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEn;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEnPr class
 *
 * @coversNothing
 */
class LocaleEnPrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEnPr();

        self::assertEquals(new LanguageEn(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('en_PR', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-PR"', $locale->htmlAttributes());
        self::assertSame('en-PR', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
