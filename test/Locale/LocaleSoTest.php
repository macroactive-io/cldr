<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSo;
use Macroactive\Cldr\Locale\LocaleSo;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySo;
use PHPUnit\Framework\TestCase;

class LocaleSoTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSo();

        self::assertSame(LanguageSo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySo::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('so_SO', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="so"', $locale->htmlAttributes());
        self::assertSame('so', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
