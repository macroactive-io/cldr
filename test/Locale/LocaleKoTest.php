<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKo;
use Macroactive\Cldr\Locale\LocaleKo;
use Macroactive\Cldr\Script\ScriptKore;
use Macroactive\Cldr\Territory\TerritoryKr;
use PHPUnit\Framework\TestCase;

class LocaleKoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKo();

        self::assertSame(LanguageKo::class, $locale->language()::class);
        self::assertSame(ScriptKore::class, $locale->script()::class);
        self::assertSame(TerritoryKr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ko_KR', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ko"', $locale->htmlAttributes());
        self::assertSame('ko', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
