<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCs;
use Macroactive\Cldr\PluralRule\PluralRule8;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCz;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleCsCz;

class LocaleCsCzTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCsCz();

        self::assertSame(LanguageCs::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('cs_CZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="cs"', $locale->htmlAttributes());
        self::assertSame('cs', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
