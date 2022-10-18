<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSyr;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptSyrc;
use Macroactive\Cldr\Territory\TerritoryIq;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTig class
 *
 * @coversNothing
 */
class LocaleSyrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSyr();

        self::assertEquals(new LanguageSyr(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptSyrc(), $locale->script());
        self::assertEquals(new TerritoryIq(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Syriac', $locale->endonym());
        self::assertSame('lang="syr" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
