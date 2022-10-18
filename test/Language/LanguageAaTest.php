<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageAa class
 *
 * @coversNothing
 */
class LanguageAaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAa();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('aa', $language->code());
    }
}
