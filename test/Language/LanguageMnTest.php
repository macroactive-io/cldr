<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMn class
 *
 * @coversNothing
 */
class LanguageMnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMn();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('mn', $language->code());
    }
}
