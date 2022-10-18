<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePrg;
use Macroactive\Cldr\PluralRule\PluralRule3;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePrg class
 *
 * @coversNothing
 */
class LocalePrgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePrg001();

        self::assertEquals(new LanguagePrg(), $locale->language());
        self::assertEquals(new PluralRule3(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new Territory001(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('prg_001', $locale->code());
        self::assertSame('latvian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('prūsiskan', $locale->endonym());
        self::assertSame('lang="prg"', $locale->htmlAttributes());
        self::assertSame('prg', $locale->languageTag());
        self::assertSame("12345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
