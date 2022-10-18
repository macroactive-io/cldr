<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryUs;
use Macroactive\Cldr\Variant\VariantPosix;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEnUsPosix class
 *
 * @coversNothing
 */
class LocaleEnUsPosixTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEnUsPosix();

        self::assertEquals(new LanguageEn(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryUs(), $locale->territory());
        self::assertEquals(new VariantPosix(), $locale->variant());
        self::assertSame('POSIX', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-US-posix"', $locale->htmlAttributes());
        self::assertSame('en-US-posix', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12345678.09', $locale->number(12345678.09));
        self::assertSame('1234.56%', $locale->percent(12.3456));
    }
}
