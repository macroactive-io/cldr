<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMk;
use Macroactive\Cldr\Locale\LocaleMk;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryMk;
use PHPUnit\Framework\TestCase;

class LocaleMkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMk();

        self::assertSame(LanguageMk::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryMk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mk_MK', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="mk"', $locale->htmlAttributes());
        self::assertSame('mk', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
