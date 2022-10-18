<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSs;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryZa;
use PHPUnit\Framework\TestCase;

class LocaleSsZaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSsZa();

        self::assertEquals(new LanguageSs(), $locale->language());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryZa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ss_ZA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ss-ZA"', $locale->htmlAttributes());
        self::assertSame('ss-ZA', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
