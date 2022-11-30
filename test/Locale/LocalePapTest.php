<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguagePap;
use Macroactive\Cldr\Locale\LocalePap;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory029;
use PHPUnit\Framework\TestCase;

class LocalePapTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocalePap();

        self::assertSame(LanguagePap::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(Territory029::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('pap_029', $locale->code());

        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="pap"', $locale->htmlAttributes());
        self::assertSame('pap', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
