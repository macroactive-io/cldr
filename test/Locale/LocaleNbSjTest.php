<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageNb;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySj;
use PHPUnit\Framework\TestCase;

class LocaleNbSjTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNbSj();

        self::assertSame(LanguageNb::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySj::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('nb_SJ', $locale->code());
        self::assertSame('danish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="nb-SJ"', $locale->htmlAttributes());
        self::assertSame('nb-SJ', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
