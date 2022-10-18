<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSbp class
 *
 * @coversNothing
 */
class LanguageSbpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSbp();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('sbp', $language->code());
    }
}
