<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageKok;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleKokIn;

class LocaleKokInTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleKokIn();

        self::assertSame(LanguageKok::class, $locale->language()::class);
        self::assertSame(ScriptDeva::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('kok_IN', $locale->code());

        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('lang="kok"', $locale->htmlAttributes());
        self::assertSame('kok', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
