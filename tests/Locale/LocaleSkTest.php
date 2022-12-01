<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSk;
use Macroactive\Cldr\Locale\LocaleSk;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySk;
use PHPUnit\Framework\TestCase;

class LocaleSkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSk();

        self::assertSame(LanguageSk::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sk_SK', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sk"', $locale->htmlAttributes());
        self::assertSame('sk', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
