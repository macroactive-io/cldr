<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptTibt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageDz class
 *
 * @coversNothing
 */
class LanguageDzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageDz();

        self::assertEquals(new ScriptTibt(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('dz', $language->code());
    }
}
