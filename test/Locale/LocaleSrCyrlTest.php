<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSr;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSrCyrl class
 *
 * @coversNothing
 */
class LocaleSrCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSrCyrl();

        self::assertEquals(new LanguageSr(), $locale->language());
        self::assertEquals(new PluralRule7(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryRs(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sr_RS', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sr"', $locale->htmlAttributes());
        self::assertSame('sr', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
