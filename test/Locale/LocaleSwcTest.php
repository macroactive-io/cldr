<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSwc;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCd;
use PHPUnit\Framework\TestCase;

class LocaleSwcTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSwc();

        self::assertSame(LanguageSwc::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCd::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('swc_CD', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Kiswahili ya Kongo', $locale->endonym());
        self::assertSame('lang="swc"', $locale->htmlAttributes());
        self::assertSame('swc', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
