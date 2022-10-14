<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJava;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKo class
 *
 * @coversNothing
 */
class LanguageJvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageJv();

        self::assertEquals(new ScriptJava(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('jv', $language->code());
    }
}
