<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptTibt;
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
