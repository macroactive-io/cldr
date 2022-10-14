<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageAa class
 *
 * @coversNothing
 */
class LanguageAaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAa();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('aa', $language->code());
    }
}
