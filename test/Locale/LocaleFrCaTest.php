<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFr;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCa;
use PHPUnit\Framework\TestCase;

class LocaleFrCaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFrCa();

        self::assertSame(LanguageFr::class, $locale->language()::class);
        self::assertSame(PluralRule2::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fr_CA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('français canadien', $locale->endonym());
        self::assertSame('lang="fr-CA"', $locale->htmlAttributes());
        self::assertSame('fr-CA', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
