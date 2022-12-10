<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSg;
use Macroactive\Cldr\Locale\LocaleSgCf;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCf;
use PHPUnit\Framework\TestCase;

class LocaleSgCfTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSgCf();

        self::assertSame(LanguageSg::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCf::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sg_CF', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sg"', $locale->htmlAttributes());
        self::assertSame('sg', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}