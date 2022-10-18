<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageZh;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptHant;
use Macroactive\Cldr\Territory\TerritoryTw;
use PHPUnit\Framework\TestCase;

class LocaleZhHantTwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleZhHantTw();

        self::assertEquals(new LanguageZh(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptHant(), $locale->script());
        self::assertEquals(new TerritoryTw(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="zh-Hant-TW"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12345,678.09', $locale->number(12345678.09));
        self::assertSame('1234.56%', $locale->percent(12.3456));
    }
}
