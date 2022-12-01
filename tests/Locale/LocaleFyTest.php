<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageFy;
use Macroactive\Cldr\Locale\LocaleFy;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNl;
use PHPUnit\Framework\TestCase;

class LocaleFyTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFy();

        self::assertSame(LanguageFy::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fy_NL', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="fy"', $locale->htmlAttributes());
        self::assertSame('fy', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
