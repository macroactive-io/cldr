<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageLn;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryAo;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleLnAo;

class LocaleLnAoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLnAo();

        self::assertSame(LanguageLn::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryAo::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ln_AO', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ln-AO"', $locale->htmlAttributes());
        self::assertSame('ln-AO', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
