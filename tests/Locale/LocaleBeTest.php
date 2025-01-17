<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageBe;
use Macroactive\Cldr\Locale\LocaleBe;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryBy;
use PHPUnit\Framework\TestCase;

class LocaleBeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBe();

        self::assertSame(LanguageBe::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryBy::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('be_BY', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="be"', $locale->htmlAttributes());
        self::assertSame('be', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
