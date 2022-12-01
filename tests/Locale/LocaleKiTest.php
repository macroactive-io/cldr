<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKi;
use Macroactive\Cldr\Locale\LocaleKi;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryKe;
use PHPUnit\Framework\TestCase;

class LocaleKiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKi();

        self::assertSame(LanguageKi::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryKe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ki_KE', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ki"', $locale->htmlAttributes());
        self::assertSame('ki', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
