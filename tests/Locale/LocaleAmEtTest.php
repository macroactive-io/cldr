<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageAm;
use Macroactive\Cldr\Locale\LocaleAmEt;
use Macroactive\Cldr\Script\ScriptEthi;
use Macroactive\Cldr\Territory\TerritoryEt;
use PHPUnit\Framework\TestCase;

class LocaleAmEtTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleAmEt();

        self::assertSame(LanguageAm::class, $locale->language()::class);
        self::assertSame(ScriptEthi::class, $locale->script()::class);
        self::assertSame(TerritoryEt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('am_ET', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="am"', $locale->htmlAttributes());
        self::assertSame('am', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
