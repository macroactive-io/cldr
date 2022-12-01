<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageJv;
use Macroactive\Cldr\Locale\LocaleJvId;
use Macroactive\Cldr\Script\ScriptJava;
use Macroactive\Cldr\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

class LocaleJvIdTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleJvId();

        self::assertSame(LanguageJv::class, $locale->language()::class);
        self::assertSame(ScriptJava::class, $locale->script()::class);
        self::assertSame(TerritoryId::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('jv_ID', $locale->code());

        self::assertSame('꧐꧑꧒꧓꧔꧕꧖꧗꧘꧙', $locale->digits('0123456789'));
        self::assertSame('lang="jv"', $locale->htmlAttributes());
        self::assertSame('jv', $locale->languageTag());
        self::assertSame('-꧑꧒꧓', $locale->number(-123));
        self::assertSame('꧑꧒.꧓꧔꧕.꧖꧗꧘,꧐꧙', $locale->number(12345678.09));
        self::assertSame('꧑.꧒꧓꧔,꧕꧖%', $locale->percent(12.3456));
    }
}
