<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageQu class
 *
 * @coversNothing
 */
class LanguageQuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageQu();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertSame('qu', $language->code());
    }
}
