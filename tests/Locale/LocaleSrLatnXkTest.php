<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSr;
use Macroactive\Cldr\Locale\LocaleSrLatnXk;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryXk;
use PHPUnit\Framework\TestCase;

class LocaleSrLatnXkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSrLatnXk();

        self::assertSame(LanguageSr::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryXk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sr_XK@latin', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sr-Latn-XK"', $locale->htmlAttributes());
        self::assertSame('sr-Latn-XK', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
