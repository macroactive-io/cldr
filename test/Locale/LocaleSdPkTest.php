<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSd;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleSdPk;

class LocaleSdPkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSdPk();

        self::assertSame(LanguageSd::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryPk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sd_PK', $locale->code());

        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('lang="sd" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('sd', $locale->languageTag());
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
