<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageKm;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKhmr;
use Macroactive\Cldr\Territory\TerritoryKh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKm class
 *
 * @coversNothing
 */
class LocaleKmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleKm();

        self::assertEquals(new LanguageKm(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptKhmr(), $locale->script());
        self::assertEquals(new TerritoryKh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('km_KH', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('០១២៣៤៥៦៧៨៩', $locale->digits('0123456789'));
        self::assertSame('ខ្មែរ', $locale->endonym());
        self::assertSame('lang="km"', $locale->htmlAttributes());
        self::assertSame('km', $locale->languageTag());
        self::assertSame('-១២៣', $locale->number(-123));
        self::assertSame('១២.៣៤៥.៦៧៨,០៩', $locale->number(12345678.09));
        self::assertSame('១.២៣៤,៥៦%', $locale->percent(12.3456));
    }
}
