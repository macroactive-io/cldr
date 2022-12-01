<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMl;
use Macroactive\Cldr\Locale\LocaleMl;
use Macroactive\Cldr\Script\ScriptMlym;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocaleMlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMl();

        self::assertSame(LanguageMl::class, $locale->language()::class);
        self::assertSame(ScriptMlym::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ml_IN', $locale->code());

        self::assertSame('൦൧൨൩൪൫൬൭൮൯', $locale->digits('0123456789'));
        self::assertSame('lang="ml"', $locale->htmlAttributes());
        self::assertSame('ml', $locale->languageTag());
        self::assertSame('-൧൨൩', $locale->number(-123));
        self::assertSame('൧,൨൩,൪൫,൬൭൮.൦൯', $locale->number(12345678.09));
        self::assertSame('൧,൨൩൪.൫൬%', $locale->percent(12.3456));
    }
}
