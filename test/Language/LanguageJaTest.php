<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJpan;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageJa class
 *
 * @coversNothing
 */
class LanguageJaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageJa();

        self::assertEquals(new ScriptJpan(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('ja', $language->code());
    }
}
