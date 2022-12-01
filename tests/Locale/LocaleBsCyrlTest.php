<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageBs;
use Macroactive\Cldr\Locale\LocaleBsCyrl;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryBa;
use PHPUnit\Framework\TestCase;

class LocaleBsCyrlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBsCyrl();

        self::assertSame(LanguageBs::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryBa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('bs_BA@cyrillic', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="bs-Cyrl"', $locale->htmlAttributes());
        self::assertSame('bs-Cyrl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
