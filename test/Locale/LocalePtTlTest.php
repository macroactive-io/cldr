<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguagePt;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryTl;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocalePtTl;

class LocalePtTlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePtTl();

        self::assertSame(LanguagePt::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryTl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('pt_TL', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="pt-TL"', $locale->htmlAttributes());
        self::assertSame('pt-TL', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
