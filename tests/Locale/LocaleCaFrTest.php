<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCa;
use Macroactive\Cldr\Locale\LocaleCaFr;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryFr;
use PHPUnit\Framework\TestCase;

class LocaleCaFrTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCaFr();

        self::assertSame(LanguageCa::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryFr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ca_FR', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ca-FR"', $locale->htmlAttributes());
        self::assertSame('ca-FR', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}