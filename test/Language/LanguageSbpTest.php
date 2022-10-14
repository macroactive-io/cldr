<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSbp class
 *
 * @coversNothing
 */
class LanguageSbpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSbp();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('sbp', $language->code());
    }
}
