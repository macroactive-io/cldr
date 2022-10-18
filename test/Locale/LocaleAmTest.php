<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAm;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptEthi;
use Macroactive\Cldr\Territory\TerritoryEt;
use PHPUnit\Framework\TestCase;

class LocaleAmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleAm();

        self::assertEquals(new LanguageAm(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptEthi(), $locale->script());
        self::assertEquals(new TerritoryEt(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('am_ET', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('አማርኛ', $locale->endonym());
        self::assertSame('lang="am"', $locale->htmlAttributes());
        self::assertSame('am', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
