<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptMymr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMy class
 *
 * @coversNothing
 */
class LanguageMyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMy();

        self::assertEquals(new ScriptMymr(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('my', $language->code());
    }
}
