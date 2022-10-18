<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageKw;
use Macroactive\Cldr\PluralRule\PluralRuleCornish;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKw class
 *
 * @coversNothing
 */
class LocaleKwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleKw();

        self::assertEquals(new LanguageKw(), $locale->language());
        self::assertEquals(new PluralRuleCornish(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryGb(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('kw_GB', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('kernewek', $locale->endonym());
        self::assertSame('lang="kw"', $locale->htmlAttributes());
        self::assertSame('kw', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
