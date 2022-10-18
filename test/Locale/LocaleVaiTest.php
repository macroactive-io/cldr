<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageVai;
use Macroactive\Cldr\Script\ScriptVaii;
use Macroactive\Cldr\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVai class
 *
 * @coversNothing
 */
class LocaleVaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleVai();

        self::assertEquals(new LanguageVai(), $locale->language());
        self::assertEquals(new ScriptVaii(), $locale->script());
        self::assertEquals(new TerritoryLr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('꘠꘡꘢꘣꘤꘥꘦꘧꘨꘩', $locale->digits('0123456789'));
        self::assertSame('ꕙꔤ', $locale->endonym());
        self::assertSame('lang="vai"', $locale->htmlAttributes());
        self::assertSame('-꘡꘢꘣', $locale->number(-123));
        self::assertSame('꘡꘢,꘣꘤꘥,꘦꘧꘨.꘠꘩', $locale->number(12345678.09));
        self::assertSame('꘡,꘢꘣꘤.꘥꘦%', $locale->percent(12.3456));
    }
}
