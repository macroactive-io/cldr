<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMfe;
use Macroactive\Cldr\Locale\LocaleMfe;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMu;
use PHPUnit\Framework\TestCase;

class LocaleMfeTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMfe();

        self::assertSame(LanguageMfe::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMu::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mfe_MU', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="mfe"', $locale->htmlAttributes());
        self::assertSame('mfe', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{a0}345\u{a0}678.09", $locale->number(12345678.09));
        self::assertSame("1\u{a0}234.56%", $locale->percent(12.3456));
    }
}
