<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCy;
use Macroactive\Cldr\Locale\LocaleCyGb;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

class LocaleCyGbTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCyGb();

        self::assertSame(LanguageCy::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGb::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('cy_GB', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="cy"', $locale->htmlAttributes());
        self::assertSame('cy', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}