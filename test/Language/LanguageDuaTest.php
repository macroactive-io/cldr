<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageDua class
 *
 * @coversNothing
 */
class LanguageDuaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageDua();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('dua', $language->code());
    }
}
