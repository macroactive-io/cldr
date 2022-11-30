<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageFo;
use Macroactive\Cldr\Locale\LocaleFo;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryFo;
use PHPUnit\Framework\TestCase;

class LocaleFoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFo();

        self::assertSame(LanguageFo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryFo::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fo_FO', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="fo"', $locale->htmlAttributes());
        self::assertSame('fo', $locale->languageTag());
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
