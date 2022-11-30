<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageFr;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryCi;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleFrCi;

class LocaleFrCiTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFrCi();

        self::assertSame(LanguageFr::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryCi::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fr_CI', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="fr-CI"', $locale->htmlAttributes());
        self::assertSame('fr-CI', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{202f}345\u{202f}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{202f}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
