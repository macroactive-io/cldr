<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageJa;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJpan;
use Macroactive\Cldr\Territory\TerritoryJp;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleJa;

class LocaleJaTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleJa();

        self::assertSame(LanguageJa::class, $locale->language()::class);
        self::assertSame(ScriptJpan::class, $locale->script()::class);
        self::assertSame(TerritoryJp::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ja_JP', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ja"', $locale->htmlAttributes());
        self::assertSame('ja', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
