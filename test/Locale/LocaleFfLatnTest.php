<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFf;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFfLatn class
 *
 * @coversNothing
 */
class LocaleFfLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFfLatn();

        self::assertEquals(new LanguageFf(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ff_SN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Pulaar', $locale->endonym());
        self::assertSame('lang="ff"', $locale->htmlAttributes());
        self::assertSame('ff', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
