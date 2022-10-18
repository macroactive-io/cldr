<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageUr class
 *
 * @coversNothing
 */
class LanguageUrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageUr();

        self::assertEquals(new ScriptArab(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ur', $language->code());
    }
}
