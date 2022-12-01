<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageIt;
use Macroactive\Cldr\Locale\LocaleItSm;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySm;
use PHPUnit\Framework\TestCase;

class LocaleItSmTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleItSm();

        self::assertSame(LanguageIt::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('it_SM', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="it-SM"', $locale->htmlAttributes());
        self::assertSame('it-SM', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
