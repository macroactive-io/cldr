<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMzn;
use Macroactive\Cldr\Locale\LocaleMznIr;
use Macroactive\Cldr\Script\ScriptArab;
use Macroactive\Cldr\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

class LocaleMznIrTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMznIr();

        self::assertSame(LanguageMzn::class, $locale->language()::class);
        self::assertSame(ScriptArab::class, $locale->script()::class);
        self::assertSame(TerritoryIr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mzn_IR', $locale->code());

        self::assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        self::assertSame('lang="mzn" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('mzn', $locale->languageTag());
        self::assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        self::assertSame('‎-‎۱۲۳', $locale->number(-123));
        self::assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
