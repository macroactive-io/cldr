<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageLv;
use Macroactive\Cldr\PluralRule\PluralRule3;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryLv;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleLvLv;

class LocaleLvLvTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLvLv();

        self::assertSame(LanguageLv::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryLv::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('lv_LV', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="lv"', $locale->htmlAttributes());
        self::assertSame('lv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
