<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageDe;
use Macroactive\Cldr\Locale\LocaleDeCh;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCh;
use PHPUnit\Framework\TestCase;

class LocaleDeChTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleDeCh();

        self::assertSame(LanguageDe::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCh::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('de_CH', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="de-CH"', $locale->htmlAttributes());
        self::assertSame('de-CH', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12’345’678.09', $locale->number(12345678.09));
        self::assertSame('1’234.56%', $locale->percent(12.3456));
    }
}
