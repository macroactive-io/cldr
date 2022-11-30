<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSmj;
use Macroactive\Cldr\Locale\LocaleSmj;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

class LocaleSmjTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSmj();

        self::assertSame(LanguageSmj::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySe::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('smj_SE', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="smj"', $locale->htmlAttributes());
        self::assertSame('smj', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
