<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguagePt;
use Macroactive\Cldr\Locale\LocalePtGw;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGw;
use PHPUnit\Framework\TestCase;

class LocalePtGwTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePtGw();

        self::assertSame(LanguagePt::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGw::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('pt_GW', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="pt-GW"', $locale->htmlAttributes());
        self::assertSame('pt-GW', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
