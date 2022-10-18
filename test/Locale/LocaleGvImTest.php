<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGv;
use Macroactive\Cldr\PluralRule\PluralRuleManx;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGvIm class
 *
 * @coversNothing
 */
class LocaleGvImTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleGvIm();

        self::assertEquals(new LanguageGv(), $locale->language());
        self::assertEquals(new PluralRuleManx(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryIm(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('gv_IM', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="gv"', $locale->htmlAttributes());
        self::assertSame('gv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
