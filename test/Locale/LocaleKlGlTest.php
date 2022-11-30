<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKl;
use Macroactive\Cldr\Locale\LocaleKlGl;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGl;
use PHPUnit\Framework\TestCase;

class LocaleKlGlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKlGl();

        self::assertSame(LanguageKl::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('kl_GL', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="kl"', $locale->htmlAttributes());
        self::assertSame('kl', $locale->languageTag());
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
