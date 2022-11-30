<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageJgo;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCm;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleJgoCm;

class LocaleJgoCmTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleJgoCm();

        self::assertSame(LanguageJgo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('jgo_CM', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="jgo"', $locale->htmlAttributes());
        self::assertSame('jgo', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
