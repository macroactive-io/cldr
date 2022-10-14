<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageAgq class
 *
 * @coversNothing
 */
class LanguageAgqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAgq();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('agq', $language->code());
    }
}
