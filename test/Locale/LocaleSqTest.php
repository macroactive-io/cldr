<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSq;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryAl;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleSq;

class LocaleSqTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSq();

        self::assertSame(LanguageSq::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryAl::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sq_AL', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sq"', $locale->htmlAttributes());
        self::assertSame('sq', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
