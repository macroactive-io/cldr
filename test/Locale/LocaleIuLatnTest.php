<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageIu;
use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCa;
use PHPUnit\Framework\TestCase;

class LocaleIuLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleIuLatn();

        self::assertEquals(new LanguageIu(), $locale->language());
        self::assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryCa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('iu_CA@latin', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Inuktitut', $locale->endonym());
        self::assertSame('lang="iu-Latn"', $locale->htmlAttributes());
        self::assertSame('iu-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
