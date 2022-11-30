<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSq;
use Macroactive\Cldr\Locale\LocaleSqXk;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryXk;
use PHPUnit\Framework\TestCase;

class LocaleSqXkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSqXk();

        self::assertSame(LanguageSq::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryXk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sq_XK', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sq-XK"', $locale->htmlAttributes());
        self::assertSame('sq-XK', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
