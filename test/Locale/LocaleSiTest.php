<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSi;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptSinh;
use Macroactive\Cldr\Territory\TerritoryLk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSi class
 *
 * @coversNothing
 */
class LocaleSiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSi();

        self::assertEquals(new LanguageSi(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptSinh(), $locale->script());
        self::assertEquals(new TerritoryLk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('si_LK', $locale->code());
        self::assertSame('sinhala_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('සිංහල', $locale->endonym());
        self::assertSame('lang="si"', $locale->htmlAttributes());
        self::assertSame('si', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
