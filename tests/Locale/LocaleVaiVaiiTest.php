<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageVai;
use Macroactive\Cldr\Locale\LocaleVaiVaii;
use Macroactive\Cldr\Script\ScriptVaii;
use Macroactive\Cldr\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

class LocaleVaiVaiiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleVaiVaii();

        self::assertSame(LanguageVai::class, $locale->language()::class);
        self::assertSame(ScriptVaii::class, $locale->script()::class);
        self::assertSame(TerritoryLr::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('꘠꘡꘢꘣꘤꘥꘦꘧꘨꘩', $locale->digits('0123456789'));
        self::assertSame('lang="vai"', $locale->htmlAttributes());
        self::assertSame('-꘡꘢꘣', $locale->number(-123));
        self::assertSame('꘡꘢,꘣꘤꘥,꘦꘧꘨.꘠꘩', $locale->number(12345678.09));
        self::assertSame('꘡,꘢꘣꘤.꘥꘦%', $locale->percent(12.3456));
    }
}