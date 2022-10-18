<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGu;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptGujr;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocaleGuInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleGuIn();

        self::assertEquals(new LanguageGu(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptGujr(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('gu_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('૦૧૨૩૪૫૬૭૮૯', $locale->digits('0123456789'));
        self::assertSame('lang="gu"', $locale->htmlAttributes());
        self::assertSame('gu', $locale->languageTag());
        self::assertSame('-૧૨૩', $locale->number(-123));
        self::assertSame('૧,૨૩,૪૫,૬૭૮.૦૯', $locale->number(12345678.09));
        self::assertSame('૧,૨૩૪.૫૬%', $locale->percent(12.3456));
    }
}
