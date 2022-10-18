<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageIs;
use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleIsIs class
 *
 * @coversNothing
 */
class LocaleIsIsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleIsIs();

        self::assertEquals(new LanguageIs(), $locale->language());
        self::assertEquals(new PluralRule15(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryIs(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('is_IS', $locale->code());
        self::assertSame('icelandic_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="is"', $locale->htmlAttributes());
        self::assertSame('is', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
