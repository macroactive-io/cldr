<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptKnda;
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
