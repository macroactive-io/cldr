<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptHebr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageYi class
 *
 * @coversNothing
 */
class LanguageYiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageYi();

        self::assertEquals(new ScriptHebr(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('yi', $language->code());
    }
}
