<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEs;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory419;
use PHPUnit\Framework\TestCase;

class LocaleEs419Test extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleEs419();

        self::assertSame(LanguageEs::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(Territory419::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('es_419', $locale->code());
        self::assertSame('spanish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('español latinoamericano', $locale->endonym());
        self::assertSame('lang="es-419"', $locale->htmlAttributes());
        self::assertSame('es-419', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame("1,234.56\u{a0}%", $locale->percent(12.3456));
    }
}
