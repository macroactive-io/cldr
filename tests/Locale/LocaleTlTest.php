<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageTl;
use Macroactive\Cldr\Locale\LocaleTl;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryPh;
use PHPUnit\Framework\TestCase;

class LocaleTlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTl();

        self::assertSame(LanguageTl::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryPh::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('tl_PH', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="tl"', $locale->htmlAttributes());
        self::assertSame('tl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
