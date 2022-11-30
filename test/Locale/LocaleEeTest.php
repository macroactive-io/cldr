<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGh;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleEe;

class LocaleEeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEe();

        self::assertSame(LanguageEe::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGh::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ee_GH', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ee"', $locale->htmlAttributes());
        self::assertSame('ee', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
