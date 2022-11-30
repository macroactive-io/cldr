<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageId;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleIdId;

class LocaleIdIdTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleIdId();

        self::assertSame(LanguageId::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryId::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('id_ID', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="id"', $locale->htmlAttributes());
        self::assertSame('id', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
