<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageChr;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryUs;
use PHPUnit\Framework\TestCase;

class LocaleChrTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleChr();

        self::assertSame(LanguageChr::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryUs::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('chr_US', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ᏣᎳᎩ', $locale->endonym());
        self::assertSame('lang="chr"', $locale->htmlAttributes());
        self::assertSame('chr', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
