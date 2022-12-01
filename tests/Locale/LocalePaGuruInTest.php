<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguagePa;
use Macroactive\Cldr\Locale\LocalePaGuruIn;
use Macroactive\Cldr\Script\ScriptGuru;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocalePaGuruInTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePaGuruIn();

        self::assertSame(LanguagePa::class, $locale->language()::class);
        self::assertSame(ScriptGuru::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('pa_IN', $locale->code());

        self::assertSame('੦੧੨੩੪੫੬੭੮੯', $locale->digits('0123456789'));
        self::assertSame('lang="pa"', $locale->htmlAttributes());
        self::assertSame('pa', $locale->languageTag());
        self::assertSame('-੧੨੩', $locale->number(-123));
        self::assertSame('੧,੨੩,੪੫,੬੭੮.੦੯', $locale->number(12345678.09));
        self::assertSame('੧,੨੩੪.੫੬%', $locale->percent(12.3456));
    }
}
