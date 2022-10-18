<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptNkoo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageNqo class
 *
 * @coversNothing
 */
class LanguageNqoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageNqo();

        self::assertEquals(new ScriptNkoo(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('nqo', $language->code());
    }
}
