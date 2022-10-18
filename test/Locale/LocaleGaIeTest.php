<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGa;
use Macroactive\Cldr\PluralRule\PluralRule11;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIe;
use PHPUnit\Framework\TestCase;

class LocaleGaIeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleGaIe();

        self::assertEquals(new LanguageGa(), $locale->language());
        self::assertEquals(new PluralRule11(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryIe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ga_IE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ga"', $locale->htmlAttributes());
        self::assertSame('ga', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
