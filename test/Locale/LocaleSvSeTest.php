<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSv;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

class LocaleSvSeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSvSe();

        self::assertSame(LanguageSv::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sv_SE', $locale->code());
        self::assertSame('swedish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sv"', $locale->htmlAttributes());
        self::assertSame('sv', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
