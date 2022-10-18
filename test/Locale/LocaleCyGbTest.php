<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCy;
use Macroactive\Cldr\PluralRule\PluralRuleWelsh;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCyGb class
 *
 * @coversNothing
 */
class LocaleCyGbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleCyGb();

        self::assertEquals(new LanguageCy(), $locale->language());
        self::assertEquals(new PluralRuleWelsh(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryGb(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('cy_GB', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="cy"', $locale->htmlAttributes());
        self::assertSame('cy', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
