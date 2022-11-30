<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageTg;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryTj;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleTg;

class LocaleTgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTg();

        self::assertSame(LanguageTg::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryTj::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('tg_TJ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="tg"', $locale->htmlAttributes());
        self::assertSame('tg', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
