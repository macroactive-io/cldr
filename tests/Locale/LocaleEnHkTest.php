<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\Locale\LocaleEnHk;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryHk;
use PHPUnit\Framework\TestCase;

class LocaleEnHkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEnHk();

        self::assertSame(LanguageEn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryHk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('en_HK', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-HK"', $locale->htmlAttributes());
        self::assertSame('en-HK', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
