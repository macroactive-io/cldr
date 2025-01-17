<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageBg;
use Macroactive\Cldr\Locale\LocaleBgBg;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryBg;
use PHPUnit\Framework\TestCase;

class LocaleBgBgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBgBg();

        self::assertSame(LanguageBg::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryBg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('bg_BG', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="bg"', $locale->htmlAttributes());
        self::assertSame('bg', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
