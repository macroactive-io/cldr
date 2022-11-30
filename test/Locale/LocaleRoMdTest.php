<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageRo;
use Macroactive\Cldr\PluralRule\PluralRule5;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMd;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleRoMd;

class LocaleRoMdTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleRoMd();

        self::assertSame(LanguageRo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMd::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ro_MD', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ro-MD"', $locale->htmlAttributes());
        self::assertSame('ro-MD', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
