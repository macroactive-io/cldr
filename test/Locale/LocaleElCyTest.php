<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEl;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGrek;
use Macroactive\Cldr\Territory\TerritoryCy;
use PHPUnit\Framework\TestCase;

class LocaleElCyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleElCy();

        self::assertEquals(new LanguageEl(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptGrek(), $locale->script());
        self::assertEquals(new TerritoryCy(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('el_CY', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="el-CY"', $locale->htmlAttributes());
        self::assertSame('el-CY', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
