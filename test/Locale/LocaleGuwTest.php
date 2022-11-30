<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageGuw;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryBj;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleGuw;

class LocaleGuwTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleGuw();

        self::assertSame(LanguageGuw::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryBj::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('guw_BJ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="guw"', $locale->htmlAttributes());
        self::assertSame('guw', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
