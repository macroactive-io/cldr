<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageNe;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryNp;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleNeNp;

class LocaleNeNpTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleNeNp();

        self::assertSame(LanguageNe::class, $locale->language()::class);
        self::assertSame(ScriptDeva::class, $locale->script()::class);
        self::assertSame(TerritoryNp::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ne_NP', $locale->code());

        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('lang="ne"', $locale->htmlAttributes());
        self::assertSame('ne', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
