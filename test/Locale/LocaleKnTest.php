<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKn;
use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptKnda;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleKn;

class LocaleKnTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKn();

        self::assertSame(LanguageKn::class, $locale->language()::class);
        self::assertSame(ScriptKnda::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('kn_IN', $locale->code());

        self::assertSame('೦೧೨೩೪೫೬೭೮೯', $locale->digits('0123456789'));
        self::assertSame('lang="kn"', $locale->htmlAttributes());
        self::assertSame('kn', $locale->languageTag());
        self::assertSame('-೧೨೩', $locale->number(-123));
        self::assertSame('೧೨,೩೪೫,೬೭೮.೦೯', $locale->number(12345678.09));
        self::assertSame('೧,೨೩೪.೫೬%', $locale->percent(12.3456));
    }
}
