<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSi;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptSinh;
use Macroactive\Cldr\Territory\TerritoryLk;
use PHPUnit\Framework\TestCase;

class LocaleSiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSi();

        self::assertSame(LanguageSi::class, $locale->language()::class);
        self::assertSame(PluralRule2::class, $locale->pluralRule()::class);
        self::assertSame(ScriptSinh::class, $locale->script()::class);
        self::assertSame(TerritoryLk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('si_LK', $locale->code());
        self::assertSame('sinhala_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('සිංහල', $locale->endonym());
        self::assertSame('lang="si"', $locale->htmlAttributes());
        self::assertSame('si', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
