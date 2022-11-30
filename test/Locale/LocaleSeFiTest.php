<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryFi;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleSeFi;

class LocaleSeFiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSeFi();

        self::assertSame(LanguageSe::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryFi::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('se_FI', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="se-FI"', $locale->htmlAttributes());
        self::assertSame('se-FI', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
