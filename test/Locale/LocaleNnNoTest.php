<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageNn;
use Macroactive\Cldr\Locale\LocaleNnNo;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNo;
use PHPUnit\Framework\TestCase;

class LocaleNnNoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNnNo();

        self::assertSame(LanguageNn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNo::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('nn_NO', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="nn"', $locale->htmlAttributes());
        self::assertSame('nn', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
