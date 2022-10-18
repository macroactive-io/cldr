<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory150;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEn150 class
 *
 * @coversNothing
 */
class LocaleEn150Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEn150();

        self::assertEquals(new LanguageEn(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new Territory150(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('en_150', $locale->code());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-150"', $locale->htmlAttributes());
        self::assertSame('en-150', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
