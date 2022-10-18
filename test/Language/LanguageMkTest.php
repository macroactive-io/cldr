<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Script\ScriptCyrl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMk class
 *
 * @coversNothing
 */
class LanguageMkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMk();

        self::assertEquals(new ScriptCyrl(), $language->defaultScript());
        self::assertEquals(new PluralRule15(), $language->pluralRule());
        self::assertSame('mk', $language->code());
    }
}
