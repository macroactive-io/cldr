<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptBeng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageAs class
 *
 * @coversNothing
 */
class LanguageAsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAs();

        self::assertEquals(new ScriptBeng(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('as', $language->code());
    }
}
