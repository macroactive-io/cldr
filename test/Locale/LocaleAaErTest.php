<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAa;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEr;
use PHPUnit\Framework\TestCase;

class LocaleAaErTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleAaEr();

        self::assertSame(LanguageAa::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryEr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('aa_ER', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="aa-ER"', $locale->htmlAttributes());
        self::assertSame('aa-ER', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
