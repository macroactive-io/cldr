<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageDa;
use Macroactive\Cldr\Locale\LocaleDaGl;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGl;
use PHPUnit\Framework\TestCase;

class LocaleDaGlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleDaGl();

        self::assertSame(LanguageDa::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('da_GL', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="da-GL"', $locale->htmlAttributes());
        self::assertSame('da-GL', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
