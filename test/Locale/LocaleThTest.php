<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageTh;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptThai;
use Macroactive\Cldr\Territory\TerritoryTh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTh class
 *
 * @coversNothing
 */
class LocaleThTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTh();

        self::assertEquals(new LanguageTh(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptThai(), $locale->script());
        self::assertEquals(new TerritoryTh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('๐๑๒๓๔๕๖๗๘๙', $locale->digits('0123456789'));
        self::assertSame('ไทย', $locale->endonym());
        self::assertSame('lang="th"', $locale->htmlAttributes());
        self::assertSame('-๑๒๓', $locale->number(-123));
        self::assertSame('๑๒,๓๔๕,๖๗๘.๐๙', $locale->number(12345678.09));
        self::assertSame('๑,๒๓๔.๕๖%', $locale->percent(12.3456));
    }
}
