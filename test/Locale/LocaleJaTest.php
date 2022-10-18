<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageJa;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJpan;
use Macroactive\Cldr\Territory\TerritoryJp;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleJa class
 *
 * @coversNothing
 */
class LocaleJaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleJa();

        self::assertEquals(new LanguageJa(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptJpan(), $locale->script());
        self::assertEquals(new TerritoryJp(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ja_JP', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('日本語', $locale->endonym());
        self::assertSame('lang="ja"', $locale->htmlAttributes());
        self::assertSame('ja', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
