<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCe;
use Macroactive\Cldr\Locale\LocaleCeRu;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

class LocaleCeRuTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCeRu();

        self::assertSame(LanguageCe::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryRu::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ce_RU', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ce"', $locale->htmlAttributes());
        self::assertSame('ce', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame("1,234.56\u{a0}%", $locale->percent(12.3456));
    }
}
