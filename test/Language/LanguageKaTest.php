<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptGeor;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKa class
 *
 * @coversNothing
 */
class LanguageKaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKa();

        self::assertEquals(new ScriptGeor(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ka', $language->code());
    }
}
