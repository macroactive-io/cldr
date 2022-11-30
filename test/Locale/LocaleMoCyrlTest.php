<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMo;
use Macroactive\Cldr\PluralRule\PluralRule5;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryRo;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleMoCyrl;

class LocaleMoCyrlTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMoCyrl();

        self::assertSame(LanguageMo::class, $locale->language()::class);
        self::assertSame(ScriptCyrl::class, $locale->script()::class);
        self::assertSame(TerritoryRo::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ro_RO@cyrillic', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="ro-Cyrl"', $locale->htmlAttributes());
        self::assertSame('ro-Cyrl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame("1.234,56\u{a0}%", $locale->percent(12.3456));
    }
}
