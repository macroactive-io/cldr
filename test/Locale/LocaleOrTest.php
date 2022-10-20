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
    public function testProperties(): void
    {
        $locale = new LocaleOr();

        self::assertSame(LanguageOr::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptOrya::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
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
