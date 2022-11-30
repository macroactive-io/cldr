<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCa;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryIt;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleCaIt;

class LocaleCaItTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCaIt();

        self::assertSame(LanguageCa::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryIt::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ca_IT', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ca-IT"', $locale->htmlAttributes());
        self::assertSame('ca-IT', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
