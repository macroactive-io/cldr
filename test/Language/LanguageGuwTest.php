<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageGuw class
 *
 * @coversNothing
 */
class LanguageGuwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageGuw();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('guw', $language->code());
    }
}
