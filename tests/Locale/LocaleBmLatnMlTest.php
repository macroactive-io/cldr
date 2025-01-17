<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageBm;
use Macroactive\Cldr\Locale\LocaleBmLatnMl;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMl;
use PHPUnit\Framework\TestCase;

class LocaleBmLatnMlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBmLatnMl();

        self::assertSame(LanguageBm::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('bm_ML', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="bm"', $locale->htmlAttributes());
        self::assertSame('bm', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
