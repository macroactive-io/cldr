<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageTa;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTaml;
use Macroactive\Cldr\Territory\TerritoryLk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTaLk class
 *
 * @coversNothing
 */
class LocaleTaLkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTaLk();

        self::assertEquals(new LanguageTa(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptTaml(), $locale->script());
        self::assertEquals(new TerritoryLk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ta_LK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        self::assertSame('lang="ta-LK"', $locale->htmlAttributes());
        self::assertSame('ta-LK', $locale->languageTag());
        self::assertSame('-௧௨௩', $locale->number(-123));
        self::assertSame('௧,௨௩,௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        self::assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
