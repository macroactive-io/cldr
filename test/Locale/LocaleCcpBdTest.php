<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCcp;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptCakm;
use Macroactive\Cldr\Territory\TerritoryBd;
use PHPUnit\Framework\TestCase;

class LocaleCcpBdTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCcpBd();

        self::assertSame(LanguageCcp::class, $locale->language()::class);
        self::assertSame(PluralRule0::class, $locale->pluralRule()::class);
        self::assertSame(ScriptCakm::class, $locale->script()::class);
        self::assertSame(TerritoryBd::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ccp_BD', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('𑄶𑄷𑄸𑄹𑄺𑄻𑄼𑄽𑄾𑄿', $locale->digits('0123456789'));
        self::assertSame('𑄌𑄋𑄴𑄟𑄳𑄦', $locale->endonym());
        self::assertSame('lang="ccp"', $locale->htmlAttributes());
        self::assertSame('ccp', $locale->languageTag());
        self::assertSame('-𑄷𑄸𑄹', $locale->number(-123));
        self::assertSame('𑄷,𑄸𑄹,𑄺𑄻,𑄼𑄽𑄾.𑄶𑄿', $locale->number(12345678.09));
        self::assertSame('𑄷,𑄸𑄹𑄺.𑄻𑄼%', $locale->percent(12.3456));
    }
}
