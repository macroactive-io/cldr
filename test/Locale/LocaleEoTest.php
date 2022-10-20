<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEo;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory001;
use PHPUnit\Framework\TestCase;

class LocaleEoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEo();

        self::assertSame(LanguageEo::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(Territory001::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('eo_001', $locale->code());
        self::assertSame('esperanto_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('esperanto', $locale->endonym());
        self::assertSame('lang="eo"', $locale->htmlAttributes());
        self::assertSame('eo', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
