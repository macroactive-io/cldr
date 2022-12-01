<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCgg;
use Macroactive\Cldr\Locale\LocaleCggUg;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryUg;
use PHPUnit\Framework\TestCase;

class LocaleCggUgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCggUg();

        self::assertSame(LanguageCgg::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryUg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('cgg_UG', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="cgg"', $locale->htmlAttributes());
        self::assertSame('cgg', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
