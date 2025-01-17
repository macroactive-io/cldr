<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAz;
use Macroactive\Cldr\Locale\LocaleAzCyrl;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

class LocaleAzCyrlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleAzCyrl();

        self::assertSame(LanguageAz::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryIr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('az_IR@cyrillic', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="az-Cyrl"', $locale->htmlAttributes());
        self::assertSame('az-Cyrl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
