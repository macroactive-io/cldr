<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageTe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTelu;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocaleTeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTe();

        self::assertEquals(new LanguageTe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptTelu(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('te_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('౦౧౨౩౪౫౬౭౮౯', $locale->digits('0123456789'));
        self::assertSame('తెలుగు', $locale->endonym());
        self::assertSame('lang="te"', $locale->htmlAttributes());
        self::assertSame('te', $locale->languageTag());
        self::assertSame('-౧౨౩', $locale->number(-123));
        self::assertSame('౧,౨౩,౪౫,౬౭౮.౦౯', $locale->number(12345678.09));
        self::assertSame('౧,౨౩౪.౫౬%', $locale->percent(12.3456));
    }
}
