<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAz;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryAz;
use PHPUnit\Framework\TestCase;

class LocaleAzCyrlAzTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleAzCyrlAz();

        self::assertSame(LanguageAz::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryAz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('az_AZ@cyrillic', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="az-Cyrl-AZ"', $locale->htmlAttributes());
        self::assertSame('az-Cyrl-AZ', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
