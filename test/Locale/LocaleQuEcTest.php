<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageQu;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEc;
use PHPUnit\Framework\TestCase;

class LocaleQuEcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleQuEc();

        self::assertEquals(new LanguageQu(), $locale->language());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryEc(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('qu_EC', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="qu-EC"', $locale->htmlAttributes());
        self::assertSame('qu-EC', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame("1,234.56\u{a0}%", $locale->percent(12.3456));
    }
}
