<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageGl;
use Macroactive\Cldr\Locale\LocaleGl;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEs;
use PHPUnit\Framework\TestCase;

class LocaleGlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleGl();

        self::assertSame(LanguageGl::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryEs::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('gl_ES', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="gl"', $locale->htmlAttributes());
        self::assertSame('gl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
