<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKln class
 *
 * @coversNothing
 */
class LanguageKlnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKln();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('kln', $language->code());
    }
}
