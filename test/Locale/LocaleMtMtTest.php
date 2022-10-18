<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageMt;
use Macroactive\Cldr\PluralRule\PluralRule13;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMtMt class
 *
 * @coversNothing
 */
class LocaleMtMtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMtMt();

        self::assertEquals(new LanguageMt(), $locale->language());
        self::assertEquals(new PluralRule13(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMt(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mt_MT', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="mt"', $locale->htmlAttributes());
        self::assertSame('mt', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
