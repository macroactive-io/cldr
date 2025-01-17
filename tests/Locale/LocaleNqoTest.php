<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageNqo;
use Macroactive\Cldr\Locale\LocaleNqo;
use Macroactive\Cldr\Script\ScriptNkoo;
use Macroactive\Cldr\Territory\TerritoryGn;
use PHPUnit\Framework\TestCase;

class LocaleNqoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNqo();

        self::assertSame(LanguageNqo::class, $locale->language()::class);
        self::assertSame(ScriptNkoo::class, $locale->script()::class);
        self::assertSame(TerritoryGn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('nqo_GN', $locale->code());

        self::assertSame('߀߁߂߃߄߅߆߇߈߉', $locale->digits('0123456789'));
        self::assertSame('lang="nqo" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('nqo', $locale->languageTag());
        self::assertSame('-߁߂߃', $locale->number(-123));
        self::assertSame('߁߂,߃߄߅,߆߇߈.߀߉', $locale->number(12345678.09));
        self::assertSame('߁,߂߃߄.߅߆%', $locale->percent(12.3456));
    }
}
