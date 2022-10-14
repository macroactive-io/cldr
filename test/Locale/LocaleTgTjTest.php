<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTg;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryTj;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTgTj class
 *
 * @coversNothing
 */
class LocaleTgTjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTgTj();

        self::assertEquals(new LanguageTg(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryTj(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('tg_TJ', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('тоҷикӣ', $locale->endonym());
        self::assertSame('lang="tg"', $locale->htmlAttributes());
        self::assertSame('tg', $locale->languageTag());
        self::assertSame("12\u{a0}345\u{a0}678,09", $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame("1\u{a0}234,56%", $locale->percent(12.3456));
    }
}
