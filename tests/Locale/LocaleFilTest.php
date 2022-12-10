<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageFil;
use Macroactive\Cldr\Locale\LocaleFil;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryPh;
use PHPUnit\Framework\TestCase;

class LocaleFilTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFil();

        self::assertSame(LanguageFil::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryPh::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fil_PH', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="fil"', $locale->htmlAttributes());
        self::assertSame('fil', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}