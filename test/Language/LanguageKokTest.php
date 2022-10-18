<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKok class
 *
 * @coversNothing
 */
class LanguageKokTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKok();

        self::assertEquals(new ScriptDeva(), $language->defaultScript());
        self::assertSame('kok', $language->code());
    }
}
