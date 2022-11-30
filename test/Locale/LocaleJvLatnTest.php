<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageJv;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleJvLatn;

class LocaleJvLatnTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleJvLatn();

        self::assertSame(LanguageJv::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryId::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('jv_ID@latin', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="jv-Latn"', $locale->htmlAttributes());
        self::assertSame('jv-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
