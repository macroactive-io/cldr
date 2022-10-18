<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageEwo class
 *
 * @coversNothing
 */
class LanguageEwoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageEwo();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('ewo', $language->code());
    }
}
