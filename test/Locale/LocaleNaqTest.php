<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageNaq;
use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryNa;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleNaq;

class LocaleNaqTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNaq();

        self::assertSame(LanguageNaq::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryNa::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('naq_NA', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="naq"', $locale->htmlAttributes());
        self::assertSame('naq', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
