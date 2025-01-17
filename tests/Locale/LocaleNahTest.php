<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageNah;
use Macroactive\Cldr\Locale\LocaleNah;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMx;
use PHPUnit\Framework\TestCase;

class LocaleNahTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNah();

        self::assertSame(LanguageNah::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMx::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('nah_MX', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="nah"', $locale->htmlAttributes());
        self::assertSame('nah', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
