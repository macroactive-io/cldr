<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageZh;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptHans;
use Macroactive\Cldr\Territory\TerritoryCn;
use PHPUnit\Framework\TestCase;

class LocaleZhTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleZh();

        self::assertSame(LanguageZh::class, $locale->language()::class);
        self::assertSame(PluralRule0::class, $locale->pluralRule()::class);
        self::assertSame(ScriptHans::class, $locale->script()::class);
        self::assertSame(TerritoryCn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('中文', $locale->endonym());
        self::assertSame('lang="zh"', $locale->htmlAttributes());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
