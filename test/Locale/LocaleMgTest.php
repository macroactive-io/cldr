<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMg;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMg;
use PHPUnit\Framework\TestCase;

class LocaleMgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMg();

        self::assertSame(LanguageMg::class, $locale->language()::class);
        self::assertSame(PluralRule2::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mg_MG', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Malagasy', $locale->endonym());
        self::assertSame('lang="mg"', $locale->htmlAttributes());
        self::assertSame('mg', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
