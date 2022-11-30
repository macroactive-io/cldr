<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageHr;
use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryHr;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleHrHr;

class LocaleHrHrTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleHrHr();

        self::assertSame(LanguageHr::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryHr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('hr_HR', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="hr"', $locale->htmlAttributes());
        self::assertSame('hr', $locale->languageTag());
        self::assertSame("\xE2\x88\x92123", $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
