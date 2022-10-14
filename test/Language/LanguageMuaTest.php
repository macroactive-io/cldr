<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMua class
 *
 * @coversNothing
 */
class LanguageMuaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMua();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('mua', $language->code());
    }
}
