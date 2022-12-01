<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEl;
use Macroactive\Cldr\Locale\LocaleEl;
use Macroactive\Cldr\Script\ScriptGrek;
use Macroactive\Cldr\Territory\TerritoryGr;
use PHPUnit\Framework\TestCase;

class LocaleElTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEl();

        self::assertSame(LanguageEl::class, $locale->language()::class);
        self::assertSame(ScriptGrek::class, $locale->script()::class);
        self::assertSame(TerritoryGr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('el_GR', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="el"', $locale->htmlAttributes());
        self::assertSame('el', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
