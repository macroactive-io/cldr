<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCeLatn class
 *
 * @coversNothing
 */
class LocaleCeLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleCeLatn();

        self::assertEquals(new LanguageCe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryRu(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ce_RU@latin', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Chechen', $locale->endonym());
        self::assertSame('lang="ce-Latn"', $locale->htmlAttributes());
        self::assertSame('ce-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame("1,234.56\u{a0}%", $locale->percent(12.3456));
    }
}
