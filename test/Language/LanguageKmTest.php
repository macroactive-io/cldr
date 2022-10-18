<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptKhmr;
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
