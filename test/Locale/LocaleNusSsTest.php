<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageNus;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNusSs class
 *
 * @coversNothing
 */
class LocaleNusSsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleNusSs();

        self::assertEquals(new LanguageNus(), $locale->language());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySs(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('nus_SS', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Thok Nath', $locale->endonym());
        self::assertSame('lang="nus-SS"', $locale->htmlAttributes());
        self::assertSame('nus-SS', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
