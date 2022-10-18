<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMo;
use Macroactive\Cldr\PluralRule\PluralRule5;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMd;
use PHPUnit\Framework\TestCase;

class LocaleMoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMo();

        self::assertEquals(new LanguageMo(), $locale->language());
        self::assertEquals(new PluralRule5(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMd(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mo_MD', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('limba moldovenească', $locale->endonym());
        self::assertSame('lang="mo"', $locale->htmlAttributes());
        self::assertSame('mo', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
