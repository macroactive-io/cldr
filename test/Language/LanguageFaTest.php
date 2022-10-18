<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageFa class
 *
 * @coversNothing
 */
class LanguageFaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageFa();

        self::assertEquals(new ScriptArab(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('fa', $language->code());
    }
}
