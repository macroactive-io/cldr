<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Script\ScriptJpan;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageJa class
 *
 * @coversNothing
 */
class LanguageJaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageJa();

        self::assertEquals(new ScriptJpan(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('ja', $language->code());
    }
}
