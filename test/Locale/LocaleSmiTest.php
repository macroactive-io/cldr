<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSmi;
use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryFi;
use PHPUnit\Framework\TestCase;

class LocaleSmiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSmi();

        self::assertEquals(new LanguageSmi(), $locale->language());
        self::assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryFi(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('smi_FI', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('saami', $locale->endonym());
        self::assertSame('lang="smi"', $locale->htmlAttributes());
        self::assertSame('smi', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
