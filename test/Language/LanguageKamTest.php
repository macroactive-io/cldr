<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKam class
 *
 * @coversNothing
 */
class LanguageKamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKam();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('kam', $language->code());
    }
}
