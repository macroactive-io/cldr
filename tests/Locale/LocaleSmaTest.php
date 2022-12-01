<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSma;
use Macroactive\Cldr\Locale\LocaleSma;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryFi;
use PHPUnit\Framework\TestCase;

class LocaleSmaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSma();

        self::assertSame(LanguageSma::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryFi::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sma_FI', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sma"', $locale->htmlAttributes());
        self::assertSame('sma', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
