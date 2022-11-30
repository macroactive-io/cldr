<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageIs;
use Macroactive\Cldr\Locale\LocaleIsIs;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIs;
use PHPUnit\Framework\TestCase;

class LocaleIsIsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleIsIs();

        self::assertSame(LanguageIs::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryIs::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('is_IS', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="is"', $locale->htmlAttributes());
        self::assertSame('is', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
