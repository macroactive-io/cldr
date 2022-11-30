<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageTa;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTaml;
use Macroactive\Cldr\Territory\TerritorySg;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleTaSg;

class LocaleTaSgTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleTaSg();

        self::assertSame(LanguageTa::class, $locale->language()::class);
        self::assertSame(ScriptTaml::class, $locale->script()::class);
        self::assertSame(TerritorySg::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ta_SG', $locale->code());

        self::assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        self::assertSame('lang="ta-SG"', $locale->htmlAttributes());
        self::assertSame('ta-SG', $locale->languageTag());
        self::assertSame('-௧௨௩', $locale->number(-123));
        self::assertSame('௧௨,௩௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        self::assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
