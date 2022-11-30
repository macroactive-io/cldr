<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEs;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGq;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleEsGq;

class LocaleEsGqTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEsGq();

        self::assertSame(LanguageEs::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGq::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('es_GQ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="es-GQ"', $locale->htmlAttributes());
        self::assertSame('es-GQ', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
