<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageUz;
use Macroactive\Cldr\Locale\LocaleUzCyrl;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryUz;
use PHPUnit\Framework\TestCase;

class LocaleUzCyrlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleUzCyrl();

        self::assertSame(LanguageUz::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryUz::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="uz-Cyrl"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
