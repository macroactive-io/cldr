<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageBem;
use Macroactive\Cldr\Locale\LocaleBem;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryZm;
use PHPUnit\Framework\TestCase;

class LocaleBemTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleBem();

        self::assertSame(LanguageBem::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(TerritoryZm::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('bem_ZM', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="bem"', $locale->htmlAttributes());
        self::assertSame('bem', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
