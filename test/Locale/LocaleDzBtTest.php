<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageDz;
use Macroactive\Cldr\Locale\LocaleDzBt;
use Macroactive\Cldr\Script\ScriptTibt;
use Macroactive\Cldr\Territory\TerritoryBt;
use PHPUnit\Framework\TestCase;

class LocaleDzBtTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleDzBt();

        self::assertSame(LanguageDz::class, $locale->language()::class);
        self::assertSame(ScriptTibt::class, $locale->script()::class);
        self::assertSame(TerritoryBt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('dz_BT', $locale->code());

        self::assertSame('༠༡༢༣༤༥༦༧༨༩', $locale->digits('0123456789'));
        self::assertSame('lang="dz"', $locale->htmlAttributes());
        self::assertSame('dz', $locale->languageTag());
        self::assertSame('-༡༢༣', $locale->number(-123));
        self::assertSame('༡,༢༣,༤༥,༦༧༨.༠༩', $locale->number(12345678.09));
        self::assertSame("༡,༢༣༤.༥༦\u{a0}%", $locale->percent(12.3456));
    }
}
