<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageGv;
use Macroactive\Cldr\Locale\LocaleGvIm;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIm;
use PHPUnit\Framework\TestCase;

class LocaleGvImTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleGvIm();

        self::assertSame(LanguageGv::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryIm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('gv_IM', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="gv"', $locale->htmlAttributes());
        self::assertSame('gv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
