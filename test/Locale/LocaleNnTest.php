<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNn;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNn class
 *
 * @coversNothing
 */
class LocaleNnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleNn();

        self::assertEquals(new LanguageNn(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryNo(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('nn_NO', $locale->code());
        self::assertSame('danish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('nynorsk', $locale->endonym());
        self::assertSame('lang="nn"', $locale->htmlAttributes());
        self::assertSame('nn', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
