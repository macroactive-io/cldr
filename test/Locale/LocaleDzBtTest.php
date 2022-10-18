<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDz;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptTibt;
use Macroactive\Cldr\Territory\TerritoryBt;
use PHPUnit\Framework\TestCase;

class LocaleDzBtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleDzBt();

        self::assertEquals(new LanguageDz(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptTibt(), $locale->script());
        self::assertEquals(new TerritoryBt(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('dz_BT', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('༠༡༢༣༤༥༦༧༨༩', $locale->digits('0123456789'));
        self::assertSame('lang="dz"', $locale->htmlAttributes());
        self::assertSame('dz', $locale->languageTag());
        self::assertSame('-༡༢༣', $locale->number(-123));
        self::assertSame('༡,༢༣,༤༥,༦༧༨.༠༩', $locale->number(12345678.09));
        self::assertSame("༡,༢༣༤.༥༦\u{a0}%", $locale->percent(12.3456));
    }
}
