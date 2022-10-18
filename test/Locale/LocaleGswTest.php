<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGsw;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGsw class
 *
 * @coversNothing
 */
class LocaleGswTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleGsw();

        self::assertEquals(new LanguageGsw(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryCh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('gsw_CH', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Schwiizertüütsch', $locale->endonym());
        self::assertSame('lang="gsw"', $locale->htmlAttributes());
        self::assertSame('gsw', $locale->languageTag());
        self::assertSame('12’345’678.09', $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1’234.56\u{a0}%", $locale->percent(12.3456));
    }
}
