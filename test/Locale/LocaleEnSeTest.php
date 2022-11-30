<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleEnSe;

class LocaleEnSeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEnSe();

        self::assertSame(LanguageEn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('en_SE', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-SE"', $locale->htmlAttributes());
        self::assertSame('en-SE', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
