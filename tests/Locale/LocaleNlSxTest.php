<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageNl;
use Macroactive\Cldr\Locale\LocaleNlSx;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySx;
use PHPUnit\Framework\TestCase;

class LocaleNlSxTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNlSx();

        self::assertSame(LanguageNl::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySx::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('nl_SX', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="nl-SX"', $locale->htmlAttributes());
        self::assertSame('nl-SX', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
