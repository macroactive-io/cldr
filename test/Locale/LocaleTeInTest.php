<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageTe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTelu;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocaleTeInTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTeIn();

        self::assertSame(LanguageTe::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptTelu::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('te_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('౦౧౨౩౪౫౬౭౮౯', $locale->digits('0123456789'));
        self::assertSame('lang="te"', $locale->htmlAttributes());
        self::assertSame('te', $locale->languageTag());
        self::assertSame('-౧౨౩', $locale->number(-123));
        self::assertSame('౧,౨౩,౪౫,౬౭౮.౦౯', $locale->number(12345678.09));
        self::assertSame('౧,౨౩౪.౫౬%', $locale->percent(12.3456));
    }
}
