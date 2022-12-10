<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCu;
use Macroactive\Cldr\Locale\LocaleCu;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

class LocaleCuTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCu();

        self::assertSame(LanguageCu::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryRu::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('cu_RU', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="cu"', $locale->htmlAttributes());
        self::assertSame('cu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}