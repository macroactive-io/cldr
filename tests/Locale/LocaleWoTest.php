<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageWo;
use Macroactive\Cldr\Locale\LocaleWo;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySn;
use PHPUnit\Framework\TestCase;

class LocaleWoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleWo();

        self::assertSame(LanguageWo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('wo_SN', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="wo"', $locale->htmlAttributes());
        self::assertSame('wo', $locale->languageTag());
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
