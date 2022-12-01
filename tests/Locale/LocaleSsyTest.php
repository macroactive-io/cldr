<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSsy;
use Macroactive\Cldr\Locale\LocaleSsy;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEr;
use PHPUnit\Framework\TestCase;

class LocaleSsyTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSsy();

        self::assertSame(LanguageSsy::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryEr::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ssy_ER', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ssy"', $locale->htmlAttributes());
        self::assertSame('ssy', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
