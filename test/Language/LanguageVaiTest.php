<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptVaii;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageVai class
 *
 * @coversNothing
 */
class LanguageVaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageVai();

        self::assertEquals(new ScriptVaii(), $language->defaultScript());
        self::assertSame('vai', $language->code());
    }
}
