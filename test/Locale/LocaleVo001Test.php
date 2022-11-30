<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageVo;
use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\Territory001;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleVo001;

class LocaleVo001Test extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleVo001();

        self::assertSame(LanguageVo::class, $locale->language()::class);
        self::assertSame(ScriptLatn::class, $locale->script()::class);
        self::assertSame(Territory001::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="vo"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
