<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageLrc;
use Macroactive\Cldr\PluralRule\PluralRule12;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIq;
use PHPUnit\Framework\TestCase;

class LocaleLrcIqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleLrcIq();

        self::assertEquals(new LanguageLrc(), $locale->language());
        self::assertEquals(new PluralRule12(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIq(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('lrc_IQ', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('لۊری شومالی', $locale->endonym());
        self::assertSame('lang="lrc-IQ" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('lrc-IQ', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
