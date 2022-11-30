<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEs;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryDo;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleEsDo;

class LocaleEsDoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEsDo();

        self::assertSame(LanguageEs::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryDo::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('es_DO', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="es-DO"', $locale->htmlAttributes());
        self::assertSame('es-DO', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
