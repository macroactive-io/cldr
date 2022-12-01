<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEe;
use Macroactive\Cldr\Locale\LocaleEeTg;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryTg;
use PHPUnit\Framework\TestCase;

class LocaleEeTgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEeTg();

        self::assertSame(LanguageEe::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryTg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ee_TG', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ee-TG"', $locale->htmlAttributes());
        self::assertSame('ee-TG', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
