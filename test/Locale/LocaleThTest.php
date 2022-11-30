<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageTh;
use Macroactive\Cldr\Locale\LocaleTh;
use Macroactive\Cldr\Script\ScriptThai;
use Macroactive\Cldr\Territory\TerritoryTh;
use PHPUnit\Framework\TestCase;

class LocaleThTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTh();

        self::assertSame(LanguageTh::class, $locale->language()::class);
        self::assertSame(ScriptThai::class, $locale->script()::class);
        self::assertSame(TerritoryTh::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('๐๑๒๓๔๕๖๗๘๙', $locale->digits('0123456789'));
        self::assertSame('lang="th"', $locale->htmlAttributes());
        self::assertSame('-๑๒๓', $locale->number(-123));
        self::assertSame('๑๒,๓๔๕,๖๗๘.๐๙', $locale->number(12345678.09));
        self::assertSame('๑,๒๓๔.๕๖%', $locale->percent(12.3456));
    }
}
