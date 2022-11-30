<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNl;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleEnNl;

class LocaleEnNlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEnNl();

        self::assertSame(LanguageEn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('en_NL', $locale->code());
        
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="en-NL"', $locale->htmlAttributes());
        self::assertSame('en-NL', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
