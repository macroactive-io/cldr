<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleTachelhit;
use Macroactive\Cldr\Script\ScriptTfng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageShi class
 *
 * @coversNothing
 */
class LanguageShiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageShi();

        self::assertEquals(new ScriptTfng(), $language->defaultScript());
        self::assertEquals(new PluralRuleTachelhit(), $language->pluralRule());
        self::assertSame('shi', $language->code());
    }
}
