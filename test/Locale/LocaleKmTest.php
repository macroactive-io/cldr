<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKm;
use Macroactive\Cldr\Locale\LocaleKm;
use Macroactive\Cldr\Script\ScriptKhmr;
use Macroactive\Cldr\Territory\TerritoryKh;
use PHPUnit\Framework\TestCase;

class LocaleKmTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKm();

        self::assertSame(LanguageKm::class, $locale->language()::class);
        self::assertSame(ScriptKhmr::class, $locale->script()::class);
        self::assertSame(TerritoryKh::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('km_KH', $locale->code());

        self::assertSame('០១២៣៤៥៦៧៨៩', $locale->digits('0123456789'));
        self::assertSame('lang="km"', $locale->htmlAttributes());
        self::assertSame('km', $locale->languageTag());
        self::assertSame('-១២៣', $locale->number(-123));
        self::assertSame('១២.៣៤៥.៦៧៨,០៩', $locale->number(12345678.09));
        self::assertSame('១.២៣៤,៥៦%', $locale->percent(12.3456));
    }
}
