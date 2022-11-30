<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageFf;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryGm;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleFfLatnGm;

class LocaleFfLatnGmTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFfLatnGm();

        self::assertSame(LanguageFf::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryGm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ff_GM', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ff-GM"', $locale->htmlAttributes());
        self::assertSame('ff-GM', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
