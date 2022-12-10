<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\Locale\LocaleEnMw;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMw;
use PHPUnit\Framework\TestCase;

class LocaleEnMwTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEnMw();

        self::assertSame(LanguageEn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMw::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('en_MW', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-MW"', $locale->htmlAttributes());
        self::assertSame('en-MW', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}