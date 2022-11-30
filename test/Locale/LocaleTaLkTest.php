<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageTa;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTaml;
use Macroactive\Cldr\Territory\TerritoryLk;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleTaLk;

class LocaleTaLkTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTaLk();

        self::assertSame(LanguageTa::class, $locale->language()::class);
        self::assertSame(ScriptTaml::class, $locale->script()::class);
        self::assertSame(TerritoryLk::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ta_LK', $locale->code());

        self::assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        self::assertSame('lang="ta-LK"', $locale->htmlAttributes());
        self::assertSame('ta-LK', $locale->languageTag());
        self::assertSame('-௧௨௩', $locale->number(-123));
        self::assertSame('௧,௨௩,௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        self::assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
