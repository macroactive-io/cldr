<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageYi;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptHebr;
use Macroactive\Cldr\Territory\Territory001;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleYi;

class LocaleYiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleYi();

        self::assertSame(LanguageYi::class, $locale->language()::class);
        self::assertSame(ScriptHebr::class, $locale->script()::class);
        self::assertSame(Territory001::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="yi" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
