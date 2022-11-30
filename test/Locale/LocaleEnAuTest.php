<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryAu;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleEnAu;

class LocaleEnAuTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEnAu();

        self::assertSame(LanguageEn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryAu::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('en_AU', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-AU"', $locale->htmlAttributes());
        self::assertSame('en-AU', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
