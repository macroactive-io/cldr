<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSt;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryLs;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleStLs;

class LocaleStLsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleStLs();

        self::assertSame(LanguageSt::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryLs::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('st_LS', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="st"', $locale->htmlAttributes());
        self::assertSame('st', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
