<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePs;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePs class
 *
 * @coversNothing
 */
class LocalePsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePs();

        self::assertEquals(new LanguagePs(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryPk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ps_PK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('پښتو', $locale->endonym());
        self::assertSame('lang="ps" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ps', $locale->languageTag());
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
