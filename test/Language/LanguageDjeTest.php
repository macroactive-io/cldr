<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageDje class
 *
 * @coversNothing
 */
class LanguageDjeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageDje();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('dje', $language->code());
    }
}
