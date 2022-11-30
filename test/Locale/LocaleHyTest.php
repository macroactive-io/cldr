<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageHy;
use Macroactive\Cldr\Locale\LocaleHy;
use Macroactive\Cldr\Script\ScriptArmn;
use Macroactive\Cldr\Territory\TerritoryAm;
use PHPUnit\Framework\TestCase;

class LocaleHyTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleHy();

        self::assertSame(LanguageHy::class, $locale->language()::class);
        self::assertSame(ScriptArmn::class, $locale->script()::class);
        self::assertSame(TerritoryAm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('hy_AM', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="hy"', $locale->htmlAttributes());
        self::assertSame('hy', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
