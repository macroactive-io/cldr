<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageLb;
use Macroactive\Cldr\Locale\LocaleLb;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryLu;
use PHPUnit\Framework\TestCase;

class LocaleLbTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLb();

        self::assertSame(LanguageLb::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryLu::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('lb_LU', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="lb"', $locale->htmlAttributes());
        self::assertSame('lb', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
