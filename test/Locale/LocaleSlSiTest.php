<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSl;
use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySi;
use PHPUnit\Framework\TestCase;

class LocaleSlSiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSlSi();

        self::assertEquals(new LanguageSl(), $locale->language());
        self::assertEquals(new PluralRule10(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySi(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sl_SI', $locale->code());
        self::assertSame('slovenian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sl"', $locale->htmlAttributes());
        self::assertSame('sl', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
