<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageDyo;
use Macroactive\Cldr\Locale\LocaleDyoSn;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySn;
use PHPUnit\Framework\TestCase;

class LocaleDyoSnTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleDyoSn();

        self::assertSame(LanguageDyo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('dyo_SN', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="dyo"', $locale->htmlAttributes());
        self::assertSame('dyo', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
