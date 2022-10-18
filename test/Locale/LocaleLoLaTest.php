<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageLo;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLaoo;
use Macroactive\Cldr\Territory\TerritoryLa;
use PHPUnit\Framework\TestCase;

class LocaleLoLaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleLoLa();

        self::assertEquals(new LanguageLo(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptLaoo(), $locale->script());
        self::assertEquals(new TerritoryLa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('lo_LA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('໐໑໒໓໔໕໖໗໘໙', $locale->digits('0123456789'));
        self::assertSame('lang="lo"', $locale->htmlAttributes());
        self::assertSame('lo', $locale->languageTag());
        self::assertSame('-໑໒໓', $locale->number(-123));
        self::assertSame('໑໒.໓໔໕.໖໗໘,໐໙', $locale->number(12345678.09));
        self::assertSame('໑.໒໓໔,໕໖%', $locale->percent(12.3456));
    }
}
