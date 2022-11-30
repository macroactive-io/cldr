<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMy;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptMymr;
use Macroactive\Cldr\Territory\TerritoryMm;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleMyMm;

class LocaleMyMmTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMyMm();

        self::assertSame(LanguageMy::class, $locale->language()::class);
        self::assertSame(ScriptMymr::class, $locale->script()::class);
        self::assertSame(TerritoryMm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('my_MM', $locale->code());

        self::assertSame('၀၁၂၃၄၅၆၇၈၉', $locale->digits('0123456789'));
        self::assertSame('lang="my"', $locale->htmlAttributes());
        self::assertSame('my', $locale->languageTag());
        self::assertSame('-၁၂၃', $locale->number(-123));
        self::assertSame('၁၂၃၄၅,၆၇၈.၀၉', $locale->number(12345678.09));
        self::assertSame('၁၂၃၄.၅၆%', $locale->percent(12.3456));
    }
}
