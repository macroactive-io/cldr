<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMfe class
 *
 * @coversNothing
 */
class LanguageMfeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMfe();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('mfe', $language->code());
    }
}
