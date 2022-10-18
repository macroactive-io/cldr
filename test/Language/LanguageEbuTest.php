<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageEbu class
 *
 * @coversNothing
 */
class LanguageEbuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageEbu();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('ebu', $language->code());
    }
}
