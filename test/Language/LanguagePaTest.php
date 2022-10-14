<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGuru;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguagePa class
 *
 * @coversNothing
 */
class LanguagePaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguagePa();

        self::assertEquals(new ScriptGuru(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('pa', $language->code());
    }
}
