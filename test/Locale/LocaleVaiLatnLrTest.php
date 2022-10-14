<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVai;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVaiLatnLr class
 *
 * @coversNothing
 */
class LocaleVaiLatnLrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleVaiLatnLr();

        self::assertEquals(new LanguageVai(), $locale->language());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryLr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="vai-Latn"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
