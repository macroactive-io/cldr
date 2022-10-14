<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageNus class
 *
 * @coversNothing
 */
class LanguageNusTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageNus();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('nus', $language->code());
    }
}
