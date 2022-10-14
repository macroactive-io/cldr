<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptKnda;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKn class
 *
 * @coversNothing
 */
class LanguageKnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKn();

        self::assertEquals(new ScriptKnda(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('kn', $language->code());
    }
}
