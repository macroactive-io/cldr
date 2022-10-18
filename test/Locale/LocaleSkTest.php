<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSk;
use Macroactive\Cldr\PluralRule\PluralRule8;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySk;
use PHPUnit\Framework\TestCase;

class LocaleSkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSk();

        self::assertEquals(new LanguageSk(), $locale->language());
        self::assertEquals(new PluralRule8(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sk_SK', $locale->code());
        self::assertSame('slovak_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('slovenčina', $locale->endonym());
        self::assertSame('lang="sk"', $locale->htmlAttributes());
        self::assertSame('sk', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
