<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageTi;
use Macroactive\Cldr\Locale\LocaleTiEr;
use Macroactive\Cldr\Script\ScriptEthi;
use Macroactive\Cldr\Territory\TerritoryEr;
use PHPUnit\Framework\TestCase;

class LocaleTiErTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTiEr();

        self::assertSame(LanguageTi::class, $locale->language()::class);
        self::assertSame(ScriptEthi::class, $locale->script()::class);
        self::assertSame(TerritoryEr::class, $locale->territory()::class);
        self::assertNull($locale->variant());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ti-ER"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
