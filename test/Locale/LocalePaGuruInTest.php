<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePa;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptGuru;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocalePaGuruInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePaGuruIn();

        self::assertEquals(new LanguagePa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptGuru(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pa_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('੦੧੨੩੪੫੬੭੮੯', $locale->digits('0123456789'));
        self::assertSame('lang="pa"', $locale->htmlAttributes());
        self::assertSame('pa', $locale->languageTag());
        self::assertSame('-੧੨੩', $locale->number(-123));
        self::assertSame('੧,੨੩,੪੫,੬੭੮.੦੯', $locale->number(12345678.09));
        self::assertSame('੧,੨੩੪.੫੬%', $locale->percent(12.3456));
    }
}
