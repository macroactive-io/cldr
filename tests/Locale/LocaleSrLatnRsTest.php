<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSr;
use Macroactive\Cldr\Locale\LocaleSrLatnRs;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryRs;
use PHPUnit\Framework\TestCase;

class LocaleSrLatnRsTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSrLatnRs();

        self::assertSame(LanguageSr::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryRs::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('sr_RS@latin', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sr-Latn"', $locale->htmlAttributes());
        self::assertSame('sr-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
