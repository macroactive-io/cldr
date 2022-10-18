<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageDyo class
 *
 * @coversNothing
 */
class LanguageDyoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageDyo();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('dyo', $language->code());
    }
}
