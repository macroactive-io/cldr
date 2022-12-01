<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageMr;
use Macroactive\Cldr\Locale\LocaleMrIn;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

class LocaleMrInTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleMrIn();

        self::assertSame(LanguageMr::class, $locale->language()::class);
        self::assertSame(ScriptDeva::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('mr_IN', $locale->code());

        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('lang="mr"', $locale->htmlAttributes());
        self::assertSame('mr', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
