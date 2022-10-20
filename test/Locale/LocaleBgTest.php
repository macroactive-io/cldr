<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBg;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryBg;
use PHPUnit\Framework\TestCase;

class LocaleBgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBg();

        self::assertSame(LanguageBg::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryBg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('bg_BG', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('български', $locale->endonym());
        self::assertSame('lang="bg"', $locale->htmlAttributes());
        self::assertSame('bg', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
