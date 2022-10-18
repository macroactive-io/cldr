<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSu;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptSund;
use Macroactive\Cldr\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSu class
 *
 * @coversNothing
 */
class LocaleSuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSu();

        self::assertEquals(new LanguageSu(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptSund(), $locale->script());
        self::assertEquals(new TerritoryId(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('su_ID', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('᮰᮱᮲᮳᮴᮵᮶᮷᮸᮹', $locale->digits('0123456789'));
        self::assertSame('ᮘᮞ ᮞᮥᮔ᮪ᮓ', $locale->endonym());
        self::assertSame('lang="su"', $locale->htmlAttributes());
        self::assertSame('su', $locale->languageTag());
        self::assertSame('-᮱᮲᮳', $locale->number(-123));
        self::assertSame('᮱᮲,᮳᮴᮵,᮶᮷᮸.᮰᮹', $locale->number(12345678.09));
        self::assertSame('᮱,᮲᮳᮴.᮵᮶%', $locale->percent(12.3456));
    }
}
