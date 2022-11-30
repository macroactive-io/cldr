<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageDv;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptThaa;
use Macroactive\Cldr\Territory\TerritoryMv;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleDv;

class LocaleDvTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleDv();

        self::assertSame(LanguageDv::class, $locale->language()::class);
        self::assertSame(ScriptThaa::class, $locale->script()::class);
        self::assertSame(TerritoryMv::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('dv_MV', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="dv" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('dv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
