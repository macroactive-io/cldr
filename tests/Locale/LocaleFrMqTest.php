<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageFr;
use Macroactive\Cldr\Locale\LocaleFrMq;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryMq;
use PHPUnit\Framework\TestCase;

class LocaleFrMqTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleFrMq();

        self::assertSame(LanguageFr::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryMq::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('fr_MQ', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="fr-MQ"', $locale->htmlAttributes());
        self::assertSame('fr-MQ', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("12\u{202f}345\u{202f}678,09", $locale->number(12345678.09));
        self::assertSame("1\u{202f}234,56\u{a0}%", $locale->percent(12.3456));
    }
}
