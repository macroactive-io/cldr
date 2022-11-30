<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageLag;
use Macroactive\Cldr\PluralRule\PluralRuleZeroOneOther;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryTz;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleLag;

class LocaleLagTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleLag();

        self::assertSame(LanguageLag::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryTz::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('lag_TZ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="lag"', $locale->htmlAttributes());
        self::assertSame('lag', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
