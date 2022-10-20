<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageKhq;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMl;
use PHPUnit\Framework\TestCase;

class LocaleKhqTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKhq();

        self::assertSame(LanguageKhq::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('khq_ML', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Koyra ciini', $locale->endonym());
        self::assertSame('lang="khq"', $locale->htmlAttributes());
        self::assertSame('khq', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678.09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234.56%", $locale->percent(12.3456));
    }
}
