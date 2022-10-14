<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKn;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptKnda;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKnIn class
 *
 * @coversNothing
 */
class LocaleKnInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleKnIn();

        self::assertEquals(new LanguageKn(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptKnda(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('kn_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('೦೧೨೩೪೫೬೭೮೯', $locale->digits('0123456789'));
        self::assertSame('lang="kn"', $locale->htmlAttributes());
        self::assertSame('kn', $locale->languageTag());
        self::assertSame('-೧೨೩', $locale->number(-123));
        self::assertSame('೧೨,೩೪೫,೬೭೮.೦೯', $locale->number(12345678.09));
        self::assertSame('೧,೨೩೪.೫೬%', $locale->percent(12.3456));
    }
}
