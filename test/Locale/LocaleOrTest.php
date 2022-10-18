<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageOr;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptOrya;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocaleOrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleOr();

        self::assertEquals(new LanguageOr(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptOrya(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('or_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('୦୧୨୩୪୫୬୭୮୯', $locale->digits('0123456789'));
        self::assertSame('ଓଡ଼ିଆ', $locale->endonym());
        self::assertSame('lang="or"', $locale->htmlAttributes());
        self::assertSame('or', $locale->languageTag());
        self::assertSame('-୧୨୩', $locale->number(-123));
        self::assertSame('୧,୨୩,୪୫,୬୭୮.୦୯', $locale->number(12345678.09));
        self::assertSame('୧,୨୩୪.୫୬%', $locale->percent(12.3456));
    }
}
