<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKhq class
 *
 * @coversNothing
 */
class LanguageKhqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKhq();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('khq', $language->code());
    }
}
