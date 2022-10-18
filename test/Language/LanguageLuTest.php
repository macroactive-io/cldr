<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageLu class
 *
 * @coversNothing
 */
class LanguageLuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageLu();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('lu', $language->code());
    }
}
