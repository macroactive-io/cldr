<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageNe;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryNp;
use PHPUnit\Framework\TestCase;

class LocaleNeNpTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNeNp();

        self::assertSame(LanguageNe::class, $locale->language()::class);
        self::assertSame(PluralRule1::class, $locale->pluralRule()::class);
        self::assertSame(ScriptDeva::class, $locale->script()::class);
        self::assertSame(TerritoryNp::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ne_NP', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('lang="ne"', $locale->htmlAttributes());
        self::assertSame('ne', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१२,३४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
