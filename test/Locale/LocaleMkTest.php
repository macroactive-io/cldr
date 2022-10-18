<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMk;
use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Script\ScriptCyrl;
use Macroactive\Cldr\Territory\TerritoryMk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMk class
 *
 * @coversNothing
 */
class LocaleMkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMk();

        self::assertEquals(new LanguageMk(), $locale->language());
        self::assertEquals(new PluralRule15(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryMk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mk_MK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('македонски', $locale->endonym());
        self::assertSame('lang="mk"', $locale->htmlAttributes());
        self::assertSame('mk', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
