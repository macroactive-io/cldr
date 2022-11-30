<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageRof;
use Macroactive\Cldr\Locale\LocaleRofTz;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryTz;
use PHPUnit\Framework\TestCase;

class LocaleRofTzTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleRofTz();

        self::assertSame(LanguageRof::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryTz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('rof_TZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="rof"', $locale->htmlAttributes());
        self::assertSame('rof', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
