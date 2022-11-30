<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageBn;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use Macroactive\Cldr\Territory\TerritoryBd;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleBnBd;

class LocaleBnBdTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBnBd();

        self::assertSame(LanguageBn::class, $locale->language()::class);
        self::assertSame(ScriptBeng::class, $locale->script()::class);
        self::assertSame(TerritoryBd::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('bn_BD', $locale->code());

        self::assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
        self::assertSame('lang="bn"', $locale->htmlAttributes());
        self::assertSame('bn', $locale->languageTag());
        self::assertSame('-১২৩', $locale->number(-123));
        self::assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
        self::assertSame('১,২৩৪.৫৬%', $locale->percent(12.3456));
    }
}
