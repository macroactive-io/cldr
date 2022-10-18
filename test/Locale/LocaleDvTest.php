<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDv;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptThaa;
use Macroactive\Cldr\Territory\TerritoryMv;
use PHPUnit\Framework\TestCase;

class LocaleDvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleDv();

        self::assertEquals(new LanguageDv(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptThaa(), $locale->script());
        self::assertEquals(new TerritoryMv(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('dv_MV', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ތާނަ', $locale->endonym());
        self::assertSame('lang="dv" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('dv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
