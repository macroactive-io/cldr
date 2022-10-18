<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageZgh class
 *
 * @coversNothing
 */
class LanguageZghTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageZgh();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('zgh', $language->code());
    }
}
