<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptHebr;
use Macroactive\Cldr\Territory\TerritoryIl;
use PHPUnit\Framework\TestCase;

class LocaleHeIlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleHeIl();

        self::assertEquals(new LanguageHe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptHebr(), $locale->script());
        self::assertEquals(new TerritoryIl(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('he_IL', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="he" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('he', $locale->languageTag());
        self::assertSame('‎-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
