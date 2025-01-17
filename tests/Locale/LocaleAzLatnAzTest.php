<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAz;
use Macroactive\Cldr\Locale\LocaleAzLatnAz;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryAz;
use PHPUnit\Framework\TestCase;

class LocaleAzLatnAzTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleAzLatnAz();

        self::assertSame(LanguageAz::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryAz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('az_AZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="az-AZ"', $locale->htmlAttributes());
        self::assertSame('az-AZ', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
