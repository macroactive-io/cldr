<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageRn class
 *
 * @coversNothing
 */
class LanguageRnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageRn();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('rn', $language->code());
    }
}
