<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguagePl;
use Macroactive\Cldr\PluralRule\PluralRule9;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryPl;
use PHPUnit\Framework\TestCase;

class LocalePlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePl();

        self::assertEquals(new LanguagePl(), $locale->language());
        self::assertEquals(new PluralRule9(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPl(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pl_PL', $locale->code());
        self::assertSame('polish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('polski', $locale->endonym());
        self::assertSame('lang="pl"', $locale->htmlAttributes());
        self::assertSame('pl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
