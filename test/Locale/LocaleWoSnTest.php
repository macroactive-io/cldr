<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageWo;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySn;
use PHPUnit\Framework\TestCase;

class LocaleWoSnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleWoSn();

        self::assertEquals(new LanguageWo(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('wo_SN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="wo"', $locale->htmlAttributes());
        self::assertSame('wo', $locale->languageTag());
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
