<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageRn class
 *
 * @coversNothing
 */
class LanguageRnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageRn();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('rn', $language->code());
    }
}
