<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKsf class
 *
 * @coversNothing
 */
class LanguageKsfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKsf();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('ksf', $language->code());
    }
}
