<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageLuo class
 *
 * @coversNothing
 */
class LanguageLuoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageLuo();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('luo', $language->code());
    }
}
