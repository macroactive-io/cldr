<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageIu;
use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCa;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleIuLatn;

class LocaleIuLatnTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleIuLatn();

        self::assertSame(LanguageIu::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('iu_CA@latin', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="iu-Latn"', $locale->htmlAttributes());
        self::assertSame('iu-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
