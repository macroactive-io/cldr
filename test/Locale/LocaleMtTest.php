<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMt;
use Macroactive\Cldr\PluralRule\PluralRule13;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMt;
use PHPUnit\Framework\TestCase;

class LocaleMtTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMt();

        self::assertSame(LanguageMt::class, $locale->language()::class);
        self::assertSame(PluralRule13::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mt_MT', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Malti', $locale->endonym());
        self::assertSame('lang="mt"', $locale->htmlAttributes());
        self::assertSame('mt', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
