<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageRw;
use Macroactive\Cldr\Locale\LocaleRwRw;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryRw;
use PHPUnit\Framework\TestCase;

class LocaleRwRwTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleRwRw();

        self::assertSame(LanguageRw::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryRw::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('rw_RW', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="rw"', $locale->htmlAttributes());
        self::assertSame('rw', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}