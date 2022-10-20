<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageKo;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKore;
use Macroactive\Cldr\Territory\TerritoryKp;
use PHPUnit\Framework\TestCase;

class LocaleKoKpTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKoKp();

        self::assertSame(LanguageKo::class, $locale->language()::class);
        self::assertSame(PluralRule0::class, $locale->pluralRule()::class);
        self::assertSame(ScriptKore::class, $locale->script()::class);
        self::assertSame(TerritoryKp::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ko_KP', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ko-KP"', $locale->htmlAttributes());
        self::assertSame('ko-KP', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
