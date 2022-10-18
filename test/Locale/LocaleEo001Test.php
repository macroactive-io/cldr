<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEo;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEo001 class
 *
 * @coversNothing
 */
class LocaleEo001Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEo001();

        self::assertEquals(new LanguageEo(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new Territory001(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('eo_001', $locale->code());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="eo"', $locale->htmlAttributes());
        self::assertSame('eo', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
