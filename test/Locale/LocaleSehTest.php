<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSeh;
use Macroactive\Cldr\Locale\LocaleSeh;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMz;
use PHPUnit\Framework\TestCase;

class LocaleSehTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSeh();

        self::assertSame(LanguageSeh::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('seh_MZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="seh"', $locale->htmlAttributes());
        self::assertSame('seh', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
