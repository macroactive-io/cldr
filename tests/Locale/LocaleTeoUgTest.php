<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageTeo;
use Macroactive\Cldr\Locale\LocaleTeoUg;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryUg;
use PHPUnit\Framework\TestCase;

class LocaleTeoUgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTeoUg();

        self::assertSame(LanguageTeo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryUg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('teo_UG', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="teo"', $locale->htmlAttributes());
        self::assertSame('teo', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
