<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageQu;
use Macroactive\Cldr\Locale\LocaleQuPe;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryPe;
use PHPUnit\Framework\TestCase;

class LocaleQuPeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleQuPe();

        self::assertSame(LanguageQu::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryPe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('qu_PE', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="qu"', $locale->htmlAttributes());
        self::assertSame('qu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame("1,234.56\u{a0}%", $locale->percent(12.3456));
    }
}
