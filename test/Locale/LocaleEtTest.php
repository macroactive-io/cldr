<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEt;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEt class
 *
 * @coversNothing
 */
class LocaleEtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEt();

        self::assertEquals(new LanguageEt(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryEe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('et_EE', $locale->code());
        self::assertSame('estonian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('eesti', $locale->endonym());
        self::assertSame('lang="et"', $locale->htmlAttributes());
        self::assertSame('et', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("12345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
