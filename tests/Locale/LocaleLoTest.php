<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageLo;
use Macroactive\Cldr\Locale\LocaleLo;
use Macroactive\Cldr\Script\ScriptLaoo;
use Macroactive\Cldr\Territory\TerritoryLa;
use PHPUnit\Framework\TestCase;

class LocaleLoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLo();

        self::assertSame(LanguageLo::class, $locale->language()::class);
        self::assertSame(ScriptLaoo::class, $locale->script()::class);
        self::assertSame(TerritoryLa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('lo_LA', $locale->code());

        self::assertSame('໐໑໒໓໔໕໖໗໘໙', $locale->digits('0123456789'));
        self::assertSame('lang="lo"', $locale->htmlAttributes());
        self::assertSame('lo', $locale->languageTag());
        self::assertSame('-໑໒໓', $locale->number(-123));
        self::assertSame('໑໒.໓໔໕.໖໗໘,໐໙', $locale->number(12345678.09));
        self::assertSame('໑.໒໓໔,໕໖%', $locale->percent(12.3456));
    }
}
