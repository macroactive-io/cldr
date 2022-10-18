<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageUg;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryCn;
use PHPUnit\Framework\TestCase;

class LocaleUgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleUg();

        self::assertEquals(new LanguageUg(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryCn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('ئۇيغۇرچە', $locale->endonym());
        self::assertSame('lang="ug" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('-١٢٣', $locale->number(-123));
        self::assertSame('١٢,٣٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame('١,٢٣٤.٥٦%', $locale->percent(12.3456));
    }
}
