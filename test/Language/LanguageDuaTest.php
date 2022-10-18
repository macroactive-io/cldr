<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
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
