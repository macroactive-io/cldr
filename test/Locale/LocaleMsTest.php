<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMs;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMy;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleMs;

class LocaleMsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMs();

        self::assertSame(LanguageMs::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMy::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ms_MY', $locale->code());
        
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ms"', $locale->htmlAttributes());
        self::assertSame('ms', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
