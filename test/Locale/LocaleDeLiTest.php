<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageDe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryLi;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleDeLi;

class LocaleDeLiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleDeLi();

        self::assertSame(LanguageDe::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryLi::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('de_LI', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="de-LI"', $locale->htmlAttributes());
        self::assertSame('de-LI', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12’345’678.09', $locale->number(12345678.09));
        self::assertSame('1’234.56%', $locale->percent(12.3456));
    }
}
