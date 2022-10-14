<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKm;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKhmr;
use Fisharebest\Localization\Territory\TerritoryKh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKmKh class
 *
 * @coversNothing
 */
class LocaleKmKhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleKmKh();

        self::assertEquals(new LanguageKm(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptKhmr(), $locale->script());
        self::assertEquals(new TerritoryKh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('km_KH', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('០១២៣៤៥៦៧៨៩', $locale->digits('0123456789'));
        self::assertSame('lang="km"', $locale->htmlAttributes());
        self::assertSame('km', $locale->languageTag());
        self::assertSame('-១២៣', $locale->number(-123));
        self::assertSame('១២.៣៤៥.៦៧៨,០៩', $locale->number(12345678.09));
        self::assertSame('១.២៣៤,៥៦%', $locale->percent(12.3456));
    }
}
