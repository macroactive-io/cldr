<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMs;
use Macroactive\Cldr\Locale\LocaleMsSg;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritorySg;
use PHPUnit\Framework\TestCase;

class LocaleMsSgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMsSg();

        self::assertSame(LanguageMs::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritorySg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ms_SG', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ms-SG"', $locale->htmlAttributes());
        self::assertSame('ms-SG', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}