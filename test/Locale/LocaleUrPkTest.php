<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleUrPk class
 *
 * @coversNothing
 */
class LocaleUrPkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleUrPk();

        self::assertEquals(new LanguageUr(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryPk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ur" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('١,٢٣,٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame('‎-١٢٣', $locale->number(-123));
        self::assertSame('١,٢٣٤.٥٦%', $locale->percent(12.3456));
    }
}
