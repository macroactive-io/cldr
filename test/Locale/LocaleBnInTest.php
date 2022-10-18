<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBn;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBnIn class
 *
 * @coversNothing
 */
class LocaleBnInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleBnIn();

        self::assertEquals(new LanguageBn(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptBeng(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('bn_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
        self::assertSame('lang="bn-IN"', $locale->htmlAttributes());
        self::assertSame('bn-IN', $locale->languageTag());
        self::assertSame('-১২৩', $locale->number(-123));
        self::assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
        self::assertSame('১,২৩৪.৫৬%', $locale->percent(12.3456));
    }
}
