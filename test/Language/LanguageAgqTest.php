<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageAgq class
 *
 * @coversNothing
 */
class LanguageAgqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAgq();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('agq', $language->code());
    }
}
