<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageHi class
 *
 * @coversNothing
 */
class LanguageHiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageHi();

        self::assertEquals(new ScriptDeva(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('hi', $language->code());
    }
}
