<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageGd;
use Macroactive\Cldr\Locale\LocaleGd;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

class LocaleGdTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleGd();

        self::assertSame(LanguageGd::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGb::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('gd_GB', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="gd"', $locale->htmlAttributes());
        self::assertSame('gd', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
