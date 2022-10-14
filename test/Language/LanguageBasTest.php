<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageBas class
 *
 * @coversNothing
 */
class LanguageBasTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageBas();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('bas', $language->code());
    }
}
