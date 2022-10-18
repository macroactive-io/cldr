<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

class LocaleEnSeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEnSe();

        self::assertEquals(new LanguageEn(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('en_SE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('English', $locale->endonym());
        self::assertSame('lang="en-SE"', $locale->htmlAttributes());
        self::assertSame('en-SE', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678.09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234.56\u{a0}%", $locale->percent(12.3456));
    }
}
