<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageNmg class
 *
 * @coversNothing
 */
class LanguageNmgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageNmg();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('nmg', $language->code());
    }
}
