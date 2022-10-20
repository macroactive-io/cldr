<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMi;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNz;
use PHPUnit\Framework\TestCase;

class LocaleMiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMi();

        self::assertSame(LanguageMi::class, $locale->language()::class);
        self::assertSame(PluralRule2::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mi_NZ', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Māori', $locale->endonym());
        self::assertSame('lang="mi"', $locale->htmlAttributes());
        self::assertSame('mi', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
