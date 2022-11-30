<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguagePrg;
use Macroactive\Cldr\Locale\LocalePrg001;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory001;
use PHPUnit\Framework\TestCase;

class LocalePrgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePrg001();

        self::assertSame(LanguagePrg::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(Territory001::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('prg_001', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="prg"', $locale->htmlAttributes());
        self::assertSame('prg', $locale->languageTag());
        self::assertSame("12345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
