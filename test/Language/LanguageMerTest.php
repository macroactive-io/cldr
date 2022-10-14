<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMer class
 *
 * @coversNothing
 */
class LanguageMerTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMer();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('mer', $language->code());
    }
}
