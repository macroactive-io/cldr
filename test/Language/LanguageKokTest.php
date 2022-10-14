<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptDeva;
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
