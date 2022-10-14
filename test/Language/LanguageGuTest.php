<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGujr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageGu class
 *
 * @coversNothing
 */
class LanguageGuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageGu();

        self::assertEquals(new ScriptGujr(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('gu', $language->code());
    }
}
