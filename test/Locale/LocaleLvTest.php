<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageLv;
use Macroactive\Cldr\PluralRule\PluralRule3;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryLv;
use PHPUnit\Framework\TestCase;

class LocaleLvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleLv();

        self::assertEquals(new LanguageLv(), $locale->language());
        self::assertEquals(new PluralRule3(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryLv(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('lv_LV', $locale->code());
        self::assertSame('latvian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('latviešu', $locale->endonym());
        self::assertSame('lang="lv"', $locale->htmlAttributes());
        self::assertSame('lv', $locale->languageTag());
        self::assertSame("12345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
