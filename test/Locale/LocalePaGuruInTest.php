<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePa;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGuru;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePaGuruIn class
 *
 * @coversNothing
 */
class LocalePaGuruInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePaGuruIn();

        self::assertEquals(new LanguagePa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptGuru(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pa_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('੦੧੨੩੪੫੬੭੮੯', $locale->digits('0123456789'));
        self::assertSame('lang="pa"', $locale->htmlAttributes());
        self::assertSame('pa', $locale->languageTag());
        self::assertSame('-੧੨੩', $locale->number(-123));
        self::assertSame('੧,੨੩,੪੫,੬੭੮.੦੯', $locale->number(12345678.09));
        self::assertSame('੧,੨੩੪.੫੬%', $locale->percent(12.3456));
    }
}
