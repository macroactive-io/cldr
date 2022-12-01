<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageSu;
use Macroactive\Cldr\Locale\LocaleSu;
use Macroactive\Cldr\Script\ScriptSund;
use Macroactive\Cldr\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

class LocaleSuTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleSu();

        self::assertSame(LanguageSu::class, $locale->language()::class);
        self::assertSame(ScriptSund::class, $locale->script()::class);
        self::assertSame(TerritoryId::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('su_ID', $locale->code());

        self::assertSame('᮰᮱᮲᮳᮴᮵᮶᮷᮸᮹', $locale->digits('0123456789'));
        self::assertSame('lang="su"', $locale->htmlAttributes());
        self::assertSame('su', $locale->languageTag());
        self::assertSame('-᮱᮲᮳', $locale->number(-123));
        self::assertSame('᮱᮲.᮳᮴᮵.᮶᮷᮸,᮰᮹', $locale->number(12345678.09));
        self::assertSame('᮱.᮲᮳᮴,᮵᮶%', $locale->percent(12.3456));
    }
}
