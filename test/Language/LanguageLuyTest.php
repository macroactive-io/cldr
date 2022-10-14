<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageLuy class
 *
 * @coversNothing
 */
class LanguageLuyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageLuy();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('luy', $language->code());
    }
}
