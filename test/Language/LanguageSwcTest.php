<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSwc class
 *
 * @coversNothing
 */
class LanguageSwcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSwc();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('swc', $language->code());
    }
}
