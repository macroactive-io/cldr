<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageYo;
use Macroactive\Cldr\Locale\LocaleYoNg;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNg;
use PHPUnit\Framework\TestCase;

class LocaleYoNgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleYoNg();

        self::assertSame(LanguageYo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNg::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="yo"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
