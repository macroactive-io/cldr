<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageBez;
use Macroactive\Cldr\Locale\LocaleBezTz;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryTz;
use PHPUnit\Framework\TestCase;

class LocaleBezTzTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBezTz();

        self::assertSame(LanguageBez::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryTz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('bez_TZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="bez"', $locale->htmlAttributes());
        self::assertSame('bez', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
