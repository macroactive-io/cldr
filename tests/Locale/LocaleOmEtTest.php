<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageOm;
use Macroactive\Cldr\Locale\LocaleOmEt;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEt;
use PHPUnit\Framework\TestCase;

class LocaleOmEtTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleOmEt();

        self::assertSame(LanguageOm::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryEt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('om_ET', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="om"', $locale->htmlAttributes());
        self::assertSame('om', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}