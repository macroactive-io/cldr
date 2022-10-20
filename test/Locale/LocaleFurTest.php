<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFur;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIt;
use PHPUnit\Framework\TestCase;

class LocaleFurTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFur();

        self::assertSame(LanguageFur::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryIt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fur_IT', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('furlan', $locale->endonym());
        self::assertSame('lang="fur"', $locale->htmlAttributes());
        self::assertSame('fur', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
