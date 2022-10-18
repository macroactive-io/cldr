<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageNqo;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptNkoo;
use Macroactive\Cldr\Territory\TerritoryGn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNqo class
 *
 * @coversNothing
 */
class LocaleNqoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleNqo();

        self::assertEquals(new LanguageNqo(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptNkoo(), $locale->script());
        self::assertEquals(new TerritoryGn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('nqo_GN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('߀߁߂߃߄߅߆߇߈߉', $locale->digits('0123456789'));
        self::assertSame('ߒߞߏ', $locale->endonym());
        self::assertSame('lang="nqo" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('nqo', $locale->languageTag());
        self::assertSame('-߁߂߃', $locale->number(-123));
        self::assertSame('߁߂,߃߄߅,߆߇߈.߀߉', $locale->number(12345678.09));
        self::assertSame('߁,߂߃߄.߅߆%', $locale->percent(12.3456));
    }
}
