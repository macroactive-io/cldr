<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Locale;

use Macroactive\Cldr\Language\LanguageCcp;
use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptCakm;
use Macroactive\Cldr\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Locale\LocaleCcpIn;

class LocaleCcpInTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCcpIn();

        self::assertSame(LanguageCcp::class, $locale->language()::class);
        self::assertSame(ScriptCakm::class, $locale->script()::class);
        self::assertSame(TerritoryIn::class, $locale->territory()::class);
        self::assertNull($locale->variant());
        self::assertSame('ccp_IN', $locale->code());

        self::assertSame('𑄶𑄷𑄸𑄹𑄺𑄻𑄼𑄽𑄾𑄿', $locale->digits('0123456789'));
        self::assertSame('lang="ccp-IN"', $locale->htmlAttributes());
        self::assertSame('ccp-IN', $locale->languageTag());
        self::assertSame('-𑄷𑄸𑄹', $locale->number(-123));
        self::assertSame('𑄷,𑄸𑄹,𑄺𑄻,𑄼𑄽𑄾.𑄶𑄿', $locale->number(12345678.09));
        self::assertSame('𑄷,𑄸𑄹𑄺.𑄻𑄼%', $locale->percent(12.3456));
    }
}
