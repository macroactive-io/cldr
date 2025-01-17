<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKsb;
use Macroactive\Cldr\Locale\LocaleKsb;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryTz;
use PHPUnit\Framework\TestCase;

class LocaleKsbTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKsb();

        self::assertSame(LanguageKsb::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryTz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ksb_TZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ksb"', $locale->htmlAttributes());
        self::assertSame('ksb', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
