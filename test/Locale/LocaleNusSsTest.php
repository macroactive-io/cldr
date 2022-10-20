<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageNus;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySs;
use PHPUnit\Framework\TestCase;

class LocaleNusSsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNusSs();

        self::assertSame(LanguageNus::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySs::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('nus_SS', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Thok Nath', $locale->endonym());
        self::assertSame('lang="nus-SS"', $locale->htmlAttributes());
        self::assertSame('nus-SS', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
