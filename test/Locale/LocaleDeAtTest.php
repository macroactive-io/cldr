<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryAt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDeAt class
 *
 * @coversNothing
 */
class LocaleDeAtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleDeAt();

        self::assertEquals(new LanguageDe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryAt(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('de_AT', $locale->code());
        self::assertSame('german2_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Österreichisches Deutsch', $locale->endonym());
        self::assertSame('lang="de-AT"', $locale->htmlAttributes());
        self::assertSame('de-AT', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
