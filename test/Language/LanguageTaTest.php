<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTaml;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageTa class
 *
 * @coversNothing
 */
class LanguageTaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageTa();

        self::assertEquals(new ScriptTaml(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ta', $language->code());
    }
}
