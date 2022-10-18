<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDje;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNe;
use PHPUnit\Framework\TestCase;

class LocaleDjeNeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleDjeNe();

        self::assertEquals(new LanguageDje(), $locale->language());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryNe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('dje_NE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="dje"', $locale->htmlAttributes());
        self::assertSame('dje', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678.09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234.56%", $locale->percent(12.3456));
    }
}
