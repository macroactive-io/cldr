<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageQu;
use Macroactive\Cldr\Locale\LocaleQuEc;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEc;
use PHPUnit\Framework\TestCase;

class LocaleQuEcTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleQuEc();

        self::assertSame(LanguageQu::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryEc::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('qu_EC', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="qu-EC"', $locale->htmlAttributes());
        self::assertSame('qu-EC', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame("1,234.56\u{a0}%", $locale->percent(12.3456));
    }
}
