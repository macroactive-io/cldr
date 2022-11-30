<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMgh;
use Macroactive\Cldr\Locale\LocaleMgh;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMz;
use PHPUnit\Framework\TestCase;

class LocaleMghTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMgh();

        self::assertSame(LanguageMgh::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mgh_MZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="mgh"', $locale->htmlAttributes());
        self::assertSame('mgh', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
