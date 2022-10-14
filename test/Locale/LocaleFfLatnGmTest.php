<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFf;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFfLatnGm class
 *
 * @coversNothing
 */
class LocaleFfLatnGmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFfLatnGm();

        self::assertEquals(new LanguageFf(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryGm(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ff_GM', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Pulaar', $locale->endonym());
        self::assertSame('lang="ff-GM"', $locale->htmlAttributes());
        self::assertSame('ff-GM', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
