<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageUr;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleUrPk;

class LocaleUrPkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleUrPk();

        self::assertSame(LanguageUr::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryPk::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="ur" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('١,٢٣,٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame('‎-١٢٣', $locale->number(-123));
        self::assertSame('١,٢٣٤.٥٦%', $locale->percent(12.3456));
    }
}
