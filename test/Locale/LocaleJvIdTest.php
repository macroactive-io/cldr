<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageJv;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJava;
use Macroactive\Cldr\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

class LocaleJvIdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleJvId();

        self::assertEquals(new LanguageJv(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptJava(), $locale->script());
        self::assertEquals(new TerritoryId(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('jv_ID', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('꧐꧑꧒꧓꧔꧕꧖꧗꧘꧙', $locale->digits('0123456789'));
        self::assertSame('ꦧꦱꦗꦮ', $locale->endonym());
        self::assertSame('lang="jv"', $locale->htmlAttributes());
        self::assertSame('jv', $locale->languageTag());
        self::assertSame('-꧑꧒꧓', $locale->number(-123));
        self::assertSame('꧑꧒.꧓꧔꧕.꧖꧗꧘,꧐꧙', $locale->number(12345678.09));
        self::assertSame('꧑.꧒꧓꧔,꧕꧖%', $locale->percent(12.3456));
    }
}
