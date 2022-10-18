<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptLaoo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageLo class
 *
 * @coversNothing
 */
class LanguageLoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageLo();

        self::assertEquals(new ScriptLaoo(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('lo', $language->code());
    }
}
