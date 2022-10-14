<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMgh class
 *
 * @coversNothing
 */
class LanguageMghTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMgh();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('mgh', $language->code());
    }
}
