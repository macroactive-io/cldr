<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSr;
use Macroactive\Cldr\Locale\LocaleSrCyrlMe;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryMe;
use PHPUnit\Framework\TestCase;

class LocaleSrCyrlMeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSrCyrlMe();

        self::assertSame(LanguageSr::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryMe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sr_ME', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sr-ME"', $locale->htmlAttributes());
        self::assertSame('sr-ME', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
