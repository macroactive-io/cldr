<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\Locale\LocaleEnMt;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMt;
use PHPUnit\Framework\TestCase;

class LocaleEnMtTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEnMt();

        self::assertSame(LanguageEn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('en_MT', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-MT"', $locale->htmlAttributes());
        self::assertSame('en-MT', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
