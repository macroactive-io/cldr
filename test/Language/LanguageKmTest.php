<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKhmr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKm class
 *
 * @coversNothing
 */
class LanguageKmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKm();

        self::assertEquals(new ScriptKhmr(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('km', $language->code());
    }
}
