<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageGuz class
 *
 * @coversNothing
 */
class LanguageGuzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageGuz();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('guz', $language->code());
    }
}
